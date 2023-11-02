<?php
$servername = "localhost";
$username = "root";
$password = "";
//$username="root";
//$password="";
$dbname = "pyxnewdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo"connected";
// Cifheck connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}?>