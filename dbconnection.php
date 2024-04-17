<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dislink-db';

// Create connection
$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
