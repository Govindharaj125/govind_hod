<?php
// MySQL Database Configuration

$hostname = "localhost";
$username = "u311059687_csistmarkschur";
$password = "]q2p/U440sLY";
$database = "u311059687_csistmarkschur";

// Create MySQLi connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// OPTIONAL: Set UTF-8 encoding
$conn->set_charset("utf8");
?>
