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

    // Sample query to insert user data into the database
    $query = "INSERT INTO users (firstname, lastname, gender, email, password) VALUES ('$firstname', '$lastname', '$gender', '$email', '$hashed_password')";
    if ($mysqli->query($query) === TRUE) {
        echo "success"; // Send success response to AJAX
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
} else {
    // Send error messages to AJAX
    echo json_encode($errors);
}

// Close connection (optional, as PHP automatically closes it at the end of script execution)
$mysqli->close();
?>
