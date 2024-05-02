<?php
include "connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $id = $_SESSION['id'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    if ($firstName && $lastName) {
        // Update the profile information in the database
        $query = "UPDATE users SET firstname = ?, lastname = ? WHERE id = ?";
        $statement = $pdo->prepare($query);
        $result = $statement->execute([$firstName, $lastName, $id]);

        if ($result) {
            echo json_encode(array("res" => "success", "message" => "Profile updated successfully."));
            exit;
        } else {
            echo json_encode(array("res" => "error", "message" => "Failed to update profile."));
            exit;
        }
    } else {
        echo json_encode(array("res" => "error", "message" => "Please provide both first name and last name."));
        exit;
    }
}
