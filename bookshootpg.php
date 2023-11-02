<?php include('dashboard/connection.php');
$s = "0";
if (isset($_GET['id'])) {
    $s = $_GET['id'];
}
if (isset($_GET['id2'])) {
    $s = $_GET['id2'];
}
if (isset($_GET['id3'])) {
    $s = $_GET['id3'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pyx Photography | Great photographers on-demand</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pyx is the easiest and most affordable way to book a professional photographer. Get amazing results for your precious  occasions with Pyx | Pyx Photography">
    <meta name="keywords" content="Pyx, photo, photography, photographer, affordable, professional, India, amazing, cost">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Main Stylesheets -->

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bookingpage.css" />


</head>
<style type="text/css">
    #wireframe {
        display: none
    }

    .required:after {
        content: " *";
        color: red;
    }

    .my-custom-scrollbar {
        position: relative;
        height: 400px;
        overflow: auto;
    }

    #map {
        height: 200px;
    }



    #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
    }

    #infowindow-content .title {
        font-weight: bold;
    }

    #infowindow-content {
        display: none;
    }

    /* #map #infowindow-content {
        display: inline;
    } */

    .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
    }

    #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
    }

    .pac-controls {
        display: inline-block;
        padding: 5px 11px;
    }

    .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        /*padding: 0 11px 0 13px;
        text-overflow: ellipsis;
*/
        width: 100%;
        margin: 20px 0px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
    }

    #target {
        width: 345px;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    table {
        width: 100%;
        text-align: center;
    }

    .table-border {
        border-left: 1px solid black;
        border-right: 1px solid black;
        padding-left: 5px;
        font-weight: 800;
    }

    .progress-bar {
        background-color: #141b24;
    }

    .card:hover {
        border: 1px solid #111 !important;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        #step-5 {
            width: 75% !important;
        }
    }

    @media (max-width:992px) {
        #step-5 {
            width: 100% !important;
        }

        .calendar {
            width: 100% !important;
        }

        .cal-body__week,
        .calendar__head {
            display: flex !important;
            height: 50px;
            width: 100% !important;
        }

        #step-6 {
            font-size: 13px;
            width: 100% !important;
        }

        #step-7 {
            width: 100% !important;
        }

        #step-4 {
            width: 100% !important;
        }

        .mapouter {
            width: 100% !important;
        }

        .gmap_canvas {
            width: 100% !important;
        }
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: none !important;
    }

    .bookshotbtn {
        display: inline-block;
        border: none;
        font-size: 14px;
        font-weight: 500;
        padding: 14px 25px;
        border-radius: 0;
        text-transform: uppercase;
        color: #fff;
        line-height: 1.2;
        cursor: pointer;
        text-align: center;
        background: #212121;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header section  -->
    <?php //include('header.php');
    ?>

    <header class="header-section hs-bd">
        <a href="index.html" class="site-logo"><img src="../img/pyx-photography.png" alt="logo"></a>

        <div class="clearfix"></div>
        <!-- Header section end  -->
        <!-- end nav bar-->


        <div class="container-fluid" style="background-color:#F6F9FF; min-height: 500px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">

                        <!-- <form role="form"> -->
                        <div class="d-flex justify-content-center pb-5 mt-2 pt-5">
                            <?php ?>
                            <div class="panel panel-primary setup-content" id="step-1" style="background-color:#fff; padding: 40px 20px;">
                                <div class="panel-heading" id="first_heading">

                                    <h3 class="panel-title">Are you looking for a business or personal shoot?</h3>
                                </div>
                                <div class="panel-body" id="type">

                                    <div class="card mt-4" style="line-height: 42px;">
                                        <div class="card-body" type="button" style="cursor:pointer;" onclick="business_insert();" id="businessdiv">
                                            <i class="fa fa-briefcase " style="font-size: 22px;"><span class="mx-4" style="font-size:20px; font-family:proxima-nova, sans-serif;" id="Business">Business</span></i>
                                        </div>
                                    </div><br>
                                    <div class="card" style="line-height: 42px; margin-bottom: -16px;">
                                        <div class="card-body" type="button" style="cursor:pointer;" onclick="personal_insert();" id="personaldiv">
                                            <i class="fa fa-user" style="font-size: 22px;"><span class="mx-4" style="font-size:20px;width: 14rem;font-family:proxima-nova, sans-serif;" id="Personal">Personal</span></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="" id="customer-form" style="display: none;">
                            <form action="action.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="cutomerName">Name :</label>
                                        <input type="text" class="form-control" name="cutomerName" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Address">Address :</label>
                                        <input type="text" class="form-control" name="Address" placeholder="Enter Your Home Address">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="Email">Email :</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email Address">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="PhomeNo">Contact No. :</label>
                                        <input type="text" class="form-control" 
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" 
                                        maxlength="10" name="phoneNo" placeholder="Enter Your Phone Number">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Select Shoot Type :</label>
                                        <select name="shoot_type_b" id="business_s_type" class="form-control">
                                            <option value="">Select a shoot type</option>
                                            <option value="Event">Event</option>
                                            <option value="Office">Office</option>
                                            <option value="Product">Product</option>
                                            <option value="Portrait">Portrait</option>
                                        </select>
                                        <select name="shoot_type_p" id="personal_s_type" class="form-control">
                                            <option value="">Select a shoot type</option>
                                            <option value="Event">Event</option>
                                            <option value="Family">Family</option>
                                            <option value="Maternity">Maternity</option>
                                            <option value="Portrait">Portrait</option>
                                            <option value="Kids">Kids</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="Shoot Address">Shoot Address :</label>
                                        <input type="text" class="form-control" name="shootaddress" placeholder="Enter Shoot Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Shoot start Date :</label>
                                        <input type="date" class="form-control" name="start_date">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Shoot end Date :</label>
                                        <input type="date" class="form-control" name="end_date">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="">
                                        <button class="bookshotbtn" name="shootbook">Book shoot</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>


        <!--====== Javascripts & Jquery ======-->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>

        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/circle-progress.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/instafeed.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/main.js"></script>

        <?php include('footer.php'); ?>
        <script>
            function business_insert() {
                document.getElementById("step-1").style.display = "none";
                document.getElementById("customer-form").style.display = "block";
                document.getElementById("personal_s_type").style.display = "none";

                // alert("Business");
                var type = "Business";
                //alert(type);
            }

            function personal_insert() {
                document.getElementById("step-1").style.display = "none";
                document.getElementById("customer-form").style.display = "block";
                document.getElementById("business_s_type").style.display = "none";
                
                var type = "Personal";

                // alert(type);

            }
            
        </script>
</body>

</html>