<?php
$servername = "localhost:3309";
$username = "root";
$password = "aji221195";
$dbname = "client";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully.";