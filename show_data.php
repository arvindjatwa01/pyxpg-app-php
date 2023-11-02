<?php 
include('dashboard/connection.php');
$id = $_POST['last_id'];
$sql = "SELECT * FROM `booking` WHERE `shoot_id`='$id' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

 ?>
 <div class="col-md-12 last_time form-control" style="border: 1px solid #ced4da;"><p><?php echo $row['shoot_date']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><i class="fa fa-calendar" style="float: right;margin-right: 20px;margin-top: -20px;" aria-hidden="true"></i></div>
 <!-- <div class="col-md-3"></div> -->
<!-- <input type="date" class="form-control" required="" placeholder="Phone No." id="user_phone" value="<?php 
// echo $row['shoot_time']; ?>"> -->