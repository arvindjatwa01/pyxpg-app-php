<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_GET['id']))
  	{
  		$id=$_GET['id'];
  	//	$sql="select booking.*,photographer.* from booking left join photographer on booking.assigned_photographer=photographer.photographer_id where shoot_id='$id'";
  	    $sql="select booking.*,category.category_name from booking left join category on booking.shoot_need=category.category_id where shoot_id='$id'";
  		$re=mysqli_query($conn,$sql);
  		$row=mysqli_fetch_assoc($re);
  		$pid=$row['assigned_photographer'];
  		$package=$row['shoot_package'];
  		
  		$psql="select * from photographer where photographer_id='$pid'";
  		$pre=mysqli_query($conn,$psql);
      if(mysqli_num_rows($pre)>0)
      {
         $prow=mysqli_fetch_assoc($pre);
      }
      else
      {
         //$prow=mysqli_fetch_assoc($pre);
         $prow['name']="";
         $prow['phone']="";
         $prow['email']="";
      }
  		
  		
  		$packsql="select * from package where package_id='$package'";
  		$packre=mysqli_query($conn,$packsql);
  		$packrow=mysqli_fetch_assoc($packre);
  	}
  	if(isset($_POST['save']))
  	{
  		$phone=$_POST['phoneno'];
  		$email=$_POST['email'];
  		$date=$_POST['date'];
  		$time=$_POST['time'];
  		$shootstudio=$_POST['shootstudio'];
  		$cid=$_POST['cid'];
  		$sql1="update booking set phone='$phone',email='$email',shoot_time='$time',shootat_studio='$shootstudio' where shoot_id='$cid'";
  		$re1=mysqli_query($conn,$sql1);
  		header("location:customerdetail.php?id=".$cid);
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('link.php');?>
	<script src=
"//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">
</script>
	<style>
	input,textarea{margin:0px;padding:0px!important;border:none;outline:0px;}
	.i{float:right;font-size:10px;color:purple}
	
	@media(max-width:768px) {
    #sidebar{
        
       position:relative;
       margin-top:60px;
       max-height:350px;min-height:350px;
       
      
    }
   
    #maincontent{margin-top:70px}
    #adminprofile{padding:5px;width:40px;height:40px;margin-top:2px}
    #topbar{margin-bottom:0px}
    #barlink{margin:10px;visibility:visible!important}
}
@media(min-width:769px) and (max-width: 2100px){
    #sidebar
    {
        display:block!important;
        
    }
}	
	</style>
</head>


<body>
<div class="container-fluid fixed-top">
	<div class="row" style="padding:0px">
		 	<?php include('topbar.php');?>
    </div>
</div>
<div class="container-fluid">
		<div class="row">
		     <?php include('sidebar.php'); ?>
		  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="maincontent">
			
			 <div class="row" style="margin-top:30px">
			 	<div class="col-sm-1">
			 		<a href="wireframe.php">Back</a>
			 	</div>
			 	<div class="col-sm-11"><h3 class="text-center">Booking Id: <?php echo $row['shoot_id'];?></h3> </div>
			 
			 </div>
			 <div class="row" id="bookingdata" style="margin-top:30px">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<table class="table table-bordered" >
					  
                        <tr>
                        <th scope="col">Customer Name</th>
                        <td id="td1"><?php echo $row['name'];?></td>
                       </tr>
                       <script>
                       
                       </script>
                        <tr>
                          <th scope="col">Phone No</th>
                          <td><input type="text" value="<?php echo $row['phone'];?>" id="ponoeno" onfocusout="savedata4(this.value,<?php echo $row['shoot_id'];?>)"><i class='i fa fa-pencil'></i></td>
                       </tr>
                       <tr>
                          <th scope="col">Email</th>
                          <td><?php echo $row['email'];?></td>
                       </tr>
                       
                       <tr>
                          <th scope="col">Partner Name</th>
                          <td><input type="text"  id="partnername" value="<?php echo $row['partner_name'];?>" onfocusout="savedata1(this.value,<?php echo $row['shoot_id'];?>)"><i class='i fa fa-pencil'></i></td>
                       </tr>
                        <tr>
                          <th scope="col">Booking Date</th>
                          <td><?php echo $row['booking_date'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot Date</th>
                          <td><input type="date"  id='shootdate' value='<?php echo date('Y-m-d',strtotime($row['shoot_date']));?>' onfocusout="savedata2(this.value,<?php echo $row['shoot_id'];?>)"><i class='i fa fa-pencil'></i></td>
                       </tr>
                       
                       
                          <tr>
                          <th scope="col">Shoot Time</th>
                          <td><?php echo $row['shoot_time'];?>
                          </td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot Type</th>
                          <td><?php echo $row['shoot_type'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Category</th>
                          <td><?php echo $row['category_name'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot Address</th>
                          <td><?php echo $row['shoot_address'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot City</th>
                          <td><?php echo $row['shoot_City'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot PinCode</th>
                          <td><?php echo $row['shoot_Pincode'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Shoot At Studio?</th>
                          <td><?php echo $row['shootat_studio'];?></td>
                       </tr>
                     <tr>
                        <th scope="col">Package</th>
                        <td><?php echo $packrow['package_title'].", INR <b>". $packrow['package_price']."<b>";?></td>
                       </tr>
                         <tr>
                          <th scope="col">Shoot Duration</th>
                          <td><input type="text" id="shootduration" value="<?php echo $packrow['duration']." Hour";?>"onfocusout="savedata7(this.value,<?php echo $packrow['package_id'];?>)"><i class='i fa fa-pencil'></i></td>
                       </tr>
                      
                        
                      
                       
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<table class="table table-bordered">
					    <tr>
                          <th scope="col">No of Photos</th>
                          <td><input type="text" id="noofphotos" value="<?php echo $row['no_ofphotos'];?>" onfocusout="savedata5(this.value,<?php echo $row['shoot_id'];?>)"><i class='i fa fa-pencil'></i></td>
                       </tr>
					   
                         <tr>
                          <th scope="col">Shoot Notes</th>
                          <td><textarea rows="2" onfocusout="savedata3(this.value,<?php echo $row['shoot_id'];?>)" id="shootnote"><?php echo $row['shoot_note'];?></textarea><i class='i fa fa-pencil'></i></td>
                       </tr>
                      

                       
                       <tr>
                          <th scope="col">photographer's Id</th>
                          <td><?php echo $row['assigned_photographer'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">PhotoGrapher Name</th>
                          <td><?php echo $prow['name'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">PhotoGrapher Email</th>
                          <td><?php echo $prow['email'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">PhotoGrapher Phone</th>
                          <td><?php echo $prow['phone'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Order_id</th>
                          <td><?php echo $row['shoot_id'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">tracking_id</th>
                          <td><?php echo $row['tracking_id'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">bank_ref_no</th>
                          <td><?php echo $row['bank_ref_no'];?></td>
                       </tr>
                        <tr>
                          <th scope="col">order_status</th>
                          <td><?php echo $row['order_status'];?></td>
                       </tr>
                        <tr>
                          <th scope="col">failure_message</th>
                          <td><?php echo $row['failure_message'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">payment_mode</th>
                          <td><?php echo $row['payment_mode'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">card_name</th>
                          <td><?php echo $row['card_name'];?></td>
                       </tr>
                        <tr>
                          <th scope="col">status_code</th>
                          <td><?php echo $row['status_code'];?></td>
                       </tr>
                        <tr>
                          <th scope="col">status_message</th>
                          <td><?php echo $row['status_message'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">currency</th>
                          <td><?php echo $row['currency'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Amount</th>
                          <td><?php echo $row['amount'];?></td>
                       </tr>
                       <tr>
                          <th scope="col">Status</th>
                          <td><?php echo $row['booking_status'];?></td>
                       </tr>
					</table>
				</div>
				  <button onclick="bookingdata()">
                    Click to Export
                </button>
			 </div>
		   </div>
		   
		 
	    </div>
</div>

 <script>
 
 function bookingdata()
 {
     $("#bookingdata").table2excel({
        filename: "Booking.xls"
    });
     
 }
  function savedata4(value,id)
{
	//alert(value);
   var id4=id;
	var val4=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val4:val4,id4:id4},
            success:function(response){

              $("#phoneno").val(response);

            }
          });
}

function savedata7(value,id)
{
	//alert(value);
   var id7=id;
	var val7=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val7:val7,id7:id7},
            success:function(response){

              $("#shootduration").val(response);

            }
          });
}



function savedata5(value,id)
{
	//alert(value);
   var id5=id;
	var val5=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val5:val5,id5:id5},
            success:function(response){

              $("#noofphotos").val(response);

            }
          });
}
 function savedata1(value,id)
{
	//alert(value);
   var id=id;
	var val=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val:val,id:id},
            success:function(response){

              $("#partnername").val(response);

            }
          });
}

function savedata2(value,id)
{
	alert(value);
   var id1=id;
	var val1=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val1:val1,id1:id1},
            success:function(response){

              $("#shootdate").val(response);

            }
          });
}

function savedata3(value,id)
{
	//alert(value);
   var id2=id;
	var val2=value;
	$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{val2:val2,id2:id2},
            success:function(response){

              $("#shootnote").html(response);

            }
          });
}
 </script>
 <script>
$(document).ready(function(){
  $("#barlink").click(function(){
    $("#sidebar").toggle();
  });
});
</script>
</body>
</html>
 <?php
  }
  else {
	echo "<script>alert('Please login First');
                  window.location='index.php';</script>";
}
?> 