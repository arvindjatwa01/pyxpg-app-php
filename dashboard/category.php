<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     
  	 $cname=addslashes($_POST['cname']);
  	 $forpage=addslashes($_POST['forpage']);
  	  $shoottype=addslashes($_POST['shoottype']);
  	  $disable=addslashes($_POST['disablepoint']);
  	 $filename=uniqid($_FILES['categoryimage']['name']);
    $tempname = $_FILES["categoryimage"]["tmp_name"]; 
    $folder = "images/".basename($filename);
    move_uploaded_file($tempname, $folder);
      
    $sql="insert into category(category_name,category_image,for_page,shoot_type,at_studio) values('$cname','$filename','$forpage','$shoottype','$disable')";
    $res=mysqli_query($conn,$sql);
    header('location:category.php');
  	}

    if(isset($_POST['upsave']))
  	{
        $cname=addslashes($_POST['upcname']);
        $forpage=addslashes($_POST['upforpage']);
        $shoottype=addslashes($_POST['upshoottype']);
          	  $updisable=addslashes($_POST['updisablepoint']);

        $cid=$_POST['cid'];
  	      $filename1=$_FILES['upcategoryimage']['name'];
  	      if($filename1=="")
  	      {

           
  	        $upsql="update category set category_name='$cname',for_page='$forpage',shoot_type='$shoottype',at_studio='$updisable' where category_id='$cid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:category.php');
  	      }
  	      else
  	      {
          
  	      	$schk="select * from category where category_id='$pid'";
  	   	   $rechk=mysqli_query($conn,$schk);
  	   	   $rwchk=mysqli_fetch_assoc($rechk);

  	   	    $fexists = "images/".basename($rwchk['category_image']);
            unlink($fexists);
            $filename1=uniqid($_FILES['upcategoryimage']['name']);
  	      	 $tempname1 = $_FILES["upcategoryimage"]["tmp_name"]; 
          $folder1 = "images/".basename($filename1);
          move_uploaded_file($tempname1, $folder1);
         
  	      $upsql="update category set category_name='$cname',category_image='$filename1',for_page='$forpage',shoot_type='$shoottype',at_studio='$updisable' where category_id='$cid'";
  	      $upre=mysqli_query($conn,$upsql);
  	      header('location:category.php');
  	      }
         
     
      
  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];

	     $sql="delete from category where category_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:category.php');
	          
	 
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
				<div class="col-sm-12 col-md-2" id="addmodalbtn">
					<button type="button" class="btn" data-target="#exampleModal" data-toggle='modal'>Add New Categor</button>
				</div>
			</div>
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Categories</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                     
                        <th scope="col">Category Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Shoot Type</th>
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select * from category";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         
  	                		         <td>".$row['category_name']."</td>
  	                		         <td><img src='images/".$row['category_image']."' 
                                       style='width:60px;hight:50px'></td>
  	                		         <td>".$row['shoot_type']."</td>
  	                		         <td> <a href='category.php?delid=".$row['category_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['category_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
<div class="modal fade" id="editModal<?php echo $row['category_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
            <input type="hidden" name="cid" value="<?php echo $row['category_id'];?>">
                <div class="form-group">
                   <label>Category Name</label>
                   <input type="text" class="form-control" name="upcname" value='<?php echo $row['category_name'];?>'>
                </div>
                <div class="form-group">
                   <label>Use For Page</label>
                   <select class="form-control" name="upforpage" id="uplist<?php echo $row['category_id'];?>" onchange="upcheckfun(<?php echo $row['category_id'];?>)">
                    <option selected disabled>Select</option>
                    <option value="wireframe" <?php if($row['for_page']=='wireframe'){echo "selected";}?>>Wireframe</option>
                    <option value="joinus" <?php if($row['for_page']=='joinus'){echo "selected";}?>>Join us</option>
                   </select>
                </div>
                 <div class="form-group"  name="shoottype" style="visibility:hidden;position:absolute" id="hidediv<?php echo $row['category_id'];?>">
                              <label>Select Shoot type</label>
                            <select name="upshoottype" class="form-control"> 
                  				<option selected disabled>Select</option>
                  				<option value="Personal" <?php if($row['shoot_type']=='Personal'){echo "selected";}?>>Personal</option>
                  				<option value="Business" <?php if($row['shoot_type']=='Business'){echo "selected";}?>>Business</option>
                  			</select>
                </div>
                <div class="form-group" id="hidediv2<?php echo $row['category_id'];?>" style="visibility:hidden;position:absolute">
                    <label>Is shoot aty studio option available</label>
				    <select class="form-control" name="updisablepoint">
				        <option value="Yes" <?php if($row['at_studio']=='Yes'){echo "selected";}?>>Yes</option>
				        <option value="No" <?php if($row['at_studio']=='No'){echo "selected";}?>>No</option>
				    </select>
                </div>
         	    <div class="form-group">
                 <label>Upload Package Image</label><br>
          	  	            <input type="file" id="categoryimage<?php echo $row['category_id'];?>" 
                                name="upcategoryimage">
          	  	            <img id="imgshow<?php echo $row['category_id'];?>" height="100" 
                                width="120" src="images/<?php echo $row['category_image'];?>">
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
      $('#categoryimage<?php echo $row['category_id'];?>').change(function(){
      	//alert("yes");
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgshow<?php echo $row['category_id'];?>').attr('src', event.target.result);
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
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">

         	    <div class="form-group">
                   <label>Category Name</label>
                   <input type="text" class="form-control" name="cname">
                </div>
                <div class="form-group">
                   <label>Use For Page</label>
                   <select class="form-control" name="forpage" onchange="checkfun()" id="list">
                    <option selected disabled>Select</option>
                    <option value="wireframe">Wireframe</option>
                    <option value="joinus">Join us</option>
                   </select>
                </div>
                <div class="form-group"  name="shoottype" style="visibility:hidden;position:absolute" id="hidediv">
                              <label>Select Shoot type</label>
                            <select name="shoottype" class="form-control"> 
                  				<option selected disabled>Select</option>
                  				<option value="Personal">Personal</option>
                  				<option value="Business">Business</option>
                  			</select>
                </div>
                <div class="form-group" id="hidediv2" style="visibility:hidden;position:absolute">
                    <label>Is shoot aty studio option available</label>
				    <select class="form-control" name="disablepoint">
				        <option value="Yes">Yes</option>
				        <option value="No">No</option>
				    </select>
                </div>
         	    <div class="form-group">
                 <label>Upload Category Image</label>
          	  	            <input type="file" id="categoryimg" name="categoryimage">
          	  	            <img id="imgshow" height="100" width="120" src="imgsrc.png">
                </div>
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" name="save">Save</button>
        
      </div>
       </form>
    </div>
  </div>
</div>
<script>
function upcheckfun(e)
{
   // alert("y");
    
    var id=document.getElementById("uplist"+e).value;
    //alert(id);
    if(id=='wireframe')
    {
        document.getElementById("hidediv"+e).style.visibility="visible";
        document.getElementById("hidediv"+e).style.position="relative";
        document.getElementById("hidediv2"+e).style.visibility="visible";
        document.getElementById("hidediv2"+e).style.position="relative";

    }
    else
    {
        document.getElementById("hidediv"+e).style.visibility="hidden";
        document.getElementById("hidediv"+e).style.position="absolute";
        document.getElementById("hidediv2"+e).style.visibility="hidden";
        document.getElementById("hidediv2"+e).style.position="absolute";
    }
}
</script>
<script>
function checkfun()
{
    //alert("y");
    
    var id=document.getElementById("list").value;
    //alert(id);
    if(id=='wireframe')
    {
        document.getElementById("hidediv").style.visibility="visible";
        document.getElementById("hidediv").style.position="relative";
         document.getElementById("hidediv2").style.visibility="visible";
        document.getElementById("hidediv2").style.position="relative";

    }
    else
    {
        document.getElementById("hidediv").style.visibility="hidden";
        document.getElementById("hidediv").style.position="absolute";
         document.getElementById("hidediv2").style.visibility="hidden";
        document.getElementById("hidediv2").style.position="absolute";
    }
}
</script>
<script type="text/javascript">
$(document).ready(()=>{
      $('#categoryimg').change(function(){
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