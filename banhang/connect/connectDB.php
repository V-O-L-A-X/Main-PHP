<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="noithat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Kết nối đến dữ liệu thất bại " . mysqli_connect_error());
}

?>