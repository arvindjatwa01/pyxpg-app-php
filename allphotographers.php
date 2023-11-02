<?php include('dashboard/connection.php');?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pyx Photography | Great photography on-demand</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="Pyx is the easiest and most affordable way to book a professional photographer. Get amazing results for your precious  occasions with Pyx | Pyx Photography">
    <meta name="keywords"
        content="Pyx, photo, photography, photographer, affordable, professional, India, amazing, cost">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Ajax Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


    <!-- Header section  -->
    <?php include('header.php');?>
    <div class="d-flex allpghead2">
        <div class="col-5 allpgheading">
            <h2>Our Photographers</h2>
        </div>
        <div class="col-6 d-flex filter-by">
            <h4>Filter By : </h4>
            <div class="mx-3 experties">
                <div id="list1" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">By Experties</span>
                    <ul class="items">
                        <?php
                        $sql = "select * from category where for_page='joinus'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <li><input type="checkbox" class="expertiesCheckBox" name="experties[]"
                                value="<?php echo $row['category_name']; ?>" />
                            <?php echo $row['category_name']; ?> </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="location">
                <div id="list2" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">By Location</span>
                    <ul class="items">
                        <?php 
                        $sql="select photographer.*, pgpublish.* from pgpublish LEFT JOIN photographer ON 
                        pgpublish.photographer_id = photographer.photographer_id where photographer.status='Approved' AND 
                        pgpublish.publish_online = '1' ORDER BY city ASC";
                        $re=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($re)){
                    ?>
                        <li><input type="checkbox" class="locationCheckBox" name="location[]"
                                value="<?php echo $row['city']; ?>" />
                            <?php echo $row['city']; ?> </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="photographers-list listphotographer" id="photographers-intro-list">
        <div class="intro-warp photographerintro">

            <div class="portfolio-warp">

                <div class="row portfolio-gallery m-0 photogrpherprofile">
                    <?php
                             $sql="select photographer.*, pgpublish.* from pgpublish LEFT JOIN photographer ON 
                             pgpublish.photographer_id = photographer.photographer_id where photographer.status='Approved' AND 
                             pgpublish.publish_online = '1' ORDER BY city ASC";
                             $re=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_assoc($re))
                               {
                           ?>
                    <div class="col-lg-4 col-sm-6 p-0">
                        <div class="portfolio-box ">
                            <div class="portfolio-item set-bg" data-setbg="">
                                <img src="dashboard/images/pg-images/<?php echo $row['photographer_image']; ?>" height="310"></div>
                            <h6><a href="p-profile/<?php echo $row['pg_profile_page']; ?>"><?php echo $row['name'];?></a></h6>
                            <p><?php echo $row['city'];?></p>
                            <?php //echo $row['snapper_camera'];?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="row portfolio-gallery m-0 profilebylocation">

                </div>
            </div>
    </section>
    
    <!-- Meet our Photographer 2 end-->
    <!--====== Javascripts & Jquery ======-->
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
    <!-- Footer section   -->
    <?php include('footer.php')?>
    <!-- Search model end -->
    <script>
    var checkList1 = document.getElementById('list1');
    checkList1.getElementsByClassName('anchor')[0].onclick = function(evt) {
        if (checkList1.classList.contains('visible'))
            checkList1.classList.remove('visible');
        else
            checkList1.classList.add('visible');
    }
    </script>
    <script>
    var checkList = document.getElementById('list2');
    checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
        if (checkList.classList.contains('visible'))
            checkList.classList.remove('visible');
        else
            checkList.classList.add('visible');
    }
    </script>

    <script>
    // ********* Select Experties checbox values For Photographers Profile ********* // 

    // $(document).ready(function() {
    //     $(".expertiesCheckBox").change(function() {
    //         var favorite = [];
    //         $.each($("input[name='experties[]']:checked"), function() {
    //             favorite.push($(this).val());
    //         });

    //         if (favorite.length > 0) {

    //             $.ajax({
    //                 type: 'POST',
    //                 url: 'action.php',
    //                 data: {
    //                     checked_experties: favorite
    //                 },
    //                 success: function(html) {
    //                     $('.photogrpherprofile').hide();
    //                     $('.profilebylocation').html(html);
    //                     $('.profilebylocation').show();

    //                     console.log(html);
    //                 }
    //             });
    //         } else {
    //             $('.photogrpherprofile').show();
    //             $('.profilebylocation').hide();
    //         }
    //     });
    // });
    </script>

    <script>
    // ********* Select  Location checbox values For Photographers Profile ********* // 

    $(document).ready(function() {
        $(".locationCheckBox").change(function() {
            var favorite = [];
            $.each($("input[name='location[]']:checked"), function() {
                favorite.push($(this).val());
            });

            if (favorite.length > 0) {

                $.ajax({
                    type: 'POST',
                    url: 'action.php',
                    data: {
                        checked_location: favorite
                    },
                    success: function(html) {
                        $('.photogrpherprofile').hide();
                        $('.profilebylocation').html(html);
                        $('.profilebylocation').show();

                        // console.log(html);
                    }
                });
            } else {
                $('.photogrpherprofile').show();
                $('.profilebylocation').hide();
            }
        });
    });
    </script>


</body>

</html>