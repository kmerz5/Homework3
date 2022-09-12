<?php
$servername = "localhost";
$username = "kyliemer_Homework3";
$password = "ChunkyMonkey01!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
