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
		<div class="col-sm-9" id="maincontent">
			
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
 <div class="modal fade" id="editModal<?php echo $row['snapper_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Photographer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
         	<input type="hidden" name="sid" value="<?php echo $row['snapper_id'];?>">
         	 <div class="form-group">
                   <label>Photographer Name</label>
                   <input type="text" class="form-control" name="uppname" value="<?php echo $row['snapper_name'];?>">
                </div>
         	    <div class="form-group">
                   <label>Photographer's Address</label>
                   <input type="text" class="form-control" name="upaddress" value="<?php echo $row['snapper_address'];?>">
                </div>
                <div class="form-group">
                   <label>Camera Name</label>
                   <input type="text" class="form-control" name="upcname" value="<?php echo $row['snapper_camera'];?>">
                </div>
                  <div class="form-group">
          	  	  <label>Upload Profile Image</label><br>
          	  	  <input type="file" id="upprofileimg<?php echo $row['snapper_id'];?>" name="upprofileimage">
          	     </div>
          	  
          	  	  <img id="upimgshow<?php echo $row['snapper_id'];?>" height="100" width="100" src="images/<?php echo $row['snapper_image'];?>">
        
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" name="upsave">Save</button>
        
      </div>
       </form>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(()=>{
      $('#upprofileimg<?php echo $row['snapper_id'];?>').change(function(){
      	//alert("yes");
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#upimgshow<?php echo $row['snapper_id'];?>').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
</script>
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
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Photographer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
         	 <div class="form-group">
                   <label>Photographer Name</label>
                   <input type="text" class="form-control" name="pname">
                </div>
         	    <div class="form-group">
                   <label>Photographer's Address</label>
                   <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                   <label>Camera Name</label>
                   <input type="text" class="form-control" name="cname">
                </div>
                  <div class="form-group">
          	  	  <label>Upload Profile Image</label><br>
          	  	  <input type="file" id="profileimg" name="profileimage">
          	     </div>
          	  
          	  	  <img id="imgshow" height="100" width="100" src="imgsrc.png">
        
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" name="save">Save</button>
        
      </div>
       </form>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(()=>{
      $('#profileimg').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgshow').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
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