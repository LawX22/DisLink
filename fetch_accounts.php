<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['email'])) {
    echo json_encode([]);
    exit();
}

$userEmail = $_SESSION['email'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email != ? AND id NOT IN (SELECT friend_id FROM follow WHERE my_id = (SELECT id FROM users WHERE email = ?)) ORDER BY id DESC");
$stmt->execute([$userEmail, $userEmail]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($accounts);
?>
