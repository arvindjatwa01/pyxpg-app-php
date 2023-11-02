<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     $checkbox1=$_POST['cat'];
  	
    $chk="";  
    foreach($checkbox1 as $chk1)  
     {  
      $chk .= $chk1.", ";  
     }
      $c=substr($chk,0,-1);
  	 $name=addslashes($_POST['accessory']);
  	 $desc=addslashes($_POST['desc']);
  	 $isdesc=addslashes($_POST['is_desc']);
  	 
      
    $sql="insert into accessories(accessory,is_desc,description,suitability) values('$name','$isdesc','$desc','$c')";
    $res=mysqli_query($conn,$sql);
    header('location:accessories.php');
  	}

    if(isset($_POST['upsave']))
  	{

      $name=addslashes($_POST['upaccessory']);
  	 $desc=addslashes($_POST['updesc']);
  	 $isdesc=addslashes($_POST['upis_desc']);
  	 $aid=$_POST['aid'];
  	 if($isdesc=='No')
  	 {
  	 	$desc="";
  	 }
  	 $checkbox1=$_POST['upcat'];
  	
            $chk="";  
            foreach($checkbox1 as $chk1)  
            {  
              $chk .= $chk1.", ";  
            }
            $c=substr($chk,0,-1);

  	  $upsql="update accessories set accessory='$name',is_desc='$isdesc',description='$desc',suitability='$c' where accessory_id='$aid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:accessories.php');
  	     

  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];
	    
	     $sql="delete from accessories where accessory_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:accessories.php');
	          
	 
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


<body style='font-family: proxima-nova, sans-serif;'>
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
					<button type="button" class="btn" data-target="#exampleModal" data-toggle='modal'>Add New Accessoies</button>
				</div>
			</div>
			<div class="row" style="margin-top:30px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Accessories</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                       
                      
                        
                        
                        <th scope="col">Accessory Name</th>
                        <th scope="col">Is_Desc</th>
                        <th scopee="col">Suitability</th>
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select * from accessories";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         
  	                		         <td>".$row['accessory']."</td>
  	                		         <td>".$row['is_desc']."</td>
  	                		         <td>".$row['suitability']."</td>
  	                		         <td> <a href='accessories.php?delid=".$row['accessory_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['accessory_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
   <!-- Modal -->
<div class="modal fade" id="editModal<?php echo $row['accessory_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Accessories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
              <input type="hidden" name="aid" value="<?php echo $row['accessory_id'];?>">
         	    <div class="form-group">
                   <label>Accessory Name</label>
                   <input type="text" class="form-control" name="upaccessory" value="<?php echo $row['accessory'];?>">
                </div>
         	    <div class="form-group">
                   <label>Do You Want To Add Description</label>
                   <select class="form-control" id="description<?php echo $row['accessory_id'];?>" name="upis_desc" onchange="myfunction1(<?php echo $row['accessory_id'];?>)">
                     <option selected disabled>Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>

                   </select>
                </div>
                <div class="form-group" id="descdiv<?php echo $row['accessory_id'];?>" style="visibility:hidden;position:absolute">
                	<label>Description</label>
                	<textarea rows="4" class="form-control" name="updesc"><?php echo $row['description'];?></textarea>
                </div>
                 <div class="form-group">
                     <b><label>"Suitability (Please tick on compatible categories)</label></b><br>
                    <?php 
                    $upcsql="select * from category where for_page='joinus'";
                    $upcre=mysqli_query($conn,$upcsql);
                    while($upcrow=mysqli_fetch_assoc($upcre))
                    { ?>
                        <input type="checkbox" name="upcat[]" <?php if(strpos($row['suitability'], $upcrow['category_name']) !== false){echo "checked";}?>
                        value="<?php echo $upcrow['category_name'];?>">
                        <label for="cat[]"><?php echo $upcrow['category_name'];?></label>&nbsp;&nbsp;&nbsp;
                    <?php }
                    ?>
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
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Accessories</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">

         	    <div class="form-group">
                   <label>Accessory Name</label>
                   <input type="text" class="form-control" name="accessory">
                </div>
         	    <div class="form-group">
                   <label>Do You Want To Add Description</label>
                   <select class="form-control" id="description" name="is_desc" onchange="myfunction()">
                     <option selected disabled>Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>

                   </select>
                </div>
                <div class="form-group" id="descdiv" style="visibility:hidden;position:absolute">
                	<label>Description</label>
                	<textarea rows="4" class="form-control" name="desc"></textarea>
                </div>
                
                <div class="form-group">
                    <b><label>"Suitability (Please tick on compatible categories)</label></b><br>
                    <?php 
                    $csql="select * from category where for_page='joinus'";
                    $cre=mysqli_query($conn,$csql);
                    while($crow=mysqli_fetch_assoc($cre))
                    { ?>
                        <input type="checkbox" name="cat[]" value="<?php echo $crow['category_name'];?>">
                        <label for="cat[]"><?php echo $crow['category_name'];?></label>&nbsp;&nbsp;&nbsp;
                    <?php }
                    ?>
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
	function myfunction()
	{
		var val=document.getElementById("description").value;
		
		if(val=='Yes')
		{
           document.getElementById("descdiv").style.visibility="visible";
           document.getElementById("descdiv").style.position="relative";
		}
		else
		{
           document.getElementById("descdiv").style.visibility="hidden";
           document.getElementById("descdiv").style.position="absolute";

		}
	}

	function myfunction1(a)
	{
		var val1=document.getElementById("description"+a).value;
		
		if(val1=='Yes')
		{
           document.getElementById("descdiv"+a).style.visibility="visible";
           document.getElementById("descdiv"+a).style.position="relative";
		}
		else
		{
           document.getElementById("descdiv"+a).style.visibility="hidden";
           document.getElementById("descdiv"+a).style.position="absolute";

		}
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