<?php
$servername = "mysql";  // Use the service name defined in your docker-compose.yml
$username = "root";
$password = "root";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Could not connect to MySQL: ' . $conn->connect_error);
}
?>

