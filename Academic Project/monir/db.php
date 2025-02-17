<?php
$host = "localhost";
$user = "root"; // Default XAMPP MySQL user
$pass = ""; // Default password is empty in XAMPP
$dbname = "myapp";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
