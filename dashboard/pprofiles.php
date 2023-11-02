<?php 

include('connection.php');
session_start();
if(isset($_SESSION['email']))
    {
        if(isset($_POST['pgpublishdata'])){
            $errors = array();
            $portfolioImg = array();

            $uploadDir = 'images/portfolio-images/';
            $allowTypes = array('jpg','png','jpeg','gif');
        
            
                foreach($_FILES['portfolioImg']['name'] as $key=>$val){

                    $filename=$_FILES['portfolioImg']['name'][$key];
                    $uniquesavename= rand(1000, 9999);
                    $saveimage=$uniquesavename.".".strtolower(pathinfo($filename, PATHINFO_EXTENSION));

                    // $filename = basename($_FILES['portfolioImg']['name'][$key]);
                    $targetFile = $uploadDir.$saveimage;

                    if(move_uploaded_file($_FILES["portfolioImg"]["tmp_name"][$key], $targetFile)){
                        $portfolioImg[] = "$saveimage";
                        
                        $insertQrySplit[] = "('$saveimage')";
                    }
                    else {
                        $errors[] = "Something went wrong- File - $filename";
                    }
                }
                

            $name = $_POST['photographername'];
            $fname = explode(" ", $name);

            $photographerId = $_POST['photographerId'];
            $rating = $_POST['rating'];
            $reviews = $_POST['reviews'];
            $about_photographer = mysqli_real_escape_string($conn,$_POST['aboutphotographer']);
            $q1 = mysqli_real_escape_string($conn,$_POST['Q1']);
            $q2 = mysqli_real_escape_string($conn,$_POST['Q2']);
            $q3 = mysqli_real_escape_string($conn,$_POST['Q3']);
            $q4 = mysqli_real_escape_string($conn,$_POST['Q4']);


            $selectSql = "SELECT * FROM photographer WHERE photographer_id= '$photographerId'";
            $selectRes = mysqli_query($conn, $selectSql);
            $row = mysqli_fetch_assoc($selectRes);

            $id = str_replace(' ',',',$row['category_image']);
            $substr = substr($id,0,-1);
            
            

            $multiselectSql="select * from multiple_image where img_id IN ($substr)";
           
            
            $mulselImgId= array();
            $mulselImg= array();
            
            $multiselectRes=mysqli_query($conn,$multiselectSql) or die("query failed");
            while($multiselectrow=mysqli_fetch_assoc($multiselectRes)){
                $mulselImgId[] = $multiselectrow['img_id'];
                $mulselImg[] = $multiselectrow['images'];
                
            }
            
            $mulselImgL = count($mulselImgId)-1;
            
    
            // ************ Photographer Profile Image Move into Folder ******** // 
    
            $photographerprofileImg = $_FILES['pgprofileImg']['name'];
            $profileImgfolder = "images/pg-images/";
            $uniquesaveprofile= rand(1000, 9999);
            $saveprofileimage=$uniquesaveprofile.".".strtolower(pathinfo($photographerprofileImg, PATHINFO_EXTENSION));
            
            $profileImgfolder = $profileImgfolder.$saveprofileimage;
    
            $tempnameProfile = $_FILES['pgprofileImg']['tmp_name']; 
            move_uploaded_file($tempnameProfile, $profileImgfolder);
    
            // ************ Portfolio Image Move into Folder ******** // 
    
            $countfiles = count($_FILES['portfolioImg']['name']);

            $portfolioImgL =count($portfolioImg)-1;
            $pfImages = implode(",",$portfolioImg);

            $selectSql = "SELECT * FROM photographer WHERE photographer_id= '$photographerId'";
            $selectRes = mysqli_query($conn, $selectSql);
            $row = mysqli_fetch_assoc($selectRes);

            $content="";

            $content= '<!DOCTYPE html>
            <html lang="zxx">
            <head>
                <title>Powering creative talent | Pyx Photography</title>
                <meta charset="UTF-8">
                <meta name="description" content="Pyx is a photography marketplace that uses technology to absorb your administrative and marketing overhead. Focus on what you do best - taking great photographs | Pyx Photography">
                <meta name="keywords" content="Pyx, photographer, join, photography, photo, earn, shoots, member, get started, India">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
                <!-- Favicon -->
                <link href="../img/favicon.ico" rel="shortcut icon"/>
            
                <!-- Google font -->
                <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
            
                <!-- Stylesheets -->
                <link rel="stylesheet" href="../css/bootstrap.min.css"/>
                <link rel="stylesheet" href="../css/font-awesome.min.css"/>
                <link rel="stylesheet" href="../css/magnific-popup.css"/>
                <link rel="stylesheet" href="../css/slicknav.min.css"/>
                <link rel="stylesheet" href="../css/owl.carousel.min.css"/>
            
                <!-- Main Stylesheets -->
                <link rel="stylesheet" href="../css/style.css"/>
                <link rel="stylesheet" href="../css/joinus-style.css"/>
            
            
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
                <style>
                    body{
                        font-family: sans-serif;
                        margin: 0;
                        /* background: #f2f2f2; */
                    }
                    top-padding{
                        padding-top: 50px;
                    }
                    h1{
                        text-align: center;
                        margin-top: 50px;
                    }
                    p{
                        text-align: left;
                        margin-bottom: 60px;
                    }
                    h4{
                        text-align: center;
                        line-height: 80px;
                        font-weight: normal;
                    }
                    .masonry{ /*Masonry container */
                            -webkit-column-count: 4;
                        -moz-column-count: 4;
                        column-count: 4;
                        -webkit-column-gap: 0.5em;
                        -moz-column-gap: 0.5em;
                        column-gap: 0.5em;
                            margin: 1.5em;
                                padding: 0;
                                -moz-column-gap: 1em;
                                -webkit-column-gap: 1em;
                                column-gap: 1em;
                                font-size: .85em;
                    }
                    .item{
                        display: inline-block;
                        background: #fff;
                        padding: 0.5em;
                        margin: 0 0 1em;
                        width: 100%;
                            -webkit-transition:1s ease all;
                        box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        -webkit-box-sizing: border-box;
                        box-shadow: 2px 2px 4 px 0 #ccc;
                    }
                    .item img{
                        max-width: 100%;
                        height: auto;
                    }
                    @media only screen and (max-width: 320px){
                        .masonry{
                            -moz-column-count: 1;
                            -webkit-column-count: 1;
                            column-count: 1;
                        }
                    }
                    @media only screen and (min-width: 321px) and (max-width: 768px){
                        .masonry{
                            -moz-column-count: 2;
                            -webkit-column-count: 2;
                            column-count: 2;
                        }
                    }
                    @media only screen and (min-width: 769px) and (max-width: 1200px){
                        .masonry{
                            -moz-column-count: 3;
                            -webkit-column-count: 3;
                            column-count: 3;
                        }
                    }
                    @media only screen and (min-width: 1201px){
                        .masonry{
                            -moz-column-count: 4;
                            -webkit-column-count: 4;
                            column-count: 4;
                        }
                    }
                </style>
            
            </head>
            <body>
                <!-- Page Preloder -->
                
                <div id="preloder">
                    <div class="loader"></div>
                </div>
                
                <!-- Header section  -->
                <header class="header-section hs-bd">
                    <a href="index.html" class="site-logo"><img src="../img/pyx-photography.png" alt="logo"></a>
                    <!--
                    <div class="header-controls">
                        <button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                    <ul class="main-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="pricing.html">Pricing </a></li>
                        <li>
                            <a href="#">Book a shoot</a>
                            <ul class="sub-menu">
                                <li><a href="booking.html">Business</a></li>
                                <li><a href="booking.html">Personal</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li>
                            <a href="#">More</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms of Use</a></li>
                            </ul>
                        </li>
                        <li class="search-mobile">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </li>
                    </ul>
                </header>
                -->
                <div class="clearfix"></div>
                <!-- Header section end  -->
            
                <!-- About section  -->
                <section class="about-section top-padding">
                    <div class="container-fluid">
                        <!-- 
                        
                        <div class="row">
                            <div class="col-lg-3 p-0">
                                <div class="about-bg set-bg" data-setbg="../img/pg/profile.jfif" height="150" width="150"></div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="about-text">
                                    <h2>Jorge A.</h2>                        
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="site-btn" onclick="window.location.href='.'pg.php'.'">Book a shoot with Jorge</div>
                            </div>
                        </div>
                        -->    
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="../dashboard/images/pg-images/'.$saveprofileimage.'" height="150" width="150">
                            </div>
                            <div class="col-lg-6">
                                <h2>'.$name.'</h2>
                                <br>';
                                if($rating == '1'){
                                    $content .='<img src="../img/pg/1star.png" height="50" style="margin-top: -40px; height: 25px;"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews';
                                }
                                if($rating == '2'){
                                    $content .='<img src="../img/pg/2star.png" height="50" style="margin-top: -40px; height: 25px;"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews';
                                }
                                if($rating == '3'){
                                    $content .='<img src="../img/pg/3star.png" height="50" style="margin-top: -40px; height: 25px;"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews';
                                }
                                if($rating == '4'){
                                    $content .='<img src="../img/pg/4star.png" height="50" style="margin-top: -40px; height: 25px;"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews';
                                }
                                if($rating == '5'){
                                    $content .='<img src="../img/pg/5star.png" height="50" style="margin-top: -40px; height: 25px;"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews';
                                }
                                // <img src="../img/pg/five-stars.jpg" height="50" style="margin-top: -40px"> '.$rating.'.0/ 5.0 based on '.$reviews.' reviews
                            $content .='</div>
                            <div class="col-lg-1">
            
                            </div>
                            <div class="col-lg-3">
                                <div class="site-btn" onclick="window.location.href='.'contact.php'.'">Book a shoot with '.$fname['0'].'</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                '.$about_photographer.' 
                            </div>
                            <div class="col-lg-1">
            
                            </div>
                            <div class="col-lg-3">
                                <img src="../img/pg/location.png" height="30" width="30">
                                '.$row['city'].'
                                <br>
                                <img src="../img/pg/camera.png" height="30" width="30">
                                '.$row['camera_body'].'
                                <br>
                                <img src="../img/pg/lens.png" height="30" width="30">
                                '.$row['camera_lense'].'
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px">
                            <div class="col">
                                <h2>Portfolio</h2>
                            </div>
                        </div>
                        <div class="masonry">';
                        for($x=0;$x<=$mulselImgL;$x++){

                            $a = $mulselImg[$x];
                            $img1=explode(",",$a);
                            $img1l=count($img1)-1;
                            for($j=0;$j<=$img1l;$j++){
                               $content .= '<div class="item">
                                <img src="../multipleimage/'.$img1[$j].'">
                            </div>';
                                // echo "<img src='../multipleimage/".$img1[$j]."'></a><br>";
                            }
                        }
                        for($i=0;$i<=$portfolioImgL;$i++){
                            
                            $content .='<div class="item">
                                <img src="../dashboard/images/portfolio-images/'.$portfolioImg[$i].'">
                            </div>';
                        }
                            $content .='
                            <div class="item">
                                <img src="../img/pg/2.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/3.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/4.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/5.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/6.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/7.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/8.jpeg">
                            </div>
                            <div class="item">
                                <img src="../img/pg/9.jpeg">
                            </div>
                        </div>
                        <!-- Flex image grid
                        <div class="row">
                            <div class="col">
                                <img src="../dashboard/images/portfolio-images/'.$saveimage.'">
                            </div>
                            <div class="col">
                                <img src="../img/pg/2.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/3.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/4.jpeg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="../img/pg/5.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/6.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/7.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/8.jpeg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="../img/pg/9.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/10.jpeg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/11.jpg">
                            </div>
                            <div class="col">
                                <img src="../img/pg/13.jpg">
                            </div>
                        </div>
                        -->
                        <div class="row" style="margin-top: 100px">
                            <div class="col">
                                <h2>More about Samuel Papanolo...</h2>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 40px">
                            <div class="col">
                                <h5>What do you love about your job?</h5>
                            <p>
                            '.$q1.'
                            </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>What types of shoots have you done and how did you make them special?</h5>
                                <p>
                                '.$q2.'
                                </p>    
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>Awards, honours and recognitions received</h5>
                                <p>
                                '.$q3.'
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h5>A fun fact about you</h5>
                                <p>
                                '.$q4.'
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </section>
                
                
                
                
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pyx Photography, part of the Jeetlo.com India Pvt. Ltd. family
            </div>	
                            </div>
                            
                        </div>
                        
                    </div>
                </footer>
                <!-- Footer section end  -->
            
                <!-- Search model -->
                <!--
                <div class="search-model">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <div class="search-close-switch">+</div>
                        <form class="search-model-form">
                            <input type="text" id="search-input" placeholder="Search here.....">
                        </form>
                    </div>
                </div>
                -->
                <!-- Search model end -->
            
                <!--====== Javascripts & Jquery ======-->
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
                <script src="../js/jquery.slicknav.min.js"></script>
                <script src="../js/owl.carousel.min.js"></script>
                <script src="../js/jquery.magnific-popup.min.js"></script>
                <script src="../js/circle-progress.min.js"></script>
                <script src="../js/mixitup.min.js"></script>
                <script src="../js/instafeed.min.js"></script>
                <script src="../js/masonry.pkgd.min.js"></script>
                <script src="../js/main.js"></script>
                
            
                </body>
            </html>';

        // echo $content;
        $pageID=rand(100, 999);
        $pg_profile_page = "$name".$pageID. '.html';
        $file = "../p-profile/".($pg_profile_page);
        file_put_contents($file, $content);

           
            $sql = "INSERT INTO pgpublish(photographer_id, photographer_image, rating, review, about_photographer, Q1, Q2, Q3, Q4, portfolio_images, pg_profile_page) 
            VALUES('$photographerId', '$saveprofileimage', '$rating', '$reviews', '$about_photographer', '$q1', '$q2', '$q3', '$q4', '$pfImages', '$pg_profile_page')";
    
            $result = mysqli_query($conn, $sql) or die("Query Failed");
            
            $last_id = mysqli_insert_id($conn);

            $insertValuesSQL = trim($pfImages, ',');

            // $sql1 = "INSERT INTO portfolioimages(photograperId, publishId, ipf_mages) VALUES('$photographerId', '$last_id', '$insertValuesSQL')";
            // $result1 = mysqli_query($conn, $sql1);

            // if(!empty($insertQrySplit)) {
            //     $query = implode(",",$insertQrySplit);
                
            //     $sql1 = "INSERT INTO portfolioimages (ipf_mages) VALUES $query";


            //     echo $sql1;
            //     die();
                
            //     $res = mysqli_query($conn, $sql);
            //     if($res){
            //         echo "yes";
            //     }else{
            //         echo "No";
            //     }
            // }

            for($i=0;$i<=count($portfolioImg)-1;$i++){

               $sql1 = "INSERT INTO portfolioimages (photograperId, publishId, ipf_mages) 
                VALUES ('$photographerId', '$last_id', '$portfolioImg[$i]')";
                $result1 = mysqli_query($conn, $sql1);;
            }
            

            if($result AND $result1){
                header("Location: ../dashboard/phtographerdetail.php?id=$photographerId");
            }else{
                echo "Failed";
            }
        } 
    }

?>