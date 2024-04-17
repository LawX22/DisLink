<?php
// Include database connection
include 'dbconnection.php';

// Get email and password from AJAX request
$email = $_POST['email'];
$password = $_POST['password'];

// Perform validation and authentication
$errors = [];

// Check if email and password are provided
if (empty($email) || empty($password)) {
    $errors[] = "Email and password are required";
} else {
    // Sanitize inputs to prevent SQL injection
    $email = $mysqli->real_escape_string($email);
    $password = $mysqli->real_escape_string($password);
    
    // Query to retrieve user with the provided email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $mysqli->query($query);
    
    if ($result && $result->num_rows == 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, login successful
            echo "success";
        } else {
            // Password is incorrect
            $errors[] = "Invalid email or password";
        }
    } else {
        // User not found with the provided email
        $errors[] = "Invalid email or password";
    }
}

// If there are errors, send them to AJAX
if (!empty($errors)) {
    echo implode(" ", $errors);
}

// Close connection
$mysqli->close();
?>
