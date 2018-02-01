<?php
$servername = "osadbinstance.cao7mpwthtxg.ap-northeast-2.rds.amazonaws.com";
$username = "osa";
$password = "Gackt8919";
$db_name = "cubebio.asia";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully". "<br>";




?>