<?php 
include('dashboard/connection.php');
$search = $_POST['search'];
$id = $_POST['id'];
$chkval=$_POST['chkval'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];


	$sql_upd = "UPDATE `booking` SET `shootat_studio`='$chkval', `shoot_address`='$search', `address`='$search',`shoot_City`='$city',`shoot_Pincode`='$pincode' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{

 ?>

<input type="text" value="<?php echo $id; ?>" id="last_map_id" name="">
 <?php } ?>