<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     
  	 $name=addslashes($_POST['pname']);
  	 $cname=addslashes($_POST['cname']);
  	 $address=addslashes($_POST['address']);
  	 $filename=uniqid($_FILES['profileimage']['name']);
    $tempname = $_FILES["profileimage"]["tmp_name"]; 
    $folder = "images/".basename($filename);
    move_uploaded_file($tempname, $folder);
      
    $sql="insert into snapperlist(snapper_name,snapper_address,snapper_camera,snapper_image) values('$name','$address','$cname','$filename')";
    $res=mysqli_query($conn,$sql);
    header('location:photographerlist.php');
  	}

    if(isset($_POST['upsave']))
  	{
  	     $uppname=addslashes($_POST['uppname']);
  	       $upcname=addslashes($_POST['upcname']);
  	 $upaddress=addslashes($_POST['upaddress']);
  	             
  	      $filename1=$_FILES['upprofileimage']['name'];
  	      if($filename1=="")
  	      {

            $sid=$_POST['sid'];
  	        $upsql="update snapperlist set snapper_name='$uppname',snapper_address='$upaddress',snapper_camera='$upcname' where snapper_id='$sid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:photographerlist.php');
  	      }
  	      else
  	      {
            $sid=$_POST['sid'];
  	      	$schk="select * from snapperlist where snapper_id='$sid'";
  	   	   $rechk=mysqli_query($conn,$schk);
  	   	   $rwchk=mysqli_fetch_assoc($rechk);

  	   	    $fexists = "images/".basename($rwchk['snapper_image']);
            unlink($fexists);
            $filename1=uniqid($_FILES['upprofileimage']['name']);
  	      	 $tempname1 = $_FILES["upprofileimage"]["tmp_name"]; 
          $folder1 = "images/".basename($filename1);
          move_uploaded_file($tempname1, $folder1);
         
  	      $upsql="update snapperlist set snapper_name='$uppname',snapper_address='$upaddress',snapper_camera='$upcname',snapper_image='$filename1' where snapper_id='$sid'";
  	      $upre=mysqli_query($conn,$upsql);
  	      header('location:photographerlist.php');
  	      }
         
     
      
  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];
	    
	     $sql="delete from snapperlist where snapper_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:photographerlist.php');
	          
	 
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
				<div class="col-sm-2">
					<button type="button" class="btn" data-target="#exampleModal" data-toggle='modal'>Add New Photographer</button>
				</div>
			</div>
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Photograpers</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                       
                      
                        
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                       <th scope="col">Camera Name</th>
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select * from snapperlist";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         <td><img src='images/".$row['snapper_image']."' width='60px' height='60px'></td>
  	                		         <td>".$row['snapper_name']."</td>
  	                		         <td>".$row['snapper_address']."</td>
  	                		         <td>".$row['snapper_camera']."</td>
  	                		         <td> <a href='photographerlist.php?delid=".$row['snapper_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['snapper_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
 
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