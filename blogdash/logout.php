<?php
session_start();
unset($_SESSION['login_admin']); 
header("Location: ../login.php"); // Redirecting To Home Page

?>