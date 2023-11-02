<?php
include("dashboard/connection.php");
$file ="bloges/".uniqid(rand(), true).'.html';
if(!is_file($file))
{
  $tag = $_POST['tagdefault'];
  $title = $_POST['title'];
  $comma_separated =addslashes(implode(",", $tag));
  $sqltag="select * from tag where tag_id in(".$comma_separated.")";
    $resulttag=mysqli_query($conn,$sqltag);
    $AllTags="";
    while($rowtag=mysqli_fetch_assoc($resulttag)){
                    $AllTags.=$rowtag['tag_name'].",";
                }
   $valueForSave='<!DOCTYPE html>
   <html>
   <head>
   <meta charset="utf-8"> 
   <meta name="keywords" content="'.$AllTags.'">
   <meta name="description" content="We love hearing from you, let us know how we can help | Pyx Photography">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>'. $title .'</title>
   <!-- Favicon -->
	<link href="../img/favicon.ico" rel="shortcut icon"/>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../blogstyle.css">
    <link rel="stylesheet" type="text/css" href="../https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="../css/style.css"/>
   </head>
   	<!-- Header section  -->
	<header class="header-section">
		<a href="index.php" class="site-logo"><img src="../img/logo.png" alt="logo"></a>
		<div class="header-controls">
			<button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
			<button class="search-btn" onclick="openmodal()"><i class="fa fa-search"></i></button>
		</div>
		<ul class="main-menu" style="display:block">
		     <li><a href="index.php" id="home">Home</a></li>
			<li><a href="join-us.php" id="joinus">Join us </a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li>
				<a href="#">Book a shoot</a>
				<ul class="sub-menu">
					<li><a href="booking.php?booking_type=business">Business</a></li>
					<li><a href="booking.php?booking_type=personal">Personal</a></li>
					<!-- <li><a href="portfolio-2.html">Portfolio 3</a></li> -->
				</ul>
			</li>
			<li><a href="contact.php" id="contactuslink">Contact</a></li>
			<li>
				<a href="#">More</a>
				<ul class="sub-menu">
					<li><a href="blogs.php">Blog</a></li>
					<li><a href="faq.php" id="faqlink">FAQ</a></li>
					<li><a href="about-us.php" id="aboutuslink">About Us</a></li>
					<li><a href="privacy.php" id="privacylink">Privacy Policy</a></li>
					<li><a href="terms.php" id="termlink">Terms of Use</a></li>
					<!-- <li><a href="portfolio-2.html">Portfolio 3</a></li> -->
				</ul>
			</li>
			
			<li class="search-mobile">
				<button class="search-btn"><i class="fa fa-search"></i></button>
			</li>
			
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end  -->
   <body>'.$_POST['content'].'</body>
   
   <!-- Footer section   -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 order-1 order-md-2">
                    <div class="footer-social-links">
                        <!-- <a href=""><i class="fa fa-pinterest"></i></a> -->
                        <a href="https://www.facebook.com/Pyx-Photography-on-demand-102812318787264/"><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <!-- <a href=""><i class="fa fa-behance"></i></a> -->
                    </div>
                </div>
                
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pyx, part of the Jeetlo.com India Pvt. Ltd. family
</div>  
                </div>
                
            </div>
            
        </div>
    </footer>
    
    <!-- Footer section end  -->
   </html>';
    file_put_contents($file,$valueForSave);   
    $category = $_POST['category'];
    $title = $_POST['title'];
    $publish = $_POST['publish'];
    
   
    $nowFormat = date('Y-m-d H:i:s');
    /*---------------------------------*/
    $filename=$_FILES['bannerimg']['name'];
    $tempname = $_FILES["bannerimg"]["tmp_name"]; 
    $folder = "bloges/images/".basename($filename);
    move_uploaded_file($tempname, $folder);
    // /*--------------------------------*/
    $sql = "INSERT INTO blog (blog_title,publish,category_id,tag,blogname,created_date,bannerimg) VALUES ('$title','$publish','$category','$comma_separated','$file','$nowFormat','$filename')";
    $result = mysqli_query($conn,$sql);
    if($result){
      echo "Success";
    }
}
?>