<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database ="smart_campus_energy_saver";

try {
  // Create connection
  $conn = new mysqli($servername, $db_username, $db_password, $database);
} catch (mysqli_sql_exception) {
    die("Connection failed");
}
// echo "Connected successfully";
?>