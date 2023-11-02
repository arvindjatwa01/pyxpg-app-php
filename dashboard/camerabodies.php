<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     
  	 $cbody=addslashes($_POST['cbody']);
  	
    $sql="insert into camera_bodies(camera_body) values('$cbody')";
    $res=mysqli_query($conn,$sql);
    header('location:camerabodies.php');
  	}

    if(isset($_POST['upsave']))
  	{
  	     	 $upcbody=addslashes($_POST['upcbody']);
  	 
  	 

            $cid=$_POST['cid'];
  	        $upsql="update camera_bodies set camera_body='$upcbody' where cbody_id='$cid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:camerabodies.php');
  	     
  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];
	    
	     $sql="delete from camera_bodies where cbody_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:camerabodies.php');
	          
	 
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
    </div>
</div>
<div class="container-fluid">
		<div class="row">
		     <?php include('sidebar.php'); ?>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="maincontent">
			<div class="row justify-content-md-center" style="margin-top:10px">
				<div class="col-sm-6">
				  <h3 style="text-align:center;font-weight: bold;margin-bottom:20px">Add Camera Bodies</h3>
				</div>
			</div>
			<div class="row justify-content-md-center" style="margin-top:10px">
				<div class="col-sm-5">
                    <form method="POST">
                    	<div class="form-group">
                    		<label>Camera Body Name</label><br>
                    		<input type="text" class="form-control" name="cbody">
                    	</div>
                    	<div class="form-group">
                    		
                    		<input type="submit" class="btn form-control" value="Add New Camera Body" name="save">
                    	</div>
                    </form>
				</div>
			</div>
			<div class="row" style="margin-top:20px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Camera Bodies</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                     
                        <th scope="col">Camera Body</th>
                        
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select * from camera_bodies";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         
  	                		         <td>".$row['camera_body']."</td>
  	                		         
  	                		         <td> <a href='camerabodies.php?delid=".$row['cbody_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['cbody_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
<div class="modal fade" id="editModal<?php echo $row['cbody_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Camera Body</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
            <input type="hidden" name="cid" value="<?php echo $row['cbody_id'];?>">
         	   <div class="form-group">
                   <label>Camera Body</label>
                   <input type="text" class="form-control" name="upcbody" value="<?php echo $row['camera_body'];?>">
                </div>

        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" name="upsave">Save</button>
        
      </div>
       </form>
    </div>
  </div>
</div>



  	                <?php	}
  	                	?>
  	                </tboady>
                    </thead>
            	</table>
				</div>
			</div>
		</div>
	    </div>

</div>


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