<?php
//Step 2: Create a database connection.
// Server configuration
$servername = "172.17.56.25";
$username = "11153879";
$password = "!@AD3879";
$dbname = "ad11153879"; 

// Create connection
global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>