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
		.smalldiv{height:190px;background-color:#b3ffb3;border-radius:5px;margin:15px;margin-top:40px;color:black;}
		.smalldiv img{display:block;margin:auto;width:70px;height:70px;margin-top:20px;margin-bottom:15px;}
	
	@media  (max-width:768px){
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
		<div class="col-sm-12 col-sm-12 col-md-9 col-lg-9" id="maincontent">
			<div class="row justify-content-md-center" style="padding:0px!important;margin-top:30px">
			
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