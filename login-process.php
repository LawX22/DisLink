<?php
session_start();
include 'dbconnection.php';

// Check if email and password are set in the POST request
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Sanitize and assign email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query to check user credentials
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists and verify password
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['email'] = $user['email'];
        // Return a success response
        echo "success";
        exit();
    } else {
        // Return an error message
        echo "Invalid credentials";
        exit();
    }
} else {
    // Return an error message if email and password are not set
    echo "Email and password are required";
    exit();
}
?>
