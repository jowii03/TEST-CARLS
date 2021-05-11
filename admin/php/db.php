<?php

$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "db_carls";

$conn = new mysqli($servername,$dbusername,$dbpass,$dbname);
if ($conn -> errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

