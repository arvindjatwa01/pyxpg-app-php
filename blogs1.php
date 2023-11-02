<?php
session_start();

include("dashboard/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Blogs</title>
    <meta charset="utf-8">
    <meta name="description" content="We love hearing from you, let us know how we can help | Pyx Photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Pyx, photographer, contact, support, on demand, affordable, photography, India">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="blogstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <!-- Header section  -->
	<?php include('header.php');?>
	<!-- Header section end  -->
    	

	
    <!--<div class="container searchdiv">
        <input type="text" name="search" placeholder="Search Here" id="searchtxt" width="500px">
        <button onclick="mysearch()" class="searchbtn">search</button>
    </div>
    <div>
        <h3 id="searchresult" class="text-center"></h3>
    </div>-->
    <section class="mb-5" id="intro1">
        <div class="container intro">
            <div class="row">
                <div class="intro-section">
                    <h3 class="intro-title">What's on our mind?</h3>
                    <p class="intro-desc">Check out our thoughts on the latest in the world of professional photography, travel and the world at large</p>
                    <button class="btn intro-btn">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5" id="intro2">
        <div class="container">
            <div class="row">
                <?php 
                    $sql2="select * from blog  ORDER BY blog_id DESC limit 2";
                    $result2=mysqli_query($conn,$sql2);
                    while ($row2=mysqli_fetch_assoc($result2)) {
                        
            
                ?>
                <div class="col-12 col-md-6 mt-4 pe-0">
                    <img src="bloges/images/<?php echo $row2['bannerimg'];?>" class="w-100 img_width" height="430"
                        alt="">
                    <a href="<?php echo $row2['blogname'];?>">
                        <div class="post-info">
                            <?php 
                                       $catid=$row2['category_id'] ;           
                                      $sqlcat2="select *from blog_category where cat_id='$catid' ";
                                      $resultcat2=mysqli_query($conn,$sqlcat2);
                                      while($rowcat2=mysqli_fetch_assoc($resultcat2)){
                                    
                                    ?>
                            <span class="post-tag"><?php echo $rowcat2['cat_name'];?></span>
                            <?php }?>
                            <h2 class="post-title">
                                <a href="<?php echo $row2['blogname'];?>"><?php $title=$row2['blog_title'];
                         echo substr($title,0,30); ?></a>
                            </h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> <?php echo $row2['publish'];?></span>&nbsp;
                                <span><i class="fa fa-clock-o"></i>
                                    <?php
                                     $d= $row2['created_date'];
                                    $cls_date = new DateTime($d);
                                    echo $cls_date->format('F d, Y');
                                      ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <?php }?>

            </div>
        </div>
    </section>

    <section class="pt-5 intro3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row" id="blogdata">
                        <?php 
                    $sql="select * from blog ORDER BY blog_id DESC ";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                        
            
                ?>
                        <div class="col col1">
                            <img class="col1_img" src="bloges/images/<?php echo $row['bannerimg'];?>" alt=""
                                height="225" width="387">
                            <div class="blog-info-wrap">
                                <div class="blog-info">

                                    <?php 
                                  $catid=$row['category_id'] ;           
                                  $sqlcat="select *from blog_category where cat_id='$catid' ";
                                  $resultcat=mysqli_query($conn,$sqlcat);
                                  while($rowcat=mysqli_fetch_assoc($resultcat)){
                                
                                ?>
                                    <a class="blog-tag" href="#"><?php echo $rowcat['cat_name'];?></a>
                                    <?php }?>
                                    <a href="<?php echo $row['blogname'];?>">
                                        <h2 class="blog-title"><?php $titl=$row['blog_title'];
                     echo substr($titl,0,50); ?></h2>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span><i class="fa fa-user"></i> <?php echo $row['publish'];?></span>&nbsp;
                                    <span><i class="fa fa-clock-o"></i>

                                        <?php
                                 $d= $row['created_date'];
                                $cls_date = new DateTime($d);
                                echo $cls_date->format('F d, Y');
                                 
                                  ?>


                                    </span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <?php }?>


                    </div>


                </div>
                <div class="col-md-4 ps-5 side-sec ">
                    <div class="row">
                        <h5 class="fw-bold pb-3">Social Plugin</h5>
                        <ul class="social-counter ps-5 social_media">
                            <li class="facebook"><a href="#" target="_blank" title="facebook"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#" target="_blank" title="twitter"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#" target="_blank" title="linkedin"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li class="reddit"><a href="#" target="_blank" title="reddit"><i
                                        class="fa fa-reddit"></i></a></li>
                            <li class="pinterest"><a href="#" target="_blank" title="pinterest"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="vk"><a href="#" target="_blank" title="vk"><i class="fa fa-vk"></i></a></li>
                            <!--<li class="instagram"><a href="#" target="_blank" title="instagram"><i-->
                            <!--            class="fa fa-instagram"></i></a></li>-->
                            <li class="youtube"><a href="#" target="_blank" title="youtube"><i
                                        class="fa fa-youtube"></i></a></li>
                            <li class="whatsapp"><a href="#" target="_blank" title="whatsapp"><i
                                        class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="row main_popular_post">
                        <div class="demo_post">
                            <h5 class="fw-bold pb-3">Popular Posts</h5>
                            <ul class="pe-5 popular_post_ul">
                                <?php 
                            $psql="select * from blog ORDER BY blog_id DESC limit 3 ";
                            $presult=mysqli_query($conn,$psql);
                            while ($prow=mysqli_fetch_assoc($presult)) {
                                    
                        
                            ?>
                                <li class="d-flex pb-3 populer_post"><img
                                        src="bloges/images/<?php echo $prow['bannerimg'];?>" class="img-thumbnail"
                                        alt="...">
                                        <a href="<?php echo $prow['blogname'];?>">
                                        <p class="px-2"><?php echo substr( $prow['blog_title'],0,36); ?>...</p>
                                        </a>
                                </li>
                                <?php }
                            ?>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="row ps-4 cat_part">
                        <h5 class="fw-bold ">Categories</h5>
                        <ul class="ps-3">
                            <?php 
                            $csql="select * from blog_category";
                            $cresult=mysqli_query($conn,$csql);
                            while ($crow=mysqli_fetch_assoc($cresult)) {
                                    
                        
                            ?>
                            <li><a href="cat.php?cat_id=<?php echo $crow['cat_id'];?>&cat_name=<?php echo $crow['cat_name'];?>"
                                    class="label-name"><?php echo $crow['cat_name'];?></a><span class="label-count">
                                    <?php  

                             $category_id=$crow['cat_id'];
                            $sqlc="select count(*) from blog where category_id='$category_id'";
                            $c=mysqli_query($conn,$sqlc);
                            $rowc=mysqli_fetch_assoc($c);
                            $count = $rowc["count(*)"];  
                            ?>
                                    (<?php echo $count;?>)
                                </span></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <script type="text/javascript">
    function mysearch() {
        let filter = document.getElementById('searchtxt').value.toUpperCase();
        // alert(filter);
        let mydata = document.getElementById('blogdata');
        let hd = mydata.getElementsByClassName('col');
        // alert(hd.length);
        for (var i = 0; i < hd.length; i++) {
            let v = hd[i].getElementsByTagName('h2')[0].innerHTML;
            // alert(v.toUpperCase().indexOf(filter));
            if (v.toUpperCase().indexOf(filter) > -1) {
                document.getElementById("searchresult").innerHTML = "Search result for " + ' " ' + document
                    .getElementById('searchtxt').value + '"' + "<hr>";
                document.getElementById("intro1").style.display = "none";
                document.getElementById("intro2").style.display = "none";
                hd[i].style.display = "";

                // alert("display");
            } else {
                hd[i].style.display = "none";
            }
        }
    }
    </script>
    <?php include('footer.php');?>
</body>

</html>