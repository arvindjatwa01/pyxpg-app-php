<?php 
session_start(); // Starting Session
$error='';
include('dashboard/connection.php');

if(isset($_POST['admin']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
	$query ="select * from blog_login where password='$password' AND email='$username' limit 1";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_assoc($result);
	$c=mysqli_num_rows($result);
	if ($c==1) {
	$_SESSION['login_admin']=$username; // Initializing Session

	 header("location: blogdash/index.php"); // Redirecting To Other Page
	} else {
	$error = "Username or Password is invalid ok".$rows;
	header("location: login.php?msg=$error");
	}
}
?>