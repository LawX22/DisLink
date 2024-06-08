<?php
include 'dbconnection.php';

$uid = $_GET['uid'];

try {
    $query = "SELECT likes.*, 
                     users.firstname,
                     users.profile_picture,
                     users.id AS uidd,
                     post.user_id AS kid
              FROM likes
              LEFT JOIN users ON users.id = likes.user_id
              LEFT JOIN post ON post.id = likes.post_id
              WHERE post.user_id = :uid AND likes.user_id != :uid
              GROUP BY likes.id
              ORDER BY likes.id DESC";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':uid', $uid, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    echo json_encode($result);
} catch (PDOException $th) {
    echo json_encode(['error' => $th->getMessage()]);
}
