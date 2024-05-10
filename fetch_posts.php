<?php
include 'dbconnection.php';

$cuid = $_GET['cuid'];

try{
    $query = "SELECT post.*, users.firstname, users.lastname, users.profile_picture, follow.my_id, follow.friend_id
            FROM post INNER JOIN users ON post.user_id = users.id LEFT JOIN follow ON post.user_id = follow.friend_id
            WHERE follow.my_id = :cuid OR users.id = :cuid
            ORDER BY post.id DESC";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cuid', $cuid);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    echo json_encode($result);
}catch (PDOException $th ) {
    echo json_encode(['error' => $th->getMessage()]);
}
?>