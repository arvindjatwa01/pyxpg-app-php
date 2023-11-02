<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_POST['save']))
  	{
  		
     
  	 $lense=addslashes($_POST['lense']);
  	$checkbox1=$_POST['cat'];
  	
    $chk="";  
    foreach($checkbox1 as $chk1)  
     {  
      $chk .= $chk1.", ";  
     }
     $c=substr($chk,0,-1);
    $sql="insert into camera_lense(c_lense,suitability) values('$lense','$c')";
    $res=mysqli_query($conn,$sql);
    header('location:lense.php');
  	}

    if(isset($_POST['upsave']))
  	{
  	     	 $upcbody=addslashes($_POST['uplense']);
  	 
  	      	$checkbox1=$_POST['upcat'];
  	
            $chk="";  
            foreach($checkbox1 as $chk1)  
            {  
              $chk .= $chk1.", ";  
            }
            $c=substr($chk,0,-1);
            $cid=$_POST['cid'];
  	        $upsql="update camera_lense set c_lense='$upcbody',suitability='$c' where lense_id='$cid'";
  	         $upre=mysqli_query($conn,$upsql);
  	         header('location:lense.php');
  	     
  	}

  	if(isset($_GET['delid']))
     {
	     $del=$_GET['delid'];
	    
	     $sql="delete from camera_lense where lense_id='$del'";
	     $re=mysqli_query($conn,$sql);
	     
	     header('location:lense.php');
	          
	 
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
}@media(min-width:769px) and (max-width: 2100px){
    #sidebar
    {
        display:block!important;
        
    }
}	</style>
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
			
			<div class="row justify-content-md-center" style="margin-top:30px">
				<div class="col-sm-5">
                    
                     <h3 style="text-align:center;font-weight: bold;">Add Camera Lense</h3>
                     <br>
                    	<a href='#' data-target='#lensemodal' data-toggle='modal'>	<button type="button" class="btn form-control">Add New Lense</button></a>
                    
				</div>
			</div>
			<div class="row" style="margin-top:20px">
				<div class="col-sm-12">
					<h2 style="text-align:center;font-weight: bold;margin-bottom:20px">All Camera Lenses</h2>
				</div>
				<div class="col-sm-12">
					<table class="table table-hover table-bordered">
            		<thead class="thead-dark">
 	                  <tr>
                     
                        <th scope="col">Camera Lense</th>
                        <th scope="col">Suitability</th>
                        <th scope="col">Action</th>

  	                 </tr>
  	                <tboady>
  	                	<?php
  	                	$sql="select * from camera_lense";
  	                	$re=mysqli_query($conn,$sql);
  	                	while($row=mysqli_fetch_assoc($re))
  	                	{
  	                		echo "<tr>
  	                		         
  	                		         <td>".$row['c_lense']."</td>
  	                		         <td>".$row['suitability']."</td>
  	                		         <td> <a href='lense.php?delid=".$row['lense_id']."'><i class='fa fa-trash'></i></a>&nbsp;&nbsp;
									       <a href='#' data-target='#editModal".$row['lense_id']."' data-toggle='modal'><i class='fa fa-pencil'></i></a></td>
  	                		      </tr>";?>
<div class="modal fade" id="editModal<?php echo $row['lense_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Camera lense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
            <input type="hidden" name="cid" value="<?php echo $row['lense_id'];?>">
         	   <div class="form-group">
                   <label>Camera Lense</label>
                   <input type="text" class="form-control" name="uplense" value="<?php echo $row['c_lense'];?>">
                </div>
               <div class="form-group">
                   <b><label>"Suitability (Please tick on compatible categories)</label></b><br>
                    <?php 
                    $upcsql="select * from category where for_page='joinus'";
                    $upcre=mysqli_query($conn,$upcsql);
                    while($upcrow=mysqli_fetch_assoc($upcre))
                    { ?>
                        <input type="checkbox" name="upcat[]" value="<?php echo $upcrow['category_name'];?>" <?php if(strpos($row['suitability'], $upcrow['category_name']) !== false){echo "checked";}?>>
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

<!---modal2--->
<div class="modal fade" id="lensemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Camera lense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="" style="" enctype="multipart/form-data" method="Post">
           
         	  	<div class="form-group">
                    		<label>Camera Lense</label><br>
                    		<input type="text" class="form-control" name="lense">
                    	</div>
                <div class="form-group">
                  <b> <label>"Suitability (Please tick on compatible categories)</label></b><br>
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
<!---modal2 end---->
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