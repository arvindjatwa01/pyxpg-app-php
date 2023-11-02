<?php 

include("dashboard/connection.php");

?>
<html lang="en">

<head>
    <title>Blog @ Pyx</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
    
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <script src="https://kit.fontawesome.com/864a104068.js" crossorigin="anonymous"></script>
    
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

    
    <link rel="stylesheet" type="text/css" href="css/bloges.css">
</head>

<body>
    <?php include('header.php');?>
    <!-- ================== Top Header ================== -->

    <section class="mb-5 intro1">
        <div class="container intro">
            <div class="row text-center">
                <div class="intro-section">
                    <h3 class="intro-title">What's on our mind?</h3>
                    <p class="intro-desc">Hear our thoughts on the latest in the world of professional photography,
                        travel and the world at large</p>
                    <button class="btn intro-btn">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================Bloges Intor 1 ========================== -->

    <section class="mb-5 intro2">
        <div class="container d-flex flex-row">
            <div class="row col-12">
                <?php 
                $sql2="select * from blog  ORDER BY blog_id DESC limit 2";
                $result2=mysqli_query($conn,$sql2);
                while ($row2=mysqli_fetch_assoc($result2)) {
            ?>

                <div class="col-6 position-relative blog-intro-display">
                    <img src="bloges/images/<?php echo $row2['bannerimg'];?>" class="w-100 img_width intro2_blog_img"
                        height="400" alt="">

                    <a href="<?php echo $row2['blogname'];?>">
                    
                        <div
                            class="card col-7 position-absolute top-50 p-5 rounded align-items-center input-group-text">
                            <?php 
                        $catid=$row2['category_id'] ;           
                        $sqlcat2="select *from blog_category where cat_id='$catid' ";
                        $resultcat2=mysqli_query($conn,$sqlcat2);
                        while($rowcat2=mysqli_fetch_assoc($resultcat2)){        
                    ?>
                            <span class="text-center  post-tag"><?php echo $rowcat2['cat_name'];?></span>
                            <?php }?>
                            <h2 class="post-title">
                                <?php $title=$row2['blog_title'];
                     echo substr($title,0,30); ?>
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
                <?php } ?>
            </div>

        </div>
    </section>

    <!-- ========================= Bloges Intro 2 ======================= -->

    <section class="pt-5 intro3">
        <div class="container">
            <div class="row ">
                <div class="col-8 intro3-bloges">
                    <div class="row">
                        <?php 
                    $sql="select * from blog ORDER BY blog_id DESC ";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col blogcol1">
                            <img src="bloges/images/<?php echo $row['bannerimg'];?>" width="355" height="225" alt=""
                                style="padding-left: 0px !important;" class="blog_img">
                            <div>
                                <div class="text-center blog-tag-name">
                                    <?php 
                                  $catid=$row['category_id'] ;           
                                  $sqlcat="select *from blog_category where cat_id='$catid' ";
                                  $resultcat=mysqli_query($conn,$sqlcat);
                                  while($rowcat=mysqli_fetch_assoc($resultcat)){
                                
                                ?>
                                    <a class="text-decoration-none text-dark fw-bolder"
                                        href="#"><?php echo $rowcat['cat_name'];?></a>
                                    <?php }?>
                                </div>
                                <div class="blogcol1-title">
                                    <a class="text-decoration-none text-dark fw-bolder"
                                        href="<?php echo $row['blogname'];?>">
                                        <h2 class=" fs-6 into2_blog_title"><?php $titl=$row['blog_title'];
                     echo substr($titl,0,50); ?></h2>
                                    </a>
                                </div>
                                <div class="text-black-50 blog-meta">
                                    <span><i class="fa fa-user"></i> <?php echo $row['publish'];?></span>&nbsp;
                                    <span><i class="fas fa-clock"></i>

                                        <?php
                                 $d= $row['created_date'];
                                $cls_date = new DateTime($d);
                                echo $cls_date->format('F d, Y');
                                 
                                  ?>


                                    </span>
                                </div>
                            </div>
                            <hr class="intro3-bloges-brack">

                        </div>
                        <?php }?>
                    </div>

                </div>

                <!-- ================ Social Media Icons ===================  -->

                <div class="col-4 ps-5 blog_sidebar">
                    <div class="row d-flex social_media">
                        <h5 class="fw-bold pb-3 social-plugin">Social Plugin</h5>
                        <ul class="social-counter ps-5">
                            <li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=http://pyx.co.in/blogs.php" target="_blank" title="facebook"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/intent/tweet?&url=https://pyx.co.in/blogs.php" target="_blank" title="twitter"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=https://pyx.co.in/blogs.php" target="_blank" title="linkedin"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li class="reddit"><a href="#" target="_blank" title="reddit"><i
                                        class="fa fa-reddit"></i></a></li>
                            <li class="pinterest"><a href="#" target="_blank" title="pinterest"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li class="vk"><a href="#" target="_blank" title="vk"><i class="fa fa-vk"></i></a></li>
                            <li class="youtube"><a href="#" target="_blank" title="youtube"><i
                                        class="fa fa-youtube"></i></a></li>
                            <li class="whatsapp"><a href="whatsapp://send?abid=phonenumber&text=https://pyx.co.in" target="_blank" title="whatsapp"><i
                                        class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <hr class="social_brack">
                    <!-- ================== Popular Posts/Blogs =================  -->
                    <div class="row popular-blog">
                        <div>
                            <h5 class="fw-bold pb-3 popular-posts">Popular Posts</h5>
                            <ul class="pe-5 pupular-post-ul">
                                <?php 
                            $psql="select * from blog ORDER BY blog_id DESC limit 3 ";
                            $presult=mysqli_query($conn,$psql);
                            while ($prow=mysqli_fetch_assoc($presult)) {
                                    
                        
                            ?>
                                <li class="d-flex pb-1"><img src="bloges/images/<?php echo $prow['bannerimg'];?>"
                                        class="p-1 border popular_blog_img" alt="..." width="90" height="75">
                                    <a class="text-decoration-none text-secondary fw-normal popular_blog_title"
                                        href="<?php echo $prow['blogname'];?>">
                                        <p class="px-2 popular_blog_title">
                                            <?php echo substr( $prow['blog_title'],0,36); ?>...</p>
                                    </a>
                                </li>
                                <?php }
                            ?>
                            </ul>
                        </div>
                    </div>
                    <hr class="post_brack">
                    <!-- ================ Bloges Category ================== -->
                    <div class="row ps-4 categories">
                        <h5 class="fw-bold category-heading">Categories</h5>
                        <ul class="ps-3 category">
                            <?php 
                            $csql="select * from blog_category";
                            $cresult=mysqli_query($conn,$csql);
                            while ($crow=mysqli_fetch_assoc($cresult)) {
                                    
                        
                            ?>
                            <li class="category_list"><i class="fas fa-chevron-right"></i><a
                                    class="text-decoration-none category-name"
                                    href="cat.php?cat_id=<?php echo $crow['cat_id'];?>&cat_name=<?php echo $crow['cat_name'];?>"
                                    class="label-name"><?php echo $crow['cat_name'];?></a><span
                                    class="float-end cat_count">
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>

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