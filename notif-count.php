<?php
include 'dbconnection.php';

$uid = $_GET['uid'];

try {
    $countQuery = "SELECT COUNT(*) AS total_likes 
                   FROM likes 
                   LEFT JOIN post ON post.id = likes.post_id 
                   WHERE post.user_id = :uid AND likes.user_id != :uid
                         AND status = 'unread'";
    $countStmt = $pdo->prepare($countQuery);
    $countStmt->bindParam(':uid', $uid, PDO::PARAM_INT);
    $countStmt->execute();
    $total = $countStmt->fetch(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    echo json_encode($total);
} catch (PDOException $th) {
    echo json_encode(['error' => $th->getMessage()]);
}
