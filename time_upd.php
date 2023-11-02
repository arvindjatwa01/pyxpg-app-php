<?php 
include('dashboard/connection.php');
$time = $_POST['time'];
$id = $_POST['id'];

// $fetch_sql = "SELECT * FROM `booking` WHERE `shoot_time`='$time' ";
// $result = $conn->query($fetch_sql);
// $total = $result->num_rows;
// if($total>0)
// {
// 	echo '<script>
// 			alert("This time is already selected please select another time Thank You !");
// 		</script>';
// }
// else{
	$sql_upd = "UPDATE `booking` SET `shoot_time`='$time' WHERE `shoot_id`='$id' ";
	if($conn->query($sql_upd)==true)
	{

 ?>
<?php ?>
 <?php }
// }
 ?>