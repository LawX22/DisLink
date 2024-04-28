<?php
// Include database connection
include 'dbconnection.php';

// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$retype_password = $_POST['retype_password'];

// Perform validation
$errors = [];

if (empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($retype_password)) {
    $errors[] = "All fields are required";
} else {
    if ($password !== $retype_password) {
        $errors['password'] = "Passwords do not match";
    }

    // Check if the password field is not empty before validating its length
    if (!empty($password) && strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }
}

// If no errors, proceed with signup
if (empty($errors)) {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare statement to insert user data into the database
    $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, gender, email, password) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bindParam(1, $firstname);
    $stmt->bindParam(2, $lastname);
    $stmt->bindParam(3, $gender);
    $stmt->bindParam(4, $email);
    $stmt->bindParam(5, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "success"; // Send success response to AJAX
    } else {
        echo "Error: Unable to execute the query.";
    }
} else {
    // Send error messages to AJAX
    echo json_encode($errors);
}

// Close connection (optional, as PHP automatically closes it at the end of script execution)
$pdo = null;
?>
