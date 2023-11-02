<?php 
session_start();

include("blogdash/connection.php");
    if(isset($_GET['name']))
    {
        $id=$_GET['name'];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<style type="text/css">

.post-info {
    max-width:350px;
    position: absolute;
    background-color: rgba(0,0,0,0.3);
    text-align: center;
    padding: 40px;
    transform: translate(38%,-146%);
    border-radius: 4px;
}
a{
    text-decoration: none;
}
ul li{
    list-style-type: none;
}
@media(max-width: 576px)
{
    .post-info{
        transform: translate(6%,-146%);
    }
}
.post-info:before {
    margin: 12px;
}
.post-tag {
    position: relative;
    display: inline-block;
}
.post-tag {
    height: 18px;
    z-index: 5;
    background-color: #19ddc4;
    color: #fff;
    font-size: 10px;
    line-height: 18px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0 6px;
}
.post-title a {
    color: #fff;
    display: block;
}
.post-meta {
    font-size: 12px;
    color: #fff;
}

.post-info:before {
    margin: 12px!important;
}
 .post-info:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 5;
    margin: 0;
    border: 1px solid rgba(255,255,255,0.3);
}
h2{
    font-size: 22px;
    font-weight: 700;
    display: block;
    line-height: 1.5em;
    margin: 8px 0 7px;
}

.post-meta i{
    color: #fff;
    font-size: 12px;
}
.blog-info-wrap{
    text-align: center;
    padding: 20px;
    background-color: #fff;
}
.blog-tag{
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    line-height: 28px;
    padding: 0 13px;
    color: #1f2024;
    text-align: center;
}
.blog-tag:after{
    content: "";
    height: 1px;
    left: -24px;
    width: 16px;
    background: rgba(153, 153, 153, 0.5);
    position: absolute;
    top: 50%;
    margin-top: -1px;
}
.blog-meta {
    font-size: 12px;
    color: #b5b5b5;
}

.blog-meta i{
    color: #b5b5b5;
    font-size: 12px;
}

.social-counter li {
    float: left;
    width: 14%;
    box-sizing: border-box;
    padding: 0 5px;
   margin-right: 10px;
   margin-bottom: 10px;
}
.social-counter li a {
    display: block;
    height: 40px;
    font-size: 22px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 2px;
    transition: opacity .17s;
}

.facebook{
    background: #3b5999;
}
.twitter{
    background-color: #00acee;
}
.linkedin{
    background: #0077b5;
}
.reddit {
    background-color: #ff4500;
}
.pinterest  {
    background-color: #ca2127;
}
.vk{
    background-color: #4a76a8;
}
.instagram{
    background: linear-gradient(15deg,#ffb13d,#dd277b,#4d5ed4);
}
.youtube{
    background-color: #db4a39;
}
.whatsapp{
    background-color: #3fbb50;
}
.rss{
    background-color: #ffc200;
}
.img-thumbnail{
    border: none;
    width: 95px;
}
.side-sec h5{
    color: #111;
}
.label-name:before {
    content: "\f054";
    float: left;
    color: #000000;
    font-weight: 400;
    font-family: FontAwesome;
    font-size: 8px;
    margin: 6px 3px 0 0;
}
.label-name{
    font-size: 14px;
}
.label-count {
    position: relative;
    float: right;
    font-size: 11px;
    font-weight: 400;
    text-align: center;
    line-height: 16px;
    padding-right: 40px;
}
</style>
<body>
</body>


<section class="pt-5">
    <div class="container">
        <div class="row">
          <h6>Showing posts with the label "<?php echo $_GET['cat_name'];?>"</h6>
           <div class="col-md-8">
                <div class="row">
                 <?php 
                    $sql="select * from blog where cat_name='$id'";
                    $result=mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                        
            
                  ?>
                  <div class="col">
                        <img src="blogdash/images/<?php echo $row['bannerimg'];?>" alt="" height="225" width="387">
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
                                <h2 class="blog-title"><?php echo $row['blog_title'];?></h2>
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
                    <!-- <div class="col">
                        <img src="images/blog1.jpg" alt="" height="225" width="387">
                        <div class="blog-info-wrap">
                            <div class="blog-info">
                                <a class="blog-tag" href="#">Beauty</a>
                                <h2 class="blog-title">I like fishing because it is always the great way of relaxing</h2>
                            </div>
                            <div class="blog-meta">
                                <span><i class="fa fa-user"></i> Sora Blogging Tips</span>&nbsp;
                                <span><i class="fa fa-clock-o"></i> October 15, 2021</span>
                            </div>
                        </div>
                        <hr>
                    </div> -->
                 <?php }?>               
                </div>
           </div>
           <div class="col-md-4 ps-5 side-sec ">
                <div class="row">
                    <h5 class="fw-bold pb-3">Social Plugin</h5>
                    <ul class="social-counter ps-5">
                        <li class="facebook"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="linkedin"><a href="#" target="_blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li class="reddit"><a href="#" target="_blank" title="reddit"><i class="fa fa-reddit"></i></a></li>
                        <li class="pinterest"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li class="vk"><a href="#" target="_blank" title="vk"><i class="fa fa-vk"></i></a></li>
                        <li class="instagram"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li class="youtube"><a href="#" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li class="whatsapp"><a href="#" target="_blank" title="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div>
                        <h5 class="fw-bold pb-3">Popular Posts</h5>
                        <ul class="pe-5">
                            <?php 
                            $psql="select * from blog limit 3";
                            $presult=mysqli_query($conn,$psql);
                            while ($prow=mysqli_fetch_assoc($presult)) {
                                    
                        
                            ?>
                            <li class="d-flex pb-3"><img src="blogdash/images/<?php echo $prow['bannerimg'];?>" class="img-thumbnail" alt="...">
                                <p class="px-2"><?php echo $prow['blog_title'];?></p></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row ps-4">
                    <h5 class="fw-bold ">Categories</h5>
                    <ul class="ps-3">
                         <?php 
                            $csql="select * from blog_category";
                            $cresult=mysqli_query($conn,$csql);
                            while ($crow=mysqli_fetch_assoc($cresult)) {
                                    
                        
                            ?>
                        <li><a href="cat.php?cat_id=<?php echo $crow['cat_id'];?>&cat_name=<?php echo $crow['cat_name'];?>" class="label-name"><?php echo $crow['cat_name'];?></a><span class="label-count">
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


</html>
<?php } ?>