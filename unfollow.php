<?php
session_start();
include 'dbconnection.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

// Check if friendId is provided
if (!isset($_POST['friendId'])) {
    echo json_encode(['status' => 'error', 'message' => 'Friend ID not provided']);
    exit();
}

$userEmail = $_SESSION['email'];
$friendId = $_POST['friendId']; 

// Log received friendId
error_log("Received Friend ID: $friendId");

$stmt = $pdo->prepare("DELETE FROM follow WHERE user_id = (SELECT id FROM users WHERE email = ?) AND friend_id = ?");
$stmt->execute([$userEmail, $friendId]);

if ($stmt->rowCount() > 0) {
    echo json_encode(['status' => 'success', 'message' => 'Unfollowed successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to unfollow']);
}
?>
