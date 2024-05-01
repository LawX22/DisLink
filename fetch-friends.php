<?php
session_start();
include 'dbconnection.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}

$userEmail = $_SESSION['email'];

// Prepare SQL query to retrieve friends' information including profile picture
$stmt = $pdo->prepare("SELECT u.firstname, u.lastname, u.profile_picture FROM users u INNER JOIN follow f ON u.id = f.friend_id WHERE f.user_id = (SELECT id FROM users WHERE email = ?)");
$stmt->execute([$userEmail]);
$friends = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Count the number of friends
$numFriends = count($friends);

// Encode the list of friends along with the count
$response = [
    'status' => 'success',
    'numFriends' => $numFriends,
    'friends' => $friends
];

// Echo the JSON response
echo json_encode($response);
?>
