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

/*mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");*/




?>