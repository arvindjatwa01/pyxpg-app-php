<?php 
include('dashboard/connection.php');
$type = $_POST['type'];
$sql_insert = "INSERT INTO `booking` (`shoot_type`) VALUES ('$type') ";
if($conn->query($sql_insert)==true)
{

 ?>
 <!-- <?php 
 // echo $conn->insert_id; ?> -->
<input type="hidden" id="last_insert_id" value="<?php echo $conn->insert_id; ?>" name="">
 <?php } ?>