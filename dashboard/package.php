<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     
  	 $title=addslashes($_POST['ptitle']);
  	 $desc=addslashes($_POST['desc']);
  	 $price=addslashes($_POST['price']);
  	 $value=addslashes($_POST['radiobtn']);
  	 $duration=addslashes($_POST['duration']);
  	 $shoottype=addslashes($_POST['shoottype']);
  	  $packagefor=addslashes($_POST['packagefor']);
  	 $filename=uniqid($_FILES['profileimage']['name']);
    $tempname = $_FILES["profileimage"]["tmp_name"]; 
    $folder = "images/".basename($filename);
    move_uploaded_file($tempname, $folder);
      
    $sql="insert into package(package_title,package_price,package_desc,package_image,packagefor,shoot_type,No_ofphotos,duration) values('$title','$price','$desc','$filename','$packagefor','$shoottype','$value','$duration')";
    $res=mysqli_query($conn,$sql);
    header('location:package.php');
  	}

    if(isset($_POST['upsave']))
  	{
  	     	 $title=addslashes($_POST['upptitle']);
  	 $desc=addslashes($_POST['updesc']);
  	 $price=addslashes($_POST['upprice']);
  	  $packagefor=addslashes($_POST['uppackagefor']);
  	    	 $shoottype=addslashes($_POST['upshoottype']);
    $value=addslashes($_POST['upradiobtn']);
  	 $duration=addslashes($_POST['upduration']);
  	             
  	      $filename1=$_FILES['upprofileimage']['name'];
  	      if($filename1=="")
  	      {

            $pid=$_POST['pid'];
  	        $upsql="update package set package_title='$title',package_price='$price',package_desc='$desc',packagefor='$packagefor',shoot_type='$shoottype',No_ofphotos='$value',duration='$duration' where package_id='$pid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:package.php');
  	      }
  	      else
  	      {
            $pid=$_POST['pid'];
  	      	$schk="select * from package where package_id='$pid'";
  	   	   $rechk=mysqli_query($conn,$schk);
  	   	   $rwchk=mysqli_fetch_assoc($rechk);

  	   	    $fexists = "images/".basename($rwchk['package_image']);
            unlink($fexists);
            $filename1=uniqid($_FILES['upprofileimage']['name']);
  	      	 $tempname1 = $_FILES["upprofileimage"]["tmp_name"]; 
          $folder1 = "images/".basename($filename1);
          move_uploaded_file($tempname1, $folder1);
         
  	      $upsql="update package set package_title='$title',package_price='$price',package_desc='$desc',packagefor='$packagefor',package_image='$filename1',shoot_type='$shoottype' No_ofphotos='$value',duration='$duration' where package_id='$pid'";
  	      $upre=mysqli_query($conn,$upsql);
  	      header('location:package.php');
  	      }
         
     
      
  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];
	    
	     $sql="delete from package where package_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:package.php');
	          
	 
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
					<button type="button" class="btn" data-target="#exampleModal" data-toggle='modal'>Add New Package</button>
				</div>
			</div>
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Packages</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                       
                      
                        
                        
                        <th scope="col">Package Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">No Of photos</th>
                        <th scope="col">Shoot Type</th>
                         <th scope="col">Category</th>
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select package.*,category.category_name from package left join category on category.category_id=package.packagefor";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         
  	                		         <td>".$row['package_title']."</td>
  	                		         <td>".$row['package_price']."</td>
  	                		         <td>".$row['No_ofphotos']."</td>
  	                		         <td>".$row['shoot_type']."</td>";
  	                		         if($row['shoot_type']=='All')
  	                		         {
  	                		             echo "<td>This Package is for All categories</td>";
  	                		         }
  	                		         else
  	                		         {
  	                		             echo "<td>".$row['category_name']."</td>";
  	                		         }
  	                		         echo"
  	                		         <td> <a href='package.php?delid=".$row['package_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['package_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
<div class="modal fade" id="editModal<?php echo $row['package_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
            <input type="hidden" name="pid" value="<?php echo $row['package_id'];?>">
               <div class="row">
            	<div class="col-sm-6">
            		<div class="form-group">
                             <label>Shoot Type</label><br>
                  			<select name="upshoottype" class="form-control"> 
                  				<option selected disabled>Select</option>
                  				<option value="Personal" <?php if($row['shoot_type']=='Personal'){echo "selected";}?>>Personal</option>
                  				<option value="Business" <?php if($row['shoot_type']=='Business'){echo "selected";}?>>Business</option>
                  					<option value="All" <?php if($row['shoot_type']=='All'){echo "selected";}?>>All</option>
                  			</select>
                    </div>
                    <div class="form-group">
                      <label>Package Title</label>
                      <input type="text" class="form-control" name="upptitle" value="<?php echo $row['package_title'];?>">
                    </div>
                    <div class="form-group">
                       <label>Whether the shoot is value or all-inclusive</label><br>
                       <input type="radio" name="upradiobtn" value="Value shoot" <?php if($row['No_ofphotos']=='Value shoot'){echo "checked";}?>>
                       <label>Value shoot</label>
                       <input type="radio" name="upradiobtn" value="All inclusive" <?php if($row['No_ofphotos']=='All inclusive'){echo "checked";}?>>
                       <label>All inclusive</label>
                   </div>
                   <div class="form-group">
                  			<label>Upload Package Image</label><br>
          	  	            <input type="file" id="profileimg<?php echo $row['package_id'];?>" name="upprofileimage">
          	  	            <img id="imgshow<?php echo $row['package_id'];?>" height="100" width="120" src="images/<?php echo $row['package_image'];?>">
          	  	   </div>
            	</div>

            	<div class="col-sm-6">
            		      <div class="form-group">
                  			<label>Select Category</label><br>
                  			<select name="uppackagefor" class="form-control"> 
                  				<option selected disabled>Select</option>
                  				<?php 
                  				$sql="select * from category where for_page='wireframe'";
                  				$rec=mysqli_query($conn,$sql);
                  				while($rowc=mysqli_fetch_assoc($rec))
                  				{
                  				?>
                  				<option value="<?php echo $rowc['category_id'];?>" <?php if($rowc['category_id']==$row['packagefor']){echo "selected";}?>><?php echo $rowc['category_name'];?></option>
                  			   <?php 
                  				}
                  				?>
                  			 </select>
                  		 </div>
            	      <div class="form-group">
                        <label>Package Price</label>
                        <input type="text" class="form-control" name="upprice" value="<?php echo $row['package_price'];?>">
                      </div>
                    <div class="form-group">
                      <label>Package Desc</label>
                      <input type="text" class="form-control" name="updesc" value="<?php echo $row['package_desc'];?>">
                    </div>
                 	<div class="form-group">
                  			    <label>Length (in hours) of the shoot package</label>
                  			    <input type="number" name="upduration" class="form-control" value="<?php echo $row['duration'];?>" step=".5">
                  	</div>
            	</div>
            </div>
              
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
      $('#profileimg<?php echo $row['package_id'];?>').change(function(){
      	//alert("yes");
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgshow<?php echo $row['package_id'];?>').attr('src', event.target.result);
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
         	<div class="row">
         		<div class="col-sm-6">
                    <div class="form-group">
                            <label>Shoot Type</label><br>
                  			<select name="shoottype" class="form-control" onchange="chkshoot()" id="slist"> 
                  				<option selected disabled>Select</option>
                  				<option value="Personal">Personal</option>
                  				<option value="Business">Business</option>
                  				<option value="All">All</option>
                  			</select>
                    </div> 
                    <div class="form-group">
                      <label>Package Title</label>
                      <input type="text" class="form-control" name="ptitle">
                    </div>
                    <div class="form-group">
                       <label>Whether the shoot is value or all-inclusive</label><br>
                       <input type="radio" name="radiobtn" value="Value shoot">
                       <label>Value shoot</label>&nbsp;
                       <input type="radio" name="radiobtn" value="All inclusive">
                       <label>All inclusive</label>
                    </div>
                    <div class="form-gropu">
                  			<label>Upload Package Image</label><br>
          	  	            <input type="file" id="profileimg" name="profileimage">
          	  	            <img id="imgshow" height="100" width="120" src="imgsrc.png">
          	  	    </div>
         		</div>
         		<div class="col-sm-6">
         			    <div class="form-group">
                  			<label>Select Category</label><br>
                  			<select name="packagefor" class="form-control" id="clist"> 
                  				<option selected disabled>Select</option>
                  				<?php 
                  				$sql="select * from category where for_page='wireframe'";
                  				$rec1=mysqli_query($conn,$sql);
                  				while($rowc1=mysqli_fetch_assoc($rec1))
                  				{
                  				?>
                  				<option value="<?php echo $rowc1['category_id'];?>"><?php echo $rowc1['category_name'];?></option>
                  			   <?php 
                  				}
                  				?>
                  			</select>
                  	   </div>
                  	   <div class="form-group">
                           <label>Package Price</label>
                           <input type="text" class="form-control" name="price">
                       </div>
                       <div class="form-group">
                            <label>Package Desc</label>
                            <input type="text" class="form-control" name="desc">
                       </div>
                       <div class="form-group">
                  			    <label>Length (in hours) of the shoot package</label>
                  			    <input type="number" name="duration" class="form-control" step=".5">
                  	   </div>
         		</div>
         	</div>
            <!---row end--->
         	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" name="save">Save</button>
        
      </div>
       </form>
    </div>
  </div>
</div>
<script>
function chkshoot()
{
    //alert("y");
    var stype=document.getElementById("slist").value;
  
    var clist=document.getElementById("clist");
    clist.innerHTML="";
                  $.ajax({
        	            method:"POST",
                        url: "action2.php",
                        data:{st:stype},
                        dataType: 'json',
                        success: function(response){
                            console.log(response)
                        	for (var i = 0; i < response.length; i++)
                                 {
                                 	var option = document.createElement("OPTION");
                                     option.value = response[i].cid;
                                     option.text = response[i].type;
                                     clist.appendChild(option);
                                     
                                 }
                        },
                        error: function(response){
							console.log("error")
						}
					});
		
}
</script>
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