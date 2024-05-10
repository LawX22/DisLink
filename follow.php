<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

$userEmail = $_SESSION['email'];
$friendId = $_POST['friendId']; 

$stmt = $pdo->prepare("INSERT INTO follow (my_id, friend_id, created_at) VALUES ((SELECT id FROM users WHERE email = ?), ?, NOW())");
$stmt->execute([$userEmail, $friendId]);

if ($stmt->rowCount() > 0) {
    echo json_encode(['status' => 'success', 'message' => 'Followed successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to follow']);
}