<?php
include 'dbconnection.php';

$cuid = $_GET['cuid'];

try {
    $query = "SELECT post.*,
                users.firstname,
                users.lastname,
                users.profile_picture,
                follow.my_id,
                follow.friend_id,
                COALESCE(likes_count.likes_user_ids, '') AS likes_user_ids,
                COALESCE(likes_count.count, 0) AS likes_count
            FROM post
            INNER JOIN users ON post.user_id = users.id
            LEFT JOIN follow ON post.user_id = follow.friend_id
            LEFT JOIN (
                SELECT 
                        post_id, 
                        GROUP_CONCAT(user_id) AS likes_user_ids,
                        COUNT(*) AS count
                    FROM likes
                    GROUP BY post_id
            ) AS likes_count ON likes_count.post_id = post.id
            WHERE follow.my_id = :cuid OR users.id = :cuid
            GROUP BY post.id
            ORDER BY post.id DESC";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cuid', $cuid);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as &$post) {
        if (!empty($post['image'])) {
            $imgFilename = json_decode($post['image'], true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post['image'] = array_map(function($filename) {
                    return './uploads/' . $filename;
                }, $imgFilename);
            } else {
                $post['image'] = [];
            }
        } else {
            $post['image'] = [];
        }
    }

    header('Content-type: application/json');
    echo json_encode($result);
} catch (PDOException $th) {
    echo json_encode(['error' => $th->getMessage()]);
}
?>
