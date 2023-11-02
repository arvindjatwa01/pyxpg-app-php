<?php 
include('dashboard/connection.php');
$date = $_POST['date'];
$id = $_POST['id'];
	
	$sql_upd = "UPDATE `booking` SET `shoot_date`='$date' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{

 ?>
<?php echo $date; ?>
<!-- <input type="text" value="<?php 
// echo $date; ?>"  name=""> -->
 <?php } ?>