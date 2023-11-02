<?php 
include('dashboard/connection.php');
$need = $_POST['need'];
$id = $_POST['id'];
	
	$sql_upd = "UPDATE `booking` SET `shoot_need`='$need' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{

 ?>

<input type="text" value="<?php echo $id; ?>" id="last_portrait_id" name="">
 <?php } ?>