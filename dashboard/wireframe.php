<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	

  	if(isset($_GET['wireframe_id']))
     {
	     $wireframe_id=$_GET['wireframe_id'];
	    
	     $sql="delete from booking where shoot_id ='$wireframe_id'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:wireframe.php');
	          
	 
     }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('link.php');?>
	<style>
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
		 	<script src=
"//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">
</script>
    </div>
</div>
<div class="container-fluid">
		<div class="row">
		     <?php include('sidebar.php'); ?>
		<div class="col-sm-12 col-md-9 col-lg-9" id="maincontent">
			
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Bookings</h2>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6">
						</div>
						<div class="col-sm-2">
							<select class="form-control" onchange="statusfilter(this.value);">
								<option selected disabled>Select</option>
                                <option value="New">New</option>
                                <option value="Assigned">Assigned</option>
                                <option value="Pending">Pending</option>
                                <option value="Pending Upload">Pending Upload</option>
                                <option value="Editing">Editing</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="On Hold">On Hold</option>
                                <option value="All"> View All</option>
							</select>
						</div>
						<div class="col-sm-4">

							<input type="text" id="search" class="form-control" autocomplete="off" placeholder="Search here..">
						</div>
					</div>
					
				</div>

				<div class="col-sm-12">
					<div class="result" id="searchdata"></div>
				</div>
				<div class="col-sm-12" id="bookingdata">
					<table  class="table table-hover table-bordered" style="margin-top:10px">
            		<thead class="thead-dark">
 	                  <tr>
                        <th scope="col">Booking Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Shoot Date</th>
                        <th scope="col">Photographer Id</th>
                        <th scope="col">Status</th>
  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	
  	 
  	                	$sql="select * from booking order by shoot_id desc";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                	           
                    		   	
                    		   	
  	                	    if($row['phone']=='')
  	                	    {}
  	                	    else
  	                	    {
  	                	?>
                        <tr>
                             <td>
                            <a href="customerdetail.php?id=<?php echo $row['shoot_id']; ?>"><?php echo $row['shoot_id']; ?></a>
                          </td>
                          <td>
                            <?php echo $row['name']; ?>
                          </td>
                          <td>
                            
                            <?php echo $row['phone']; ?>
                          </td>
                          <td>
                            <?php echo $row['booking_date']; ?>
                          </td>
                          <td>
                            <?php echo $row['shoot_date']; ?>
                          </td>
                          <td>
                          	<select class="form-control" id="photographerlist" onchange="savephotographer(<?php echo $row['shoot_id'];?>,this.value)">
                          		<option selected disabled>Select</option>
                            <?php 
                            $sql="select * from photographer where status='Approved' AND accept_booking='Yes'";
                            $pre=mysqli_query($conn,$sql);

                            while($prow=mysqli_fetch_assoc($pre))
                            {?>
                              
                              	<option value="<?php echo $prow['photographer_id'];?>" <?php if($row['assigned_photographer']==$prow['photographer_id']){echo "selected";}?>><?php echo $prow['photographer_id'];?></option>
                              
                            <?php
                             }
                            ?>
                            </select>
                          </td>
                          <td>
                             <select class="form-control" onchange="savestatus(this.value,<?php echo $row['shoot_id'];?>)">
                             
                              <option value="New" <?php if($row['booking_status']=='New'){echo "selected";}?>>New</option>
                              <option value="Assigned" <?php if($row['booking_status']=='Assigned'){echo "selected";}?>>Assigned</option>
                              <option value="Pending" <?php if($row['booking_status']=='Pending'){echo "selected";}?>>Pending</option>
                              <option value="Pending Upload" <?php if($row['booking_status']=='Pending Upload'){echo "selected";}?>>Pending Upload</option>
                              <option value="Editing" <?php if($row['booking_status']=='Editing'){echo "selected";}?>>Editing</option>
                              <option value="Completed" <?php if($row['booking_status']=='Completed'){echo "selected";}?>>Completed</option>
                              <option value="Cancelled" <?php if($row['booking_status']=='Cancelled'){echo "selected";}?>>Cancelled</option>
                              <option value="On Hold" <?php if($row['booking_status']=='On Hold'){echo "selected";}?>>On Hold</option>
                            </select>
                          </td>
                          
                          
                        </tr>
  	                <?php	}}
  	                	?>
  	                </tboady>
                    </thead>
            	</table>
				</div>
			<button onclick="bookingdata();">Click to Excel</button>
			</div>
		</div>
	    </div>

</div>
<script>
    function bookingdata(){
         
        $("#bookingdata").table2excel({
            filename: "booking.xls"
        });
        
    }
     function searchdata(){
         
        $("#searchdata").table2excel({
            filename: "searchdata.xls"
        });
        
    }
	function statusfilter(status)
	{
		//alert(status);
		if(status=='All')
		{
		   window.location.href='wireframe.php'; 
		}
		else
		{
		  	var status=status;
		$.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{status:status},
            success:function(response){

              $(".result").html(response);

            }
          });  
		}
	
	}
    $(document).ready(function(){
        // fetch data from table without reload/refresh page
        loadData();
        function loadData(query){

          $.ajax({
            url : "action2.php",
            type: "POST",
            chache :false,
            data:{query:query},
            success:function(response){

              $(".result").html(response);

            }
          });
          // $("#maintable").css("visibility","hidden");  
        }

        // live search data from table without reload/refresh page
        
        $("#search").keyup(function(){
        	//alert("yes");
          var search = $(this).val();
          //alert(search);
          if (search !="") {
            loadData(search);
          }else{
            loadData();
          }
        });
    });
</script>
<script>

function savephotographer(a,value)
{
	//alert(a);
    //	alert(value);
		var shootid=a;
		var pgid=value;
        $.ajax({  
                url:"action2.php",  
                method:"POST",  
                data:{shootid:shootid,pgid:pgid},
                //data-type:'JSON',  
                success:function(data){  
                	console.log("done");
                    // $('#result').html(data);  
                }  
           });
}

function savestatus(value,id)
{
	var bookingid=id;
		var statusval=value;
        $.ajax({  
                url:"action2.php",  
                method:"POST",  
                data:{bid:bookingid,sval:statusval},
                //data-type:'JSON',  
                success:function(data){  
                	console.log("done");
                    // $('#result').html(data);  
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
<?php }
else {
	echo "<script>alert('Please login First');
                  window.location='index.php';</script>";
}?>