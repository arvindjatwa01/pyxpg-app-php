<?php include('connection.php');
  session_start();
  session_destroy();
  echo "logout successfully";
  header('location:index.php');
?>