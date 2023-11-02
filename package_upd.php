<?php 
include('dashboard/connection.php');
$package = $_POST['package'];
$id = $_POST['id'];
	
	$sql_upd = "UPDATE `booking` SET `shoot_package`='$package' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{
// $fetch_booking = "SELECT * FROM `booking` WHERE `shoot_id`='$id' ";
// $result_booking = $conn->query($fetch_booking);
// $row_booking = $result_booking->fetch_assoc();


$fetch_package = "SELECT * FROM `package` WHERE `package_id`='$package' ";
$result_package = $conn->query($fetch_package);
$row_package = $result_package->fetch_assoc();
 ?>

<!-- <input type="text" value="<?php 
// echo $id; ?>" id="last_package_id" name=""> -->
<p>Package: <?php echo $row_package['package_desc'];?><br>
Cost: INR <span id="amountofamount"><?php echo $row_package['package_price']; ?></span><br> Shoot Time: <?php echo $row_package['duration']; ?>&nbsp;Hours</p>
 <?php } ?>