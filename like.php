<?php
include 'dbconnection.php';

if(isset($_POST['postId']) && isset($_POST['userId'])) {
    $postId = $_POST['postId'];
    $userId = $_POST['userId'];
    $status = "unread";

    try {
        $query = "INSERT INTO likes (post_id, user_id, status) VALUES (:post_id, :user_id, :status)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':post_id', $postId);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':status', $status);
        $res = $stmt->execute();

        if ($res) {
            // Get updated like count
            $query = "SELECT COUNT(*) AS likeCount FROM likes WHERE post_id = :post_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':post_id', $postId);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo $row['likeCount'];
        } else {
            echo "Error";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: postId and/or userId not provided.";
}
?>
