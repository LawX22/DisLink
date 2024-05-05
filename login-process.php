<?php
session_start(); // Start the session

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
        $_SESSION['email'] = $user['email']; // Set email in session
        $_SESSION['firstname'] = $user['firstname']; // Set first name in session
        $_SESSION['lastname'] = $user['lastname']; // Set last name in session
        $_SESSION['profile_picture'] = $user['profile_picture']; // Set profile image URL in session
        // Return a success response

        $res = array(
            "success" => true,
            "uid" => $user['id']
        );
        echo json_encode($res);
        //echo "success";
        exit();
    } else {
        // Return an error message
        //echo "Invalid credentials";
        echo json_encode(['error' => 'Invalid credentials']);
        exit();
    }
} else {
    // Return an error message if email and password are not set
    //echo "Email and password are required";
    echo json_encode(['error' => 'Email and password are required']);
    exit();
}
?>
