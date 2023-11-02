<?php include('dashboard/connection.php');
$s="0";
if(isset($_GET['id']))
{
    $s=$_GET['id'];
}
if(isset($_GET['id2']))
{
    $s=$_GET['id2'];
}
if(isset($_GET['id3']))
{
    $s=$_GET['id3'];
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
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>

    <!-- Main Stylesheets -->
   
    <link rel="stylesheet" href="css/style.css"/>
     <link rel="stylesheet" href="css/bookingpage.css"/>
   

</head>
<style type="text/css">
#wireframe{display:none}
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
*/        width: 100%;
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
        #step-5{
        width: 75% !important;
    }
    }

@media (max-width:992px){
    #step-5{
        width: 100% !important;
    }
    .calendar{
        width: 100% !important;
    }
    .cal-body__week, .calendar__head {
    display: flex !important;
    height: 50px;
    width: 100% !important;
}
    #step-6{
        font-size:13px;
        width: 100% !important;
    }
     #step-7{
        width: 100% !important;
    }
    #step-4{
        width: 100% !important;
    }
    .mapouter {
        width:100%!important;
    }
    .gmap_canvas {
        width:100%!important;
    }
}

[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: none!important;}

</style>

<body>
   <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header section  -->
<?php include('header.php');?>
    <!-- Header section end  -->
    <!-- end nav bar-->


    <div class="container-fluid" style="background-color:#F6F9FF; min-height: 500px;">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-2">2</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-3">3</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-4">4</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-5">5</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-6">6</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-7">7</a>
                            </div>
                        </div>
                    </div>

                    <!-- <form role="form"> -->
                    <div class="d-flex justify-content-center pb-5 mt-2 pt-5">
                        <?php ?>
                        <div class="panel panel-primary setup-content" id="step-1"
                            style="background-color:#fff; padding: 40px 20px;">
                            <div class="panel-heading" id="first_heading">
                                <div class="progress mb-4" style="height: 4px; margin-left: 35px;width: 80%;">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Are you looking for a business or personal shoot?</h3>
                            </div>
                            <div class="panel-body" id="type">
                                <!-- <input type="hidden" id='hiddeninput' name="hiddeninput"> -->
                                <div class="card mt-4" style="line-height: 42px;">
                                     <div class="card-body" type="button" style="cursor:pointer;" onclick="business_insert();" id="businessdiv">
                                          <i class="fa fa-briefcase " style="font-size: 22px;"><span class="mx-4"
                                                style="font-size:20px; font-family:proxima-nova, sans-serif;" id="Business">Business</span></i>
                                    </div>
                                </div><br>
                                <div class="card" style="line-height: 42px; margin-bottom: -16px;">
                                    <div class="card-body" type="button" style="cursor:pointer;" onclick="personal_insert();" id="personaldiv">
                                        <i class="fa fa-user" style="font-size: 22px;"><span class="mx-4"
                                                style="font-size:20px;width: 14rem;font-family:proxima-nova, sans-serif;" id="Personal">Personal</span></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-primary setup-content" id="step-2"
                                style="background-color:#fff; padding: 40px 20px 30px 30px;width:500px;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord();"
                                        style="position: relative; top:12px;cursor: pointer;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 35px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 45%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <h3 class="panel-title d-flex justify-content-center"> What do you need to shoot?</h3>
                            </div>
                            <div class="panel-body pt-4">

                                <div class="d-flex">
                                	<div id="last_id" style="display: none;"></div>
                                    <div class="row" id="categoryshowdiv">
                             
                                    </div>
                                </div>


                             
                            </div>
                        </div>
                    

                            <div class="panel panel-primary setup-content" id="step-3"
                                style="background-color:#fff; padding: 40px 20px 30px 30px;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord1();"
                                        style="position: relative; top:12px;cursor: pointer;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 35px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 45%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h3 class="panel-title">Please provide the address for your shoot</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group pb-3">
                                        <label for="address" style="font-size: 22px;">Enter your address:</label>
                                    <div id="last_p_id" style="display: none;"></div>
                                        <input id="pac-input" class="form-control" oninput="chksearchadd()" type="text"
                                            placeholder="Search Box" onfocusout="map2call()" />
                                            <span id="searcherror"></span>
                                        <div class="container" id="map"></div>

                                    </div>
                                    
                                   
                                    <div class="pt-3 pb-3" id="atstudiochk">
                                       
                                       
                                    </div>
                                    <div class="d-flex justify-content-center"><button class="b-btn" type="button" onclick="map_upd();">Next</button></div>
                                </div>
                            </div>
                        
                            <div class="panel panel-primary setup-content" id="step-4"
                                style="background-color:#fff; padding: 40px 20px 30px 30px;width: 50%;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord2();"
                                        style="position: relative;cursor: pointer;top:12px;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 45px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h3 class="panel-title">How long would you like your shoot to be?</h3>
                                </div>

                                <div class="events my-custom-scrollbar">
                                	<div id="last_m_id" style="display: none;"></div>
                                <div class="panel-body" id="packageshowdiv">
                                  
                                     
                                </div>
                                
                            </div>
                            
                           
                            </div>

                            <div class="panel panel-primary setup-content" id="step-5"
                                style="background-color:#fff; padding: 40px 20px 30px 30px;width: 37%;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord3();"
                                        style="position: relative;cursor: pointer;top:12px;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 45px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h3 class="panel-title">What date would you like your shoot to be?</h3>
                                </div>
                                <div class="panel-body">
                                         <div class="calendar" style="width:105%">
                                      <div class="calendar__month">
                                        <div class="cal-month__previous"><</div>
                                        <div class="cal-month__current"></div>
                                        <div class="cal-month__next">></div>
                                      </div>
                                      <div id="last_pack_id" style="display: none;"></div>
                                      <div class="calendar__head">
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                        <div class="cal-head__day"></div>
                                      </div>
                                      <div class="calendar__body">
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                        <div class="cal-body__week">
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                          <div class="cal-body__day"></div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <button class="b-btn pull-right mt-3" type="button" onclick="date_upd();">Continue</button>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-6"
                                style="background-color:#fff; padding: 40px 20px 30px 30px;width: 49%;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord4();"
                                        style="position: relative; top:12px;cursor: pointer;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 45px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h3 class="panel-title">What time would you like to shoot?<br><span style="color:#800000; font-size:16px;">Please choose 3 time slots</span></h3>
                                   
                                
                                </div>
                                <div class="panel-body">
                                    <p class="table-border" id="selected_date"></p>
                                    <div id="msg"></div>
                                    <table id="mytable">
                                        <tr>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                        </tr>
                                        <tr>
                                            <td>9:00 AM</td>
                                            <td>12:00 PM</td>
                                            <td>5:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>9:30 AM</td>
                                            <td>12:30 PM</td>
                                            <td>5:30 PM</td>
                                        </tr>
                                        <tr>
                                            <td>10:00 AM</td>
                                            <td>1:00 PM</td>
                                            <td>6:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>10:30 AM</td>
                                            <td>1:30 PM</td>
                                            <td>6:30 PM</td>
                                        </tr>
                                        <tr>
                                            <td>11:00 AM</td>
                                            <td>2:00 PM</td>
                                            <td>7:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td>11:30 AM</td>
                                            <td>2:30 PM</td>
                                            <td>7:30 PM</td>
                                        </tr>
                                        
                                         <tr>
                                            <td></td>
                                            <td>3:00 PM</td>
                                            <td>8:00 PM</td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td>3:30 PM</td>
                                            <td>8:30 PM</td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td>4:00 PM</td>
                                            <td>9:00 PM</td>
                                        </tr>
                                        

                                    </table>
                                    <span id="timeerror"></span>
                                    <button class="b-btn pull-right mt-3" type="button" onclick="time_data();">Continue</button>
                                </div>
                            </div>

                            <div class="panel panel-primary setup-content" id="step-7"
                                style="background-color:#fff; padding: 40px 20px 30px 30px; width:100%;">
                                <div class="panel-heading">
                                    <img src="img/download.svg" onclick="backWord5();"
                                        style="position: relative; top:12px;cursor: pointer;">
                                    <div class="progress mb-4" style="height: 4px; margin-left: 45px;width: 85%;">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h3 class="panel-title">Please confirm your shoot details</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <input type="text" class="form-control" required="" placeholder="Name" id="user_name" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" required="" placeholder="Email" id="user_email">
                                                <span id="emailerror"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" required="" placeholder="Phone No." id="user_phone" pattern="[6789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)" oninput="phonevalidate()">
                                                <span id="phoneerror" style=""></span>
                                            </div>
                                           
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" required="" placeholder="Address" id="user_address"></textarea>
                                            </div>
                                            <div class="form-group">
                                               <!--  <input type="date" id="show_date" class="form-control"> -->
                                               <div id="show_date">
                                                   
                                               </div>
                                            </div>
                                            <div class="form-group">
                                            	<input id="show_time" class="form-control">
                                            	
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                         <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="335" id="gmap_canvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:335px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:335px;width:100%;}</style></div></div>
                                        </div>
                                       <!--- <div class="col-md-6">
                                            <iframe class="img-fluid"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28041.301494627205!2d77.19222008821298!3d28.5348293771952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce21e7d306d03%3A0x94b8ccb323d7648!2sMalviya%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1625504830144!5m2!1sen!2sin"
                                                width="600" height="335" style="border:0; height: 335px;"
                                                allowfullscreen="" loading="lazy"></iframe>
                                        </div>--->
                                    </div>
                                    <div class="border book-now p-3 mt-4">
                                       <div id="package_details"></div>
                                        <div class="row justify-content-center text-center mt-3">
                                            <div class="col-md-4">
                                                <button class="b-btn" onclick="book_now();" id="finalbtn" type="button">Book
                                                    Now</button>
                                            </div>
                                            <br>
                                            <div id="msg_submit" style="margin-top: 20px;"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
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
     document.getElementById("home").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     
     document.getElementById("joinuslink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("faqlink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("aboutuslink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("contactuslink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("termlink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     document.getElementById("privacylink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     
     document.getElementById("footerlogo").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     
      document.getElementById("bookshoot").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }

     document.getElementById("headerlogo").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     
      document.getElementById("twitterlink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("instalink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
      document.getElementById("facebooklink").onclick = function ()
     {
         var r = confirm("Clicking OK will discontinue your booking session. Do you wish to continue?");
         if (r == true) {
          window.location.href='index.php';
         } else {
             return false;
          }
       //alert("Hello WOrld");
     }
     
     
 </script>

    <script type="text/javascript">
        $(document).ready(function () {

            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-success').addClass('btn-default');
                    $item.addClass('btn-success');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-success').trigger('click');
        });
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQwTKcBOeuhGX9PhCbORKk1Qxu_DgooN0&callback=initAutocomplete&libraries=places&v=weekly"
        async></script>
    <script type="text/javascript">
         var currentcity="";
         var currentpincode="";
        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -33.8688, lng: 151.2195 },
                zoom: 13,
                mapTypeId: "roadmap",
            });

            const input = document.getElementById("pac-input");
            
            const searchBox = new google.maps.places.SearchBox(input);
            // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                
           
                
                const places = searchBox.getPlaces();
                
                const filterByTags = ['locality','postal_code'];

const filterByTagSet = new Set(filterByTags);

const result = places[0].address_components.filter((o) => 
  o.types.some((tag) => filterByTagSet.has(tag))
);
   if(result.length>0)
   {
      currentcity=result[0].long_name;
      if(result.length>1)
      currentpincode=result[1].long_name;
    }
                
                
                
                
                console.log(places[0].address_components);
              
                console.log(places[0]);
                console.log(result);
                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );
                 //console.log(place.geometry.location);
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
          //  console.log(places[0];)
        }
    </script>

    <script>
        function backWord() {
            document.getElementById("step-1").style.display = "block";
            document.getElementById("step-2").style.display = "none";
        }
        function backWord1() {
            document.getElementById("step-2").style.display = "block";
            document.getElementById("step-3").style.display = "none";
        }
        function backWord2() {
            document.getElementById("step-3").style.display = "block";
            document.getElementById("step-4").style.display = "none";
        }
        function backWord3() {
            document.getElementById("step-4").style.display = "block";
            document.getElementById("step-5").style.display = "none";
        }
        function backWord4() {
            document.getElementById("step-5").style.display = "block";
            document.getElementById("step-6").style.display = "none";
        }
        function backWord5() {
            array.splice(0,array.length)
           var v= document.getElementById("show_time").value;
           // alert(v);
            v='';
           // alert(v);
           // document.getElementById("show_time").value="";
            document.getElementById("step-6").style.display = "block";
           
            document.getElementById("step-7").style.display = "none";
          //  console.log(array.length);
          
        }
    </script>
    <script type="text/javascript">
        class Calendar {
  constructor() {
    this.monthDiv = document.querySelector(".cal-month__current");
    this.headDivs = document.querySelectorAll(".cal-head__day");
    this.bodyDivs = document.querySelectorAll(".cal-body__day");
    this.nextDiv = document.querySelector(".cal-month__next");
    this.prevDiv = document.querySelector(".cal-month__previous");
  }

  init() {
    moment.locale(window.navigator.userLanguage || window.navigator.language);

    this.month = moment();
    this.today = this.selected = this.month.clone();
    this.weekDays = moment.weekdaysShort(true);

    this.headDivs.forEach((day, index) => {
      day.innerText = this.weekDays[index];
    });

    this.nextDiv.addEventListener("click", (_) => {
      this.addMonth();
    });
    this.prevDiv.addEventListener("click", (_) => {
      this.removeMonth();
    });

    this.bodyDivs.forEach((day) => {
      day.addEventListener("click", (e) => {
        const date =
          +e.target.innerHTML < 10
            ? `0${e.target.innerHTML}`
            : e.target.innerHTML;

        if (e.target.classList.contains("cal-day__month--next")) {
          this.selected = moment(
            `${this.month.add(1, "month").format("YYYY-MM")}-${date}`
          );
        } else if (e.target.classList.contains("cal-day__month--previous")) {
          this.selected = moment(
            `${this.month.subtract(1, "month").format("YYYY-MM")}-${date}`
          );
        } else {
          this.selected = moment(`${this.month.format("YYYY-MM")}-${date}`);
        }

        this.update();
      });
    });

    this.update();
  }

  update() {
    this.calendarDays = {
      first: this.month.clone().startOf("month").startOf("week").date(),
      last: this.month.clone().endOf("month").date()
    };

    this.monthDays = {
      lastPrevious: this.month
        .clone()
        .subtract(1, "months")
        .endOf("month")
        .date(),
      lastCurrent: this.month.clone().endOf("month").date()
    };

    this.monthString = this.month.clone().format("MMMM YYYY");

    this.draw();
  }

  addMonth() {
    this.month.add(1, "month");

    this.update();
  }

  removeMonth() {
    this.month.subtract(1, "month");

    this.update();
  }

  draw() {
    this.monthDiv.innerText = this.monthString;

    let index = 0;

    if (this.calendarDays.first > 1) {
      for (
        let day = this.calendarDays.first;
        day <= this.monthDays.lastPrevious;
        index++
      ) {
        this.bodyDivs[index].innerText = day++;

        this.cleanCssClasses(false, index);

        this.bodyDivs[index].classList.add("cal-day__month--previous");
      }
    }

    let isNextMonth = false;
    for (let day = 1; index <= this.bodyDivs.length - 1; index++) {
      if (day > this.monthDays.lastCurrent) {
        day = 1;
        isNextMonth = true;
      }

      this.cleanCssClasses(true, index);

      if (!isNextMonth) {
        if (day === this.today.date() && this.today.isSame(this.month, "day")) {
          this.bodyDivs[index].classList.add("cal-day__day--today");
        }

        if (
          day === this.selected.date() &&
          this.selected.isSame(this.month, "month")
        ) {
          this.bodyDivs[index].classList.add("cal-day__day--selected");
        }

        this.bodyDivs[index].classList.add("cal-day__month--current");
      } else {
        this.bodyDivs[index].classList.add("cal-day__month--next");
      }

      this.bodyDivs[index].innerText = day++;
    }
  }

  cleanCssClasses(selected, index) {
    this.bodyDivs[index].classList.contains("cal-day__month--next") &&
      this.bodyDivs[index].classList.remove("cal-day__month--next");
    this.bodyDivs[index].classList.contains("cal-day__month--previous") &&
      this.bodyDivs[index].classList.remove("cal-day__month--previous");
    this.bodyDivs[index].classList.contains("cal-day__month--current") &&
      this.bodyDivs[index].classList.remove("cal-day__month--current");
    this.bodyDivs[index].classList.contains("cal-day__day--today") &&
      this.bodyDivs[index].classList.remove("cal-day__day--today");
    if (selected) {
      this.bodyDivs[index].classList.contains("cal-day__day--selected") &&
        this.bodyDivs[index].classList.remove("cal-day__day--selected");
    }
  }
}

const cal = new Calendar();
cal.init();

    </script>
    <script>
       
          function business_insert()
            {
               document.getElementById("categoryshowdiv").innerHTML="";
                var type = "Business";
                //alert(type);
                $.ajax({
                    url: "type_booking.php",
                    type: "POST",
                    data: {type:type},
                    success: function(data)
                    {
                      
                            $('#last_id').html(data);
                             
                            var getid=$('#last_id').find("#last_insert_id").val();
                              console.log( $('#last_id').html())
                            //console.log(getid);
                             $.ajax({
                                   url: "shootbooking.php",
                                   type: "POST",
                                   data: {gid:getid},
                                   success: function(response)
                                    {
                                    	var obj = JSON.parse(response);
                                    	for(var i=0;i<obj.length;i++)
                                    	{
                                    		
                                    	var div=document.createElement("div");
                                    	div.setAttribute("class","col-md-6 col-6 col-sm-6 col-xs-6 need");
                                    	document.getElementById("categoryshowdiv").appendChild(div);
                                    	var divcard=document.createElement("div");
                                    	divcard.setAttribute("class","card");
                                    	div.appendChild(divcard);
                                     
                                    	var divcardbody=document.createElement("div");
                                    	divcardbody.setAttribute("class","card-body");
                                    	divcardbody.setAttribute("id","catid"+obj[i].cid);
                                    	divcardbody.setAttribute("type","button");
                                    	divcardbody.setAttribute("onclick","portrait_upd('"+obj[i].cid+"')");
                                    	divcardbody.style.cursor="pointer";
                                    	divcard.appendChild(divcardbody);
                                          
                                          var img =document.createElement("img");
                                          img.src="dashboard/images/"+obj[i].cimage;
                                          img.setAttribute("class","img-fluid");
                                          img.style.width="15%";
                                          divcardbody.appendChild(img);
                                          var span=document.createElement("span");
                                          span.setAttribute("class","mx-3");
                                          span.style.fontSize="20px";
                                          span.innerHTML=obj[i].cname;
                                          divcardbody.appendChild(span);
                                        }
                                         $('#step-1').hide();
                                         $('#step-2').show();
                                    	 if("product"=='<?php echo $s;?>')
                                           {
                                               $('#catid56').click();  
                                           }
                                    }
                                   }); 
                        
                    }
                });
            }

        function personal_insert()
            {
            	document.getElementById("categoryshowdiv").innerHTML="";
                var type = "Personal";
                // alert(type);
                $.ajax({
                    url: "type_booking.php",
                    type: "POST",
                    data: {type:type},
                    success: function(data)
                    {
                        
                            $('#last_id').html(data);
                            
                           var getid=$('#last_id').find("#last_insert_id").val();
                              console.log( $('#last_id').html())
                            //console.log(getid);
                             $.ajax({
                                   url: "shootbooking.php",
                                   type: "POST",
                                   data: {gid:getid},
                                   success: function(response)
                                    {
                                    	var obj = JSON.parse(response);
                                    	for(var i=0;i<obj.length;i++)
                                    	{
                                    		
                                    	var div=document.createElement("div");
                                    	div.setAttribute("class","col-md-6 col-6 col-sm-6 col-xs-6 need");
                                    	document.getElementById("categoryshowdiv").appendChild(div);
                                    	var divcard=document.createElement("div");
                                    	divcard.setAttribute("class","card");
                                    	div.appendChild(divcard);

                                    	var divcardbody=document.createElement("div");
                                    	divcardbody.setAttribute("class","card-body");
                                    	divcardbody.setAttribute("id","catid"+obj[i].cid);
                                    	divcardbody.setAttribute("type","button");
                                    	divcardbody.setAttribute("onclick","portrait_upd('"+obj[i].cid+"')");
                                    	divcardbody.style.cursor="pointer";
                                    	divcard.appendChild(divcardbody);
                                          
                                          var img =document.createElement("img");img.src="dashboard/images/"+obj[i].cimage;
                                          img.setAttribute("class","img-fluid");
                                          img.style.width="15%";
                                          divcardbody.appendChild(img);
                                          var span=document.createElement("span");
                                          span.setAttribute("class","mx-3");
                                          span.style.fontSize="20px";
                                          span.innerHTML=obj[i].cname;
                                          divcardbody.appendChild(span);
                                        }
                                         $('#step-1').hide();
                                           $('#step-2').show();
                                           if("portrait"=='<?php echo $s;?>')
                                           {
                                               $('#catid66').click();  
                                           }
                                   	      if("event"=='<?php echo $s;?>')
                                           {
                                               $('#catid61').click();  
                                           }
                                    }
                                   }); 
                          
                        
                    }
                });
            }

            function portrait_upd(cat_id)
            {
               // console.log(cat_id);
                document.getElementById("atstudiochk").innerHTML="";
                // var need = "Portrait";
                $.ajax({
                    url: "shootbooking.php",
                    type: "POST",
                    data:{id5:cat_id},
                    dataType: 'json',
                    success: function(data)
                    {
                    	//alert(data);
                    	console.log(data[0].atstudio)
                    	if(data[0].atstudio=='Yes')
                    	{
                    	    var label=document.createElement("label");
                    	label.setAttribute("for","check");
                    	label.style.fontSize="21px";
                    	label.style.fontWeight="700";
                    	label.innerHTML="Would you like to have this shoot at a photographer's studio ?&nbsp;&nbsp;";
                        document.getElementById("atstudiochk").appendChild(label);
                        var input=document.createElement("input");
                        input.setAttribute("type","checkbox");
                        input.setAttribute("id","pac-checkbox");
                        document.getElementById("atstudiochk").appendChild(input);
                        var p=document.createElement("p");
                        p.style.fontSize="13px";
                        p.innerHTML="Note: We'll try to match with a photographer who has a studio, but can not guarantee their availability at your desired time.";
                        document.getElementById("atstudiochk").appendChild(p);  
                    	}
                    	else
                    	{
                    	     var input=document.createElement("input");
                        input.setAttribute("type","checkbox");
                        input.setAttribute("id","pac-checkbox");
                        input.setAttribute("value","No");
                        input.style.visibility="hidden";
                        document.getElementById("atstudiochk").appendChild(input);
                    	}
                    	                  
                        
                    },
                    error:function(data)
                    {
                    	console.log("error");
                    }
                });
                // var id= $(this).attr("id");
                
                var id = $('#last_insert_id').val();
                var form_data ='need='+cat_id+'&id='+id;
                // alert(type);
                $.ajax({
                    url: "portrait_upd.php",
                    type: "POST",
                    data: form_data,
                    success: function(data)
                    {
                       
                            $('#last_p_id').html(data);
                            $('#step-2').hide();
                            $('#step-3').show();
                        
                    }
                });
            }
              
            function map_upd()
            {
               document.getElementById("packageshowdiv").innerHTML="";
                var search = $('#pac-input').val();
                if(search=="")
                {
                   $('#pac-input').focus(); 
                   $('#searcherror').css('color','red');
                   $('#searcherror').html('Please fill The Address');
                }
                else
                {
                    $('#searcherror').html('');
                    //search full filled start
                    document.getElementById("user_address").value = search;
                var checkBox1 = document.getElementById("pac-checkbox");
                if (checkBox1.checked == true){
                    chkbox_value="Yes";
                    
                } else {
                    chkbox_value="No";
                   
                }
                var last_id = $('#last_portrait_id').val();
                
                //alert(currentpincode);
                var form_data ='search='+search+'&id='+last_id+'&chkval='+chkbox_value+'&city='+currentcity+'&pincode='+currentpincode;
                console.log(form_data);
                $.ajax({
                    url: "map_upd.php",
                    type: "POST",
                    data: form_data,
                    success: function(data)
                    {
                        // if(data=="1")
                        // {
                            $('#last_m_id').html(data);
                           var getcid= $('#last_m_id').find("input").val();
                              $.ajax({
                                   url: "shootbooking.php",
                                   type: "POST",
                                   data: {getcid:getcid},
                                   success: function(response)
                                    {
                                        /*
                                        Package: Half day shoot with all photos included
                                        Cost: INR 6,000
                                        Shoot time: 4 hours"
                                        */
                                    	var obj = JSON.parse(response);
                                    	for(var i=0;i<obj.length;i++)
                                    	{
                                    		var div=document.createElement("div");
                                    		div.setAttribute("class","card cat");
                                    		div.style.height="auto";
                                    		document.getElementById("packageshowdiv").appendChild(div);
                                    		var divcbody=document.createElement("div");
                                    		divcbody.setAttribute("class","card-body");
                                    		divcbody.setAttribute("type","button");
                                    		divcbody.setAttribute("onclick","package_upd('"+obj[i].pid+"')");
                                    		divcbody.style.cursor="pointer";
                                    		div.appendChild(divcbody);

                                    		var divrow=document.createElement("div");
                                    		divrow.setAttribute("class","row");
                                    		divcbody.appendChild(divrow);
                                    		var divinrow=document.createElement("div");
                                    		divinrow.setAttribute("class","col-md-4");
                                    		divrow.appendChild(divinrow);
                                    		var img=document.createElement("img");
                                    		img.src="dashboard/images/"+obj[i].pimage;
                                    		img.style.height="80px";
                                    		img.style.marginTop="13px";
                                    		divinrow.appendChild(img);

                                    		var div2inrow=document.createElement("div");
                                    		div2inrow.setAttribute("class","col-md-8");
                                    		divrow.appendChild(div2inrow);
                                    		var h4=document.createElement("h4");
                                    		h4.innerHTML=obj[i].pname;
                                    		div2inrow.appendChild(h4);
                                    		var span=document.createElement("span");
                                    		span.innerHTML=obj[i].pdesc;
                                    		div2inrow.appendChild(span);
                                    		var br=document.createElement("br");
                                    		div2inrow.appendChild(br);
                                    		var strong=document.createElement("strong");
                                    		strong.innerHTML="INR "+obj[i].price;
                                    		div2inrow.appendChild(strong);
                                    		var br2=document.createElement("br");
                                    		div2inrow.appendChild(br2);
                                    		var span2=document.createElement("span");
                                            span2.innerHTML="Shoot Time : "+obj[i].pfor+" Hours";
                                            div2inrow.appendChild(span2);
                                    	}
                                    	//console.log(obj.length);
                                    },
                                    error:function(response)
                                    {
                                    	console.log("error");
                                    }
                                });
                            
                            $('#step-3').hide();
                            $('#step-4').show();
                        // }
                    }
                });
                    
                }
                //search full filled
                
            }

            function package_upd(package_id)
            {
                var package_id = package_id;
                var last_id = $('#last_map_id').val();
                var form_data ='package='+package_id+'&id='+last_id;
                $.ajax({
                    url: "package_upd.php",
                    type: "POST",
                    data: form_data,
                    success: function(data)
                    {
                        // if(data=="1")
                        // {
                            $('#package_details').html(data);
                            $('#step-4').hide();
                            $('#step-5').show();
                        // }
                    }
                });
            }

            function date_upd()
            {
               $('#selected_date').html();
               var my= $('.cal-month__current').text();
               console.log($('#selected_date').html());
               var d = $('.cal-day__day--selected').text();
               var date=d+" "+my;
              const d1 = new Date();
              var currentDate = new Date();
                currentDate.setDate(currentDate.getDate() + 1);
                     var javaScriptRelease = Date.parse(date);
                     if(javaScriptRelease<=currentDate)
                    {
                     alert("Sorry, please select a date that is atleast 2 days from today");
                      
                    }
                    else
                    {
                         var last_id = $('#last_insert_id').val();
                         var form_data ='date='+date+'&id='+last_id;
                $.ajax({
                    url: "date_upd.php",
                    type: "POST",
                    data: form_data,
                    success: function(data)
                    {
                        // if(data=="1")
                            // $('#show_date').html(data);
                            $('#step-5').hide();
                            $('#step-6').show();
                        // }
                    }
                });
                    }

               
            }
           
            function book_now()
            {
                var uname1=$("#user_name").val();
                
                var uemail1=$("#user_email").val();
                var uphone=$("#user_phone").val();
               // var uadd=$("#user_address").val();
                if(uname1=="" || uemail1=="" || uphone=="")
                {
                    //document.getElementById("bookingbtn").setAttribute("disabled",true);
                   if(uname1=="")
                   {
                       $("#user_name").focus();
                       $("#user_name").attr("placeholder","Please Fill Your Name");
                   }
                   else
                   {
                        if(uemail1=="")
                        {
                           $("#user_email").focus();
                           $("#user_email").attr("placeholder","Please Fill Your Email");
                        }
                        else
                        {
                          if(uphone=="")
                          {
                             $("#user_phone").focus();
                             $("#user_phone").attr("placeholder","Please Fill Your Phone No");
                          }   
                        }
                       
                   }
                  
                   
                  
                }
                else
                {
                    var form_data = 'name=' + $('#user_name').val() + '&email=' + $('#user_email').val() + '&phone=' + $('#user_phone').val() + '&address=' + $('#user_address').val() + '&id=' + $('#last_insert_id').val();
                    $.ajax({
					url: "book_now.php",
					type: "POST",
					data: form_data,
					success: function(data) {
						$('#msg_submit').html(data);
			         //var lid=$('#last_insert_id').val();
				    var form = document.createElement("form");
                    form.method = "POST";
                    form.action = "ccavRequestHandler.php";
                    form.name="customerData";
                   /*---------------------------------------------------------------------------------*/
                    var tid = document.createElement("INPUT");
                    tid.name = "tid"
                    tid.value = new Date().getTime();
                    tid.type = 'text'
                    form.appendChild(tid);
                   /*---------------------------------------------------------------------------------*/
                    var merchant_id = document.createElement("INPUT");
                    merchant_id.name = "merchant_id"
                    merchant_id.value ="90786";
                    merchant_id.type = 'text'
                    form.appendChild(merchant_id);
                    /*---------------------------------------------------------------------------------*/
                    var order_id = document.createElement("INPUT");
                    order_id.name = "order_id"
                    order_id.value =$('#last_insert_id').val();
                    order_id.type = 'text'
                    form.appendChild(order_id);
                   /*---------------------------------------------------------------------------------*/
                    var amount = document.createElement("INPUT");
                    amount.name = "amount"
                    amount.value =document.getElementById("amountofamount").innerHTML;
                    amount.type = 'text'
                    form.appendChild(amount);
                    /*---------------------------------------------------------------------------------*/
                    var currency = document.createElement("INPUT");
                    currency.name = "currency"
                    currency.value ="INR";
                    currency.type = 'text'
                    form.appendChild(currency);
                   /*---------------------------------------------------------------------------------*/
                    var redirect_url = document.createElement("INPUT");
                    redirect_url.name = "redirect_url"
                    redirect_url.value ="https://pyx.co.in/ccavResponseHandler.php";
                    redirect_url.type = 'text'
                    form.appendChild(redirect_url);
                    /*---------------------------------------------------------------------------------*/
                    var cancel_url = document.createElement("INPUT");
                    cancel_url.name = "cancel_url"
                    cancel_url.value ="https://pyx.co.in/ccavResponseHandler.php";
                    cancel_url.type = 'text'
                    form.appendChild(cancel_url);
                   /*---------------------------------------------------------------------------------*/
                    var language = document.createElement("INPUT");
                    language.name = "language"
                    language.value ="EN";
                    language.type = 'text'
                    form.appendChild(language);
                    /*---------------------------------------------------------------------------------*/
                    var billing_name = document.createElement("INPUT");
                    billing_name.name = "billing_name"
                    billing_name.value = $('#user_name').val();
                    billing_name.type = 'text'
                    form.appendChild(billing_name);
                    /*---------------------------------------------------------------------------------*/
                    var billing_address = document.createElement("INPUT");
                    billing_address.name = "billing_address"
                    billing_address.value =$('#user_address').val();
                    billing_address.type = 'text'
                    form.appendChild(billing_address);
                    /*---------------------------------------------------------------------------------*/
                    var billing_city = document.createElement("INPUT");
                    billing_city.name = "billing_city"
                    billing_city.value ="Indore"
                    billing_city.type = 'text'
                    form.appendChild(billing_city);
                    /*---------------------------------------------------------------------------------*/
                    var billing_state = document.createElement("INPUT");
                    billing_state.name = "billing_state"
                    billing_state.value ="MP"
                    billing_state.type = 'text'
                    form.appendChild(billing_state);
                    /*---------------------------------------------------------------------------------*/
                    var billing_zip = document.createElement("INPUT");
                    billing_zip.name = "billing_zip"
                    billing_zip.value ="425001"
                    billing_zip.type = 'text'
                    form.appendChild(billing_zip);
                    /*---------------------------------------------------------------------------------*/
                    var billing_country = document.createElement("INPUT");
                    billing_country.name = "billing_country"
                    billing_country.value ="India"
                    billing_country.type = 'text'
                    form.appendChild(billing_country);
                    /*---------------------------------------------------------------------------------*/
                    var billing_tel = document.createElement("INPUT");
                    billing_tel.name = "billing_tel"
                    billing_tel.value = $('#user_phone').val();
                    billing_tel.type = 'text'
                    form.appendChild(billing_tel);
                    /*---------------------------------------------------------------------------------*/
                    var billing_email = document.createElement("INPUT");
                    billing_email.name = "billing_email"
                    billing_email.value =$('#user_email').val();
                    billing_email.type = 'text'
                    form.appendChild(billing_email);
                    
                    
                    /*---------------------------------------------------------------------------------*/
                    var delivery_name = document.createElement("INPUT");
                    delivery_name.name = "delivery_name"
                    delivery_name.value ="Chaplin"
                    delivery_name.type = 'text'
                    form.appendChild(delivery_name);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_address = document.createElement("INPUT");
                    delivery_address.name = "delivery_address"
                    delivery_address.value ="room no.701 near bus stand"
                    delivery_address.type = 'text'
                    form.appendChild(delivery_address);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_city = document.createElement("INPUT");
                    delivery_city.name = "delivery_city"
                    delivery_city.value ="Hyderabad"
                    delivery_city.type = 'text'
                    form.appendChild(delivery_city);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_state = document.createElement("INPUT");
                    delivery_state.name = "delivery_state"
                    delivery_state.value ="Andhra"
                    delivery_state.type = 'text'
                    form.appendChild(delivery_state);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_zip = document.createElement("INPUT");
                    delivery_zip.name = "delivery_zip"
                    delivery_zip.value ="425001"
                    delivery_zip.type = 'text'
                    form.appendChild(delivery_zip);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_country = document.createElement("INPUT");
                    delivery_country.name = "delivery_country"
                    delivery_country.value ="India"
                    delivery_country.type = 'text'
                    form.appendChild(delivery_country);
                    /*---------------------------------------------------------------------------------*/
                    var delivery_tel = document.createElement("INPUT");
                    delivery_tel.name = "delivery_tel"
                    delivery_tel.value ="9876543210"
                    delivery_tel.type = 'text'
                    form.appendChild(delivery_tel);
                    
                    
                    /*---------------------------------------------------------------------------------*/
                    var merchant_param1 = document.createElement("INPUT");
                    merchant_param1.name = "merchant_param1"
                    merchant_param1.value ="additional Info."
                    merchant_param1.type = 'text'
                    form.appendChild(merchant_param1);
                    /*---------------------------------------------------------------------------------*/
                    var merchant_param2 = document.createElement("INPUT");
                    merchant_param2.name = "merchant_param2"
                    merchant_param2.value ="additional Info."
                    merchant_param2.type = 'text'
                    form.appendChild(merchant_param2);
                    /*---------------------------------------------------------------------------------*/
                    var merchant_param3 = document.createElement("INPUT");
                    merchant_param3.name = "merchant_param3"
                    merchant_param3.value ="additional Info."
                    merchant_param3.type = 'text'
                    form.appendChild(merchant_param3);
                    /*---------------------------------------------------------------------------------*/
                    var merchant_param4 = document.createElement("INPUT");
                    merchant_param4.name = "merchant_param4"
                    merchant_param4.value ="additional Info."
                    merchant_param4.type = 'text'
                    form.appendChild(merchant_param4);
                    /*---------------------------------------------------------------------------------*/
                    var merchant_param5 = document.createElement("INPUT");
                    merchant_param5.name = "merchant_param5"
                    merchant_param5.value ="additional Info."
                    merchant_param5.type = 'text'
                    form.appendChild(merchant_param5);
                    
                    
                    /*---------------------------------------------------------------------------------*/
                    var promo_code = document.createElement("INPUT");
                    promo_code.name = "promo_code"
                    promo_code.value =""
                    promo_code.type = 'text'
                    form.appendChild(promo_code);
                    
                    
                    /*---------------------------------------------------------------------------------*/
                    var customer_identifier = document.createElement("INPUT");
                    customer_identifier.name = "customer_identifier"
                    customer_identifier.value =""
                    customer_identifier.type = 'text'
                    form.appendChild(customer_identifier);








                    /*---------------------------------------------------------------------------------*/
                    var integration_type = document.createElement("INPUT");
                    integration_type.name = "integration_type"
                    integration_type.value ="iframe_normal";
                    integration_type.type = 'text'
                    form.appendChild(integration_type);
                    
                    var fsubmit = document.createElement("INPUT");
                    fsubmit.value ="CheckOut";
                    fsubmit.type = 'submit'
                    form.appendChild(fsubmit);
                    document.body.appendChild(form);
                    fsubmit.click();
                    
					}});
                }
                
             
            }

             var array=[];
           var td=$("#mytable tr td").length;

            $('#mytable tr td').on('click', function() {

                var lvalue=$(this)[0].innerHTML;
                var len=lvalue.length;
                if(len>1)
                {
                 var tdbg=document.querySelectorAll(".on");
                 console.log();
                 if(tdbg.length <= 2){
                       $(this).toggleClass('on');
                        //var time = $(this).html();
                        // array.push(time);
                 }
                 else
                 {
                   $(this).removeClass('on');
                 }   
                }
                     });

           function time_data(){
                 var ontime=document.querySelectorAll(".on");
                 //alert(ontime.length);
                 if(ontime.length==3)
                 {
                     
                 //alert("yes");
                     array.push(ontime[0].innerHTML);
                     array.push(" "+ontime[1].innerHTML);
                     array.push(" "+ontime[2].innerHTML);
                
          
                
                 ttime=array.toString();
                 $('#show_time').val(ttime);
                
                var last_id = $('#last_insert_id').val();

                                $.ajax({
                    url: "show_data.php",
                    type: "POST",
                    data: {last_id:last_id},
                    success: function(data)
                    {
                        
                            $('#show_date').html(data);
                            
                    }
                });
                var form_data ='time='+ttime+'&id='+last_id;
                $.ajax({
                    url: "time_upd.php",
                    type: "POST",
                    data: form_data,
                    success: function(data)
                    {
                        
                             $('#step-6').hide();
                            $('#step-7').show();
                        // }
                    }
                });
                 }//if end
                 else
                 {
                    // alert("no");
                    document.getElementById("timeerror").innerHTML="Please select 3 time slots";
                    document.getElementById("timeerror").style.color="red";
                 }
            }
 


    </script>
    
       <script>
	var validate_email = function(email){
  var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9-])+(?:\.[a-zA-Z])+/;
  var is_email_valid = false;
  if(email.match(pattern) != null){
    is_email_valid = true;
  }
  return is_email_valid;
}
	$(document).on("keyup", "#user_email", function(){
	   // alert("yes");
  var input_val = $(this).val();
  var is_success = validate_email(input_val); 

  if(!is_success){
    $("#user_email").focus();
    //  alert("no");
      $("#emailerror").html("enter a valid email address");
            $("#emailerror").css("color","red");
             $("#finalbtn").attr("disabled", true);
                
  }
  else
  {$("#finalbtn").attr("disabled", false);
  
  	 $("#emailerror").html("");
  }
});

</script>
<script>
function isNumberKey(evt)
{
	
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

	return true;
}


</script>
<?php
if(isset($_GET['id']))
{ ?>
<script>

$("#personaldiv").click();

</script>
    
  <?php } ?>
  
  <?php
if(isset($_GET['id2']))
{ ?>
<script>

$("#personaldiv").click();

</script>
    
  <?php } ?>
  
  <?php
if(isset($_GET['id3']))
{ ?>
<script>

$("#businessdiv").click();

</script>
    
  <?php } ?>
  <?php 
if(isset($_GET['booking_type']))
{
    if($_GET['booking_type']=='business')
    {?>
       <script> business_insert();</script>
    <?php }
    else
    {
        if($_GET['booking_type']=='personal')
        {
            echo "<script>personal_insert();</script>";
        }
        
    }
}
?>
 <script type="text/javascript">
    function phonevalidate() {
        var mobile = document.getElementById("user_phone").value;
        var pattern = /^[6-9][0-9]{9}$/;
        if (pattern.test(mobile)) {
           // alert("Your mobile number : "+mobile);
           // return true;
           document.getElementById("phoneerror").innerHTML="";
        }
        else
        {
            document.getElementById("phoneerror").style.color="red";
            document.getElementById("phoneerror").innerHTML="Please enter a valid 10 digit  mobile number starting with 6, 7, 8 or 9";
            $("#user_phone").focus();
        }
        //alert("It is not valid mobile number");
       // return false;

    }
</script>
 <script>
                        $(document).on("keyup", "#pac-input", function(event) {
                           // alert("yes");
                           var sval=$("#pac-input").val();
                           //alert(sval);
                                        if (event.keyCode === 13) 
                                        {
                                            $("#pac-input").blur();
                                            $("#pac-input").val(sval);
                                            $("#pac-checkbox").focus();
                                           // alert("yes");
                                           //map_upd(); 
                                        }
                                    });
                                    
                        </script>
<script>
                                   function map2call()
                                   {
                                       var sadd=document.getElementById("pac-input").value;
                                       var srcval="https://maps.google.com/maps?q="+sadd+"&t=&z=13&ie=UTF8&iwloc=&output=embed";
                                       document.getElementById("gmap_canvas").setAttribute("src",srcval);
                                   }
                                    function chksearchadd()
                                    {
                                       // alert("yes");
                                        document.getElementById("searcherror").innerHTML="";
                                       
                                      } //$("#searcherror").html("");
                                    </script>
</body>

</html>