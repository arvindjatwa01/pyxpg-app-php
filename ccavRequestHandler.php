<html>
<head>
<title>Booking Payment</title></title>

<meta charset="UTF-8">
    <meta name="description" content="Pyx is a photography marketplace that uses technology to absorb your administrative and marketing overhead. Focus on what you do best - taking great photographs | Pyx Photography">
    <meta name="keywords" content="Pyx, photographer, join, photography, photo, earn, shoots, member, get started, India">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
<style type="text/css">

@media(max-width: 580px){
    .slider-img{
    padding-left: 0px!important;
    padding-right: 0px!important;
    }
}
@media(max-width:991px){
      #home{display:none}
  .required:after {
    content: " *";
    color: red;
  }
}
p{
    font-size:17px;
}
.steps-head{
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 17px;
    line-height: 26px;
    font-weight:600;
}

.step-count{
    position: relative;
    margin-top: -62px;
    float: right;
    /* font-family: 'Tiempos Headline', sans-serif; */
    color: #e8edf5;
    font-size: 195px;
    line-height: 115px;
}
.shoot-head{
    margin: 20px auto 10px;
    /* font-family: 'Tiempos Headline', sans-serif; */
    color: #141b24;
    font-size: 34px;
    line-height: 48px;
    font-weight: 700;
}
.section.photographer-background {
    /* background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0.75), hsla(0, 0%, 100%, 0.75)), linear-gradient(90deg, #fff, #fff 0%, hsla(0, 0%, 100%, 0)), url("images/background-photographer.jpg"); */
    background-position: 0px 0px, 0px 0px, 50% 50%;
    background-size: auto, auto, cover;
}
.slider-img{
    /* padding-left: 114px;
    padding-right: 114px; */
    height: 461px;
}
.home-text-container {
    position: relative;
    z-index: 100;
    margin-top: 58px;
    margin-bottom: 40px;
    padding: 30px 44px 20px;
    border-top-left-radius: 30px;
    background-color: #fff;
    right: 90px;
}
.page-title{
    margin-top: 20px;
    margin-bottom: 10px;
    /* font-family: 'Tiempos Headline', sans-serif; */
    font-size: 38px;
    line-height: 61px;
    font-weight: 700;
    letter-spacing: -0.02em;
}

.subtitle{
    padding-top: 20px;
    color: #454f5c;
    font-size: 20px;
    line-height: 26px;
}
.small-heading{
    margin-bottom: 5px;
    font-size: 18px;
    font-weight: 700;
}
.google-yellow {
    margin-right: 3px;
    color: #f4c20d;
}

.carousel-caption{
    color: black;
}
.ps h5{
    font-size: 30px;
}
.ps p{
    font: 19px;
}
.ps{
    overflow: hidden;
    transition: all 1s ease;
}
.ps:hover{
    transform: scale(1.05);
}
.carousel-caption {
    color:#fff;
    text-align: left;
}

.banner-subsec h3{
    color: #0e0c0e;
    font-weight: 600;
    font-family: proxima-nova, sans-serif;
    letter-spacing: 0.8px;
    font-size: 26px;
}
.banner-subsec p{
    color: #5a575b;
    font-size: 16px;
    font-family: proxima-nova, sans-serif;
    letter-spacing: 0.8px
}
.banner-subsec{
    background-color: #fff;
    border-top-right-radius: 60px;
    position: relative;
    padding-left: 18px;
    margin-left: 0px;
    left: -11px;
    height: 356px;
    width: 341px;
    padding-top: 34px;
    top: 22px;
}

</style>
</head>
<body>
<center>
<?php include('header.php'); ?>
<?php include('Crypto.php')?>
<?php 
    
	error_reporting(0);

	$working_key='8507285DF00384997C2EEE7A89C60443';//Shared by CCAVENUES
	$access_code='AVRX13IG77CK72XRKC';//Shared by CCAVENUES
	$merchant_data='';
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>
<iframe src="<?php echo $production_url?>" id="paymentFrame" width="500" height="400" frameborder="0" scrolling="No" ></iframe>

<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
<?php include('footer.php'); ?>
</center>

</body>
</html>

