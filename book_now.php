<?php 
include('dashboard/connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id = $_POST['id'];
	$date=date('Y-m-d');
	$sql_upd = "UPDATE `booking` SET `name`='$name', `email`='$email', `phone`='$phone', `address`='$address',booking_date='$date',booking_status='New' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{
// echo '<script>alert("Thank you for booking your shoot with Pyx. Please wait for us to get back to you with your photographer details.")</script>';
 ?>
 <div style="color: green;">Thank you for booking your shoot with Pyx. Please wait for us to get back to you with your photographer details.</div>
 <?php } ?>