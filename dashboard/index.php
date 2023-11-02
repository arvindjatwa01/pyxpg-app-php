<?php include('connection.php');
session_start();
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from admin where email='$email' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$c=mysqli_num_rows($result);
	$_SESSION['email']=$row['email'];
	if($c==1)
	{
          $psw=$row['password'];
      if($psw==$password)
      {
             echo "<script>alert('login successfull');</script>"; 
     header('location:home.php');
      } 
      else
        {
               echo "<script>alert('invalid login');
                  window.location('login.php');</script>"; 
         }
                //$_SESSION['user']=$name;
                
	}
	else
		{
			echo "<script>alert('Please login first');
                  window.location('login.php');</script>"; 
        }
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('link.php');?>
</head>
<body style="background:url('bg.jpg');background-size:cover;background-repeat: no-repeat;">
<div class="container-fluid">
	<div class="row justify-content-md-center">

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 logindiv">
			 <h3 class="text-center">Please Login</h3>
			 <form method="post" class="loginform">
			 	<div class="form-group">
			 		<label>Email</label>
			 		<input type="email" name="email" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label>Password</label>
			 		<input type="password" name="password" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label></label>
			 		<input type="submit" name="submit" class="form-control loginbtn">

			 	</div>
			 </form>
		</div>
	</div>
</div>
</body>
</html>