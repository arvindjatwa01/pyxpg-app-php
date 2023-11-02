<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
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
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="maincontent">
			
			
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Photographer</h2>
				</div>
				<!---search---->
				<div class="col-sm-12">
				    	<div class="row">
						<div class="col-sm-6">
						</div>
						<div class="col-sm-2">
						<select id='joinliststatus' onchange='statusfilter(this.value)' class='form-control'>
  	                		            <option selected disabled>Select</option>
  	                		            <option value='Pending'>Pending</option>
  	                		            <option value='Applied'>Applied</option>
  	                		            <option value='Rejected'>Rejected</option>
  	                		            <option value='Approved'>Approved</option>
  	                		            <option value='Deactivated'>Deactivated</option>
  	                		            <option value='All'>View All</option>
  	                		           </select> 
						</div>
						<div class="col-sm-4">

							<input type="text" id="search" class="form-control" autocomplete="off" placeholder="Search here..">
						</div>
					</div>
					
				</div>

			
				<!---search end--->
				<div class="col-sm-12">
					<div class="result" id="searchdata"></div>
				</div>
				<div class="col-sm-12" id="viewtable">
                     
                     <br>
                  
					<table class="table table-hover table-bordered">
            		    <thead class="thead-dark">
 	                  <tr>
 	                  	<th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Accept Booking</th>
                        <th scope="col">Status</th>
  	                 </tr>
  	                <tboady id="myTable">
  	                	<?php
  	                	$sql="select * from photographer order by photographer_id DESC";
  	                	$re=mysqli_query($conn,$sql);
  	                
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	              
  	                		echo "<tr>
  	                		         <td>".$row['photographer_id']."</td>
  	                		         <td>".$row['name']."<br><a href='phtographerdetail.php?id=".$row['photographer_id']."'>View Details</a></td>
  	                		         <td>".$row['email']."</td>
  	                		         <td>".$row['phone']."</td>";
  	                		          if($row['status']=='Approved')
  	                		          {
  	                		          
  	                		         echo"<td><input type='radio' name='acceptbooking".$row['photographer_id']."' value='Yes' id=".$row['photographer_id'].'"';if($row['accept_booking']=='Yes'){echo " checked";}; echo"><label>Yes</label>&nbsp;&nbsp;
  	                		             <input type='radio' name='acceptbooking".$row['photographer_id']."' value='No' id=".$row['photographer_id'].'"';if($row['accept_booking']=='No'){echo " checked";}; echo"><label>No</label>
  	                		             </td>";
  	                		             }
  	                		             else
  	                		             {
  	                		               echo"<td><input type='radio' disabled><label>Yes</label>&nbsp;&nbsp;
  	                		                        <input type='radio' disabled><label>No</label>
  	                		                   </td>";  
  	                		             }
  	                		        echo "<td> 
  	                		           <select id='selectstatus".$row['photographer_id']."' onchange='status(".$row['photographer_id'].",this.value)' class='form-control'>
  	                		            <option selected disabled>Select</option>
  	                		            <option value='Pending'";if($row['status']=='Pending'){echo "selected";}echo " >Pending</option>
  	                		            <option value='Applied'";if($row['status']=='Applied'){echo "selected";}echo ">Applied</option>
  	                		            <option value='Rejected'";if($row['status']=='Rejected'){echo "selected";}echo ">Rejected</option>
  	                		            <option value='Approved'";if($row['status']=='Approved'){echo "selected";}echo ">Approved</option>
  	                		            <option value='Deactivated'";if($row['status']=='Deactivated'){echo "selected";}echo ">Deactivated</option>
  	                		           </select> 
									 </td>
  	                		      </tr>";?>

                      <?php	}
  	                	?>
  	                </tboady>
                    </thead>
            	    </table>
            	    
				</div>
				
				<button onclick="getdata()">Get Excel</button>
			</div>
		</div>
	    </div>

</div>
 
<script>

function searchdata ()
{
    $("#searchdata").table2excel({
        filename: "searchphotographerdata.xls"
    });
}

function getdata ()
{
    $("#viewtable").table2excel({
        filename: "allphotographerdata.xls"
    });
}


	function status(a,value)
	{
	    var pid=a;
		var status=value;
// 		console.log(pid);
		console.log(value);
        $.ajax({  
                url:"action2.php",  
                method:"POST",  
                data:{pid:pid,status:status}, 
                dataType :"JSON",
                success:function(data){  
                    console.log("approved");
                    // $('#result').html(data);  
                },
                error:function(data)
                {
                  console.log(data);                    
                }
           });
	
	}
</script>
<script>
$(document).ready(function(){
        // fetch data from table without reload/refresh page
        loadData();
        function loadData(query){

          $.ajax({
            url : "action.php",
            type: "POST",
            chache :false,
            data:{query:query},
            success:function(response){

              $(".result").html(response);

            }
          });
        
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
function statusfilter(status)
	{
	    	var status=status;
	    if(status=='All')
		{
		   window.location.href='joinuslist.php'; 
		}
		else
		{
		  
		$.ajax({
            url : "action.php",
            type: "POST",
            chache :false,
            data:{status:status},
            success:function(response){

              $(".result").html(response);

            }
          });    
		}
		//alert(status);
		
	
	
	}
</script>
 <script>
 	
 	$(document).ready(function(){  
      $('input[type="radio"]').click(function(){  
           var booking = $(this).val(); 
           console.log(booking);
           var id=$(this).attr("id");
           $.ajax({  
                url:"action2.php",  
                method:"POST",  
                data:{booking:booking,id:id},  
                success:function(data){  
                    // $('#result').html(data);  
                }  
           }); 
      });  
 });  
 	
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