<?php include('dashboard/connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Powering creative talent | Pyx Photography</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pyx is a photography marketplace that uses technology to absorb your administrative and marketing overhead. Focus on what you do best - taking great photographs | Pyx Photography">
    <meta name="keywords" content="Pyx, photographer, join, photography, photo, earn, shoots, member, get started, India">
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
    
    <link rel="stylesheet" href="css/joinus-style.css"/>
    <!--====== Javascripts & Jquery ======-->
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
   
    
   
</head>
<style type="text/css">
label{display: inline-block}
#joinuslink {
    display: none
}

.required:after {
    content: " *";
    color: red;
}

.progress-bar {
    background-color: black !important;
}

.progress {
    background-color: #979da4;
}

.my-custom-scrollbar {
    position: relative;
    height: 400px;
    overflow: auto;
    overflow-x: hidden;
}

.multi_select_box {
    width: 400px;
    margin: 80px auto;
}

.multi_select_box select {
    width: 100%;
}

.multi_select_box button {
    background-color: darkblue !important;
    color: white !important;
    padding: 15px 25px;
}

@media (max-width:992px) {
    #step-8 {
        width: 100% !important;
    }
}

.port ul li {
    padding: 0px 6px;
}

.pg-submit p {
    margin: 0;
    color: grey;
    font-size: 17px;
}

@media screen and (max-width: 1800px) and (min-width: 1380px) {
    .round {
        padding-left: 33px !important;
    }

}
</style>

<body>
    <?php include('header.php'); ?>
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
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-8">8</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-9">9</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-10">10</a>
                            </div>
                            <div class="stepwizard-step col-xs-1" style="visibility:hidden;">
                                <a href="#step-11">11</a>
                            </div>
                        </div>
                    </div>

                    <form id="frmsendemail" role="form" class="d-flex justify-content-center pb-5 mt-2 pt-5"
                        enctype="multipart/form-data" method="POST" action='sendemail.php'>
                        <div id="msg_submit"></div>
                        <div class="panel panel-primary setup-content" id="step-1"
                            style="background-color:#fff; padding: 40px 20px 30px 30px;">
                            <div class="panel-heading">
                                <div class="progress mb-4" style="height: 4px;width: 100%;">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>
                                <p class="pt-3" style="font-size: 18px;"> Welcome to the application process. Please
                                    provide your
                                    email address below to <br>begin</p>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Email Address :</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        required>
                                    <span id="error"></span>
                                    <!-- <div id="show_error"></div> -->
                                </div>
                                <button class="b-btn mt-3 pull-right nextBtn" id="step1btn" type="submit"
                                    onclick="fetch_mail();">Continue</button>

                            </div>
                        </div>

                        <div class="panel panel-primary setup-content" id="step-2"
                            style="background-color:#fff; padding: 40px 20px 30px 30px;">
                            <div class="panel-heading">
                                <img src="img/download.svg" onclick="backWord();"
                                    style="position: relative; top:12px; cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>
                                <p class="pt-3" style="font-size: 18px;">Please provide your personal details so that we
                                    can get you all
                                    setup.</p>
                            </div>
                            <div class="panel-body">
                                <input type="hidden" id="hiddenbookingid" value="">
                                <div class="form-group">
                                    <label class="control-label">Email Address :</label>
                                    <input maxlength="200" type="email" class="form-control"
                                        placeholder="Enter Your Email Address" name="email" id="email1" required readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">First Name :</label>
                                    <input maxlength="200" type="text" name="fname" class="form-control"
                                        placeholder="Enter Your First Name" id="fname" required
                                        onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                                    <span id='error3'></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Last Name :</label>
                                    <input maxlength="200" type="text" name="lname" class="form-control"
                                        placeholder="Enter Your Last Name" id="lname" required
                                        onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                                    <span id='error4'></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number :</label>
                                    <input type="text" required="" class="form-control"
                                        placeholder="Enter Your Phone Number" name="phone" pattern="[6789][0-9]{9}"
                                        maxlength="10" onkeypress="return isNumberKey(event)" id="phoneno"
                                        onkeyup="chkno(this.value)">
                                    <span id="error5"></span>
                                </div>
                                <script>
                                var error5 = document.getElementById("error5");

                                function chkno(phoneno) {
                                    var pattern = /^[6-9][0-9]{9}$/;
                                    if (pattern.test(phoneno)) {
                                        error5.innerHTML = "";
                                    } else {
                                        error5.innerHTML =
                                            "Please enter a valid 10 digit mobile number starting with 6, 7, 8 or 9";
                                        error5.style.color = "red";
                                    }
                                }
                                </script>
                                <div class="form-group">
                                    <label class="control-label">Home Address:</label>
                                    <input maxlength="200" type="text" required="" class="form-control"
                                        placeholder="Enter Your Home Address" name="address" id="homeaddress">
                                    <span id="error6"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">City:</label>
                                    <input maxlength="200" type="text" required="" class="form-control"
                                        placeholder="Enter Your City" name="city" id="city">
                                    <span id="error7"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Pin Code:</label>
                                    <input maxlength="6" type="text" required="" class="form-control"
                                        onkeypress="return isNumberKey(event)" placeholder="Enter Your Pin Code"
                                        name="pincode" id="pincode" onkeyup="chkpin(this.value)">
                                    <span id="error8"></span>
                                </div>
                                <script>
                                var error8 = document.getElementById("error8");

                                function chkpin(pincode) {
                                    var pattern = /^[6-9][0-9]{9}$/;
                                    if (pattern.test(pincode)) {
                                        error8.innerHTML = "";
                                    } else {
                                        error8.innerHTML = "Please enter a valid 6 digit pincode";
                                        error8.style.color = "red";
                                    }
                                }
                                </script>
                                <div class="form-group">
                                    <label class="control-label">Upload your Aadhar card (.pdf only) :</label>
                                    <input class="form-control" type="file" id="formFile" required="" name="adharcard" accept="application/pdf" onchange=" fileValidation()">
                                </div>
                                <button class="b-btn mt-3 nextBtn pull-right" type="submit">Continue</button>
                            </div>
                        </div>

                        <div class="panel panel-primary setup-content" id="step-3"
                            style="background-color:#fff; padding: 40px 20px 30px 30px;width:88%">
                            <div class="panel-heading">
                                <img src="img/download.svg" onclick="backWord1();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>
                                <p class="pt-3" style="font-size: 18px;">Please provide some examples so that we can see
                                    the type of work you like to do. <br> By completing this application, you give Pyx
                                    permission to download and examine photos from your portfolio.</p>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Online Portfolio</label>
                                    <input maxlength="200" type="link" class="form-control" placeholder="Your Website"
                                        name="website" id="your-website" required
                                        onkeyup="if(this.value.length > 0) document.getElementById('start_button').disabled = false; else document.getElementById('start_button').disabled = true;">
                                    <span id="your-website-alert"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label"><i class="fa fa-instagram">&nbsp;</i>Instagram handle
                                        :</label>
                                    <input maxlength="200" type="text" class="form-control" name="insta">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"><i class="fa fa-facebook">&nbsp;</i>Facebook profile
                                        URL :</label>
                                    <input maxlength="200" type="text" name="fb" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"><i class="fa fa-twitter">&nbsp;</i>Twitter handle
                                        :</label>
                                    <input maxlength="200" type="text" name="twitter" class="form-control">
                                </div>

                                <textarea rows="2" name="mimage" id="mid" style="visibility:hidden"></textarea>
                                <input type="hidden" id="miid" value="">
                                <button class="b-btn mt-3 nextBtn pull-right" type="submit" style="cursor: pointer;" id="start_button" disabled>Continue</button>
                            </div>
                        </div>

                        <div class="panel panel-primary setup-content" id="step-4"
                            style="background-color:#fff; padding: 40px 20px 30px 30px;">
                            <div class="panel-heading">
                                <img src="img/download.svg" onclick="backWord2();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>
                                <p class="pt-3" style="font-size: 18px;">Pyx customers expect experienced photographers
                                    to capture their
                                    most beautiful<br>moments. Share your experience as a photographer with us so that
                                    we can match<br>you
                                    better </p>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Would you categorize yourself as an amateur or
                                        professional
                                        photographer?</label><br>
                                    <input type="radio"
                                        style="height: 25px;width: 8%; position: relative; top:5px; outline:0!important;"
                                        value="Amateur" name="professional" required>
                                    <label for="Yes" style="font-size:18px;">Amateur</label>
                                    <input type="radio" name="professional"
                                        style="height: 25px;width: 8%; position: relative; top:5px;"
                                        value="Professional">
                                    <label for="No" style="font-size:18px;">Professional</label><br>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">How many years of Photography experience do you have?
                                    </label>
                                    <input maxlength="2" type="text" class="form-control" name="exp" placeholder="Years"
                                        onkeypress="return isNumberKey(event)" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Have you done paid photography before? </label><br>
                                    <input type="radio" style="height: 25px;width: 8%; position: relative; top:5px;"
                                        value="Yes" name="paid" required>
                                    <label for="Yes" style="font-size:18px;">Yes</label>
                                    <input type="radio" name="paid"
                                        style="height: 25px;width: 8%; position: relative; top:5px;" value="No">
                                    <label for="No" style="font-size:18px;">No</label><br>
                                </div>
                                <!-- <div class="form-group ">
                  <label class="control-label">Do you have a studio? </label><br>
                  <input type="radio" name="studio" style="height: 25px;width: 8%; position: relative; top:5px;" value="Yes" required>
                  <label for="Yes" style="font-size:18px;">Yes</label>
                  <input type="radio" name="studio" style="height: 25px;width: 8%; position: relative; top:5px;" value="No">
                  <label for="No" style="font-size:18px;">No</label><br>
                </div>-->
                                <!------  try mode on  ------>
                                <div class="form-group ">
                                    <label class="control-label">Do you have a studio? </label><br>
                                    <input type="radio" name="studio"
                                        style="height: 25px;width: 8%; position: relative; top:5px; outline:0!important;"
                                        id="chkYes" onclick="ShowHideDiv()" value="Yes" required>
                                    <label for="Yes" style="font-size:18px;">Yes</label>
                                    <input type="radio" name="studio"
                                        style="height: 25px;width: 8%; position: relative; top:5px;" id="chkNo"
                                        onclick="ShowHideDiv()" value="No">
                                    <label for="No" style="font-size:18px;">No</label><br>
                                    <div id="dvtext" style="display: none">
                                        <div class="form-group">
                                            <label class="control-label">Please share your studio address</label> <br>
                                            <textarea class="form-control" style="height: 50px" id="txtBox"
                                                name="studioaddress"></textarea>
                                            <sapn id="errorstudioaddrss"></sapn>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Which city is your studio located in?</label>
                                            <br>
                                            <input class="form-control" type="text" style="height: 50px" id="studiocity"
                                                name="studiocity">
                                            <sapn id="errorstudiocity"></sapn>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Please enter the pincode for your studio
                                                location</label> <br>
                                            <input class="form-control" type="text" maxlength="6"
                                                onkeypress="return isNumberKey(event)" style="height: 50px"
                                                id="studiopincode" name="studiopincode"
                                                onfocusout="chkstdpin(this.value)">
                                            <span id="errorpin"></span>
                                        </div>
                                        <script>
                                        var error8 = document.getElementById("errorpin");

                                        function chkstdpin(studiopincode) {
                                            var pattern = /[0-9]/;
                                            if (pattern.test(studiopincode)) {
                                                error8.innerHTML = "";
                                            } else {
                                                error8.innerHTML = "Please enter a valid 6 digit valid  pincode";
                                                error8.style.color = "red";
                                            }
                                        }
                                        </script>
                                    </div>
                                </div>
                                <!------ try mode off----->
                                <script>
                                function ShowHideDiv() {
                                    var chkYes = document.getElementById("chkYes");
                                    var dvtext = document.getElementById("dvtext");

                                    dvtext.style.display = chkYes.checked ? "block" : "none";

                                    dvtext.style.paddingTop = "20px";

                                }
                                </script>
                                <div class="form-group">
                                    <label class="control-label">Please describe your experience as a photographer.
                                    </label>
                                    <textarea class="form-control" style="height: 100px" name='expdesc'id="expdesc"
                                        required></textarea>
                                    <span id="expdesc-alert"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Please share the number of hours you'd like to shoot
                                        each week with Pyx</label>
                                    <input maxlength="2" type="text" class="form-control"
                                        placeholder="Numbers of hours/ week" id="number-of-hours" name="workhour"
                                        onkeypress="return isNumberKey(event)" required>
                                </div>
                                <button class="b-btn mt-3 nextBtn pull-right" type="button">Continue</button>
                            </div>
                        </div>
                        <div class="panel panel-primary setup-content" id="step-5">
                            <div class="panel-heading d-grid justify-content-center" style="display:grid!important">
                                <img src="img/download.svg" onclick="backWord3();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title pb-4">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container m-auto  specialist-size">

                                    <div class="heading">
                                        <div class="container pb-2 pt-2">
                                            <h3>Specialist</h3>
                                            <p>Please select the shoot types you have experience with. Do note that
                                                you'll need to provide examples for each chosen shoot type.</p>
                                        </div>
                                    </div>

                                    <div class="events my-custom-scrollbar" id="categorydiv">
                                        <!-- <p>Most Popular</p>--->
                                        <?php
                                            $sql = "select * from category where for_page='joinus'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                        
                                           <div class="row justify-content-between pt-2 pb-2 border-bottom"
                                                                    style="align-items: center;">
                                                                    <div class="col-md-3 image">
                                                                        <a href="#">
                                                                            <img src="dashboard/images/<?php echo $row['category_image']; ?>"
                                                                                class=" img-fluid">
                                                                            <span><?php echo $row['category_name']; ?></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <label class="round">
                                                                            <input type="checkbox" name="category[]"
                                                                                value="<?php echo $row['category_name']; ?>">
                                                                            <span class="checkmark"
                                                                                id="span<?php echo $row['category_id']; ?>"></span>
                                                                        </label>
                                                                    </div>
                                        </div>
                                            <?php
                                            }
                                            ?>

                                    </div>
                                    <div class="d-flex justify-content-center" style="background-color: #fff;">
                                        <button type='button' class="b-btn text-center" style="margin: 12px 0px 13px 0px;" name="submitstep11" onclick="category()">Continue</button>
                                        <button class="b-btn mt-3 nextBtn"style="margin: 12px 0px 13px 0px; display:none" type="button" id="catclick" onclick="">Continue</button>
                                    </div>

                                </div>
                                <!-- <button class="btn btn-primary nextBtn pull-right" type="button">Continue</button> -->
                            </div>
                        </div>
                        <script>
                        var allselectCat = "";

                        function category() {
                            var FDIV = document.getElementById("allSelectcat");
                            FDIV.innerHTML = "";
                            // var Heding = document.createElement("p");
                            //Heding.innerHTML = "Most Popular";
                            // FDIV.appendChild(Heding);
                            var allchildren = document.getElementById("categorydiv").children;
                            var isanyone = false;


                            for (var i = 0; i < allchildren.length; i++) {

                                if (allchildren[i].children[1].children[0].children[0].checked) {
                                    isanyone = true;
                                    //console.log(allchildren[i].children[1].children[0].children[0].value);
                                    var catname = allchildren[i].children[1].children[0].children[0].value;
                                    var MainDIv = document.createElement("div");
                                    MainDIv.className = "row port justify-content-between pt-2 pb-2 border-bottom";
                                    MainDIv.style = "align-items: center;";
                                    /** */
                                    var Imgdiv = document.createElement("div");
                                    Imgdiv.className = "col-md-3 image";
                                    MainDIv.appendChild(Imgdiv);
                                    var atag = document.createElement("a");
                                    atag.href = "#";
                                    Imgdiv.appendChild(atag);
                                    var image = document.createElement("img");
                                    image.className = "img-fluid";
                                    image.src = allchildren[i].children[0].children[0].children[0].src;
                                    atag.appendChild(image);
                                    var imgspan = document.createElement("span");
                                    imgspan.innerHTML = allchildren[i].children[0].children[0].children[1].innerHTML;
                                    atag.appendChild(imgspan);
                                    /*----------------------------------*/

                                    var fDi = document.createElement("div");
                                    fDi.className = "col-md-6";
                                    var ful = document.createElement("ul");
                                    ful.style = "display: -webkit-inline-flex;font-size: 13px;";
                                    var fli = document.createElement("li");
                                    fli.style = "color: #eb95a4;";
                                    fli.innerHTML =
                                        '<form  method="post" enctype="multipart/form-data"><input type="file" name="files[]" id="files' +
                                        i + '" onchange="multiplefile(' + i +
                                        ')" class="inputfile" multiple/> <label for="file">Choose a file</label><input type="hidden" name="catnamem" id="catnamem' +
                                        i + '" value="' + catname + '"></form>';
                                    ful.appendChild(fli);

                                    // ful.innerHTML += '<li class="upload-button"><button> <i class="fa fa-arrow-right" aria-hidden="true"></i></button></li>';

                                    /*ful.innerHTML += '<li style="color: #eb95a4;"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></li><li class="upload-button"><button> <i class="fa fa-arrow-right" aria-hidden="true"></i></button></li>';*/
                                    fDi.appendChild(ful);
                                    MainDIv.appendChild(fDi);
                                    FDIV.appendChild(MainDIv);
                                }
                            }
                            if (isanyone) {
                                $("#catclick").click();

                            } else {
                                alert("Select at-least one category");
                                return;
                            }

                        }
                        </script>
                        <script>
                        function multiplefile(id) {
                            // var array=[];
                            console.log(id);
                            var form_data = new FormData();

                            var totalfiles = document.getElementById("files" + id).files.length;

                            for (var index = 0; index < totalfiles; index++) {
                                form_data.append("files[]", document.getElementById("files" + id).files[index]);

                            }
                           
                            var value1 = document.getElementById("catnamem" + id).value;
                            //console.log(value1);
                            if (totalfiles < 4) {
                                alert("Please upload at least 4 photos for each shoot type");
                            }
                            if (totalfiles > 6) {
                                alert("please select maximum 6 files");
                            }
                            if (totalfiles >= 4 && totalfiles <= 6) {
                              //   console.log(form_data);
                                $.ajax({
                                    url: 'upload.php',
                                    type: 'post',
                                    data: form_data,
                                    dataType: 'json',
                                    contentType: false,
                                    processData: false,
                                    success: function(response) {
                                         console.log("multiplefile");
                                        console.log(response.length);
                                         console.log(response);
                                        $("#mid").append(response + " ");
                                        $("#miid").val(response);

                                        var id1 = document.getElementById("miid").value;
                                        console.log(id1);
                                        console.log(value1);
                                        $.ajax({
                                            url: 'save.php',
                                            type: 'post',
                                            data: {
                                                id: id1,
                                                val: value1
                                            },
                                            dataType: 'json',
                                            success: function(response) {
                                                console.log(response);

                                            },
                                            error: function(response) {
                                                console.log("error2");
                                            }
                                        });

                                    },
                                    error: function(response) {
                                        console.log("error come One");
                                    }
                                });
                            }



                        }
                        </script>
                        <div class="panel panel-primary setup-content" id="step-6" style="box-sizing:none">
                            <div class="panel-heading d-grid justify-content-center">
                                <img src="img/download.svg" onclick="backWord4();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container m-auto" style="padding: 0px;">


                                    <div class="heading pb-3">
                                        <div class="container  pt-3 pb-3">
                                            <h5>Equipment: Camera Bodies</h5>
                                        </div>
                                        <input type="text" class="form-control" id="camera_body"
                                            style="width: 95%;margin: 11px;">
                                    </div>

                                    <div class="my-custom-scrollbar" id="list"
                                        style="padding:0px 40px 0px 20px;background-color: #fff;">
                                        <?php
                                            $sql = "select * from camera_bodies";
                                            $re2 = mysqli_query($conn, $sql);
                                            while ($row2 = mysqli_fetch_assoc($re2)) {
                                              if (strtoupper($row2['camera_body']) == "OTHER") {
                                            ?>
                                        <div class="row justify-content-between pt-2 pb-2 border-bottom" id="body_re"
                                            style="align-items: center;">
                                            <div class="col pt-1 pb-1">
                                                <p><?php echo $row2['camera_body']; ?></p>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="round">
                                                    <input type="checkbox" name='cbody[]'
                                                        onchange="othertextboxhideshow('camerabother',this)"
                                                        value="<?php echo $row2['camera_body']; ?>">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="Text" style="display:none" name='cbodyother' id='camerabother'
                                                placeholder="Enter Your Camera Bodies">
                                        </div>
                                        <?php    } else { ?>
                                        <div class="row justify-content-between pt-2 pb-2 border-bottom" id="body_re"
                                            style="align-items: center;">
                                            <div class="col pt-1 pb-1">
                                                <p><?php echo $row2['camera_body']; ?></p>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="round">
                                                    <input type="checkbox" name='cbody[]'
                                                        value="<?php echo $row2['camera_body']; ?>">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>
                                        <?php
                      }
                    }
                    ?>

                                    </div>
                                    <div class="d-flex justify-content-center" style="background-color: #fff;">
                                        
                                        <button class="b-btn mt-3  pull-right" style="margin: 12px 0px 13px 0px"; id="idofcamerabtn" type="button" onclick="camerabtn()">Continue</button>
                                        <button class="b-btn mt-3 nextBtn" style="margin: 12px 0px 13px 0px; display:none" type="button" id="catclick2" onclick="">Continue</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                            <script>
    
                        function camerabtn() {
                            var allchildren = document.getElementById("list").children;
                            var isanyone = false;
                            for (var i = 0; i < allchildren.length; i++) {

                                if (allchildren[i].children[1].children[0].children[0].checked) {
                                   isanyone = true;
                                }
                            }
                            if (isanyone) {
                                $("#catclick2").click();

                            } else {
                                alert("Select at-least one category");
                                return;
                            }

                        }
                        </script>
                        <div class="panel panel-primary setup-content" id="step-7">
                            <div class="panel-heading d-grid justify-content-center">
                                <img src="img/download.svg" onclick="backWord5();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container m-auto" style="padding: 0px;">

                                    <div class="heading pb-3">
                                        <div class="container  pt-3 pb-3">
                                            <h5>Equipment: Lenses</h5>
                                        </div>
                                        <input type="text" class="form-control" id="camera_lens">
                                    </div>

                                    <div class="my-custom-scrollbar" id="lens_list"
                                        style="padding:0px 41px 0px 20px;background-color: #fff;">
                                        <?php
                                             $sql = "select * from camera_lense";
                                                $re3 = mysqli_query($conn, $sql);
                                                while ($row3 = mysqli_fetch_assoc($re3)) 
                                                {
                                                if (strtoupper($row3['c_lense']) == "OTHER")
                                                {
                                                ?>

                                        <div class="row justify-content-between pt-2 pb-2 border-bottom" id="lens"
                                            style="align-items: center;">
                                            <div class="col  pt-1 pb-1">
                                                <p><?php echo $row3['c_lense']; ?></p>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="round">
                                                    <input type="checkbox" name="lense[]"
                                                        value="<?php echo $row3['c_lense']; ?>"
                                                        onchange="othertextboxhideshow('cameralother',this)">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="Text" style="display:none" name='clenseother' id='cameralother'
                                                placeholder="Enter Your Camera Lense">
                                        </div>
                                        <?php } else{ ?>


                                        <div class="row justify-content-between pt-2 pb-2 border-bottom" id="lens"
                                            style="align-items: center;">
                                            <div class="col  pt-1 pb-1">
                                                <p><?php echo $row3['c_lense']; ?></p>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="round">
                                                    <input type="checkbox" name="lense[]"
                                                        value="<?php echo $row3['c_lense']; ?>">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <?php
                    }}
                    ?>

                                    </div>
                                    <div class="d-flex justify-content-center" style="background-color: #fff;">
                                        <button class="b-btn mt-3 " style="margin: 12px 0px 13px 0px;" type="button" onclick="lense()">Continue</button>
                                        <button class="b-btn mt-3 nextBtn" style="margin: 12px 0px 13px 0px; display:none" type="button" id="catclick3" onclick="">Continue</button>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary nextBtn pull-right" type="button">Continue</button> -->
                            </div>
                        </div>
                            
                        <script>
    
                        function lense() {
                            var allchildren = document.getElementById("lens_list").children;
                            var isanyone = false;
                            for (var i = 0; i < allchildren.length; i++) {

                                if (allchildren[i].children[1].children[0].children[0].checked) {
                                   isanyone = true;
                                }
                            }
                            if (isanyone) {
                                $("#catclick3").click();

                            } else {
                                alert("Select at-least one category");
                                return;
                            }

                        }
                        </script>
                        <div class="panel panel-primary setup-content" id="step-8" style="width:50%!important;">
                            <div class="panel-heading d-grid justify-content-center">
                                <img src="img/download.svg" onclick="backWord6();"
                                    style="position: relative; top:12px;cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container m-auto specialist-size" style="padding: 0px;">

                                    <div class="heading">
                                        <div class="container  pt-3 pb-3">
                                            <h5>Equipment: Accessories</h5>
                                        </div>
                                        <input type="text" class="form-control mb-3" id="camera_accessory">
                                    </div>
                                    <div class="my-custom-scrollbar"
                                        style="padding:0px 21px 0px 20px;background-color: #fff;" id="accessory_list">

                                        <?php
                    $sql = "select * from accessories";
                    $re4 = mysqli_query($conn, $sql);
                    while ($row5 = mysqli_fetch_assoc($re4)) {
                      if ($row5['is_desc'] == 'Yes') { ?>
                                        <div class="row justify-content-between pt-2 pb-2 border-bottom"
                                            style="align-items: center;" id="body_accessory">
                                            <div class="col-md-6 pt-1 pb-1">
                                                <p><?php echo $row5['accessory']; ?></p>
                                            </div>
                                            <div class="col-md-1 justify-content-between" style="margin-right:14px;">
                                                
                                                <label class="round">

                                                    <input type="checkbox" name="accessory[]"
                                                        value="<?php echo $row5['accessory']; ?>">



                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>


                                        </div>


                                        <?php } else { 
                      
                      
                        if (str_replace(' ', '',strtoupper($row5['accessory']))== "OTHER")
                         {
                       ?>
                                        <div class="row justify-content-between pt-2 pb-2 border-bottom border-top"
                                            style="align-items: center;" id="body_accessory1">
                                            <div class="col-md-6 pt-1 pb-1">
                                                <p><?php echo $row5['accessory']; ?></p>
                                            </div>
                                            <div class="col-md-1" style="margin-right: 16px;">
                                                <label class="round">
                                                    <input type="checkbox" name="accessory[]"
                                                        value="<?php echo $row5['accessory']; ?>"
                                                        onchange="othertextboxhideshow('cameraaother',this)">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <input type="Text" style="display:none" name='caother' id='cameraaother'
                                                placeholder="Enter Your Camera accessory">
                                        </div>
                                        <?php 
                       } else{?>
                                        <div class="row justify-content-between pt-2 pb-2 border-bottom border-top"
                                            style="align-items: center;" id="body_accessory1">
                                            <div class="col-md-6 pt-1 pb-1">
                                                <p><?php echo $row5['accessory']; ?></p>
                                            </div>
                                            <div class="col-md-1" style="margin-right: 16px;">
                                                <label class="round">
                                                    <input type="checkbox" name="accessory[]"
                                                        value="<?php echo $row5['accessory']; ?>">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <?php  } ?>
                                        <?php }
                    }
                    ?>


                                    </div>

                                    <div class="d-flex justify-content-center" style="background-color: #fff;">
                                        <button class="b-btn mt-3 " style="margin: 12px 0px 13px 0px;" type="button" onclick="accessory_list()">Continue</button>
                                        <button class="b-btn mt-3 nextBtn" style="margin: 12px 0px 13px 0px; display:none" type="button" id="catclick4" onclick="">Continue</button>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary nextBtn pull-right" type="button">Continue</button> -->
                            </div>
                        </div>
                        
                         <script>
    
                        function accessory_list() {
                            var allchildren = document.getElementById("accessory_list").children;
                            var isanyone = false;
                            for (var i = 0; i < allchildren.length; i++) {

                                if (allchildren[i].children[1].children[0].children[0].checked) {
                                   isanyone = true;
                                }
                            }
                            if (isanyone) {
                                $("#catclick4").click();

                            } else {
                                alert("Please select all the photo accessories you have");
                                return;
                            }

                        }
                        </script>
                        <div class="panel panel-primary setup-content" id="step-9">
                            <div class="panel-heading d-grid justify-content-center">
                                <img src="img/download.svg" onclick="backWord7();"
                                    style="position: relative; top:12px; cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:31px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container" style="background-color: #fff;">
                                    <div class="heading">
                                        <div class="container  pt-3 pb-3">
                                            <h5>Transportation</h5>
                                            <p>What is your primary mode of transport ?</p>
                                        </div>
                                    </div>
                                    <div>

                                        <div class="multiselect w-100">
                                            <div class="selectBox" onclick="showCheckboxes()">
                                                <select class="pt-1 pb-1 form-control">
                                                    <option>Select an option</option>
                                                </select>
                                                <div class="overSelect"></div>
                                            </div>
                                            <div id="checkboxes">
                                                <label for="one" class="form-control">
                                                    <input type="checkbox" id="one" name="toption[]"
                                                        style="margin-right: 15px;" value="Car" />Car</label>
                                                <label for="two" class="form-control">
                                                    <input type="checkbox" id="two" name="toption[]"
                                                        style="margin-right: 15px;"
                                                        value="Motorcycle" />Motorcycle</label>
                                                <label for="three" class="form-control">
                                                    <input type="checkbox" id="three" name="toption[]"
                                                        style="margin-right: 15px;" value="BiCycle" />Bicycle</label>
                                                <label for="four" class="form-control">
                                                    <input type="checkbox" id="four" name="toption[]"
                                                        style="margin-right: 15px;"
                                                        value="RideShare" />Rideshare</label>
                                                <label for="five" class="form-control">
                                                    <input type="checkbox" id="five" name="toption[]"
                                                        style="margin-right: 15px;" value="Public Transport" />Public
                                                    Transport</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center" style="background-color: #fff;">
                                            <button class="b-btn mt-3  nextBtn" style="margin: 12px 0px 13px 0px;" type="button" >Continue</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary nextBtn pull-right" type="button">Continue</button> -->
                            </div>
                        </div>
                        
                        <div class="panel panel-primary setup-content" id="step-10" style="width:100%">
                            <div class="panel-heading d-grid justify-content-center" style="display:grid!important">
                                <img src="img/download.svg" onclick="backWord8();"
                                    style="position: relative; top:12px; cursor: pointer;">
                                <div class="progress mb-4" style="height: 4px;margin-left:60px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h3 class="panel-title pb-4">Join the Pyx family...we're excited you're here</h3>

                            </div>
                            <div class="panel-body">
                                <div class="container m-auto  specialist-size" style="width: 50%!important">

                                    <div class="heading">
                                        <div class="container px-0 pb-2 pt-2">
                                            <h3>Photo upload</h3>
                                            <p>Please upload 4 photos per each shoot type</p>
                                        </div>
                                    </div>

                                    <div id="allSelectcat" class="events">
                                    </div>
                                    <div class="d-flex justify-content-center" style="background-color: #fff;">
                                        <button type='button' class="b-btn text-center"
                                            style="margin: 12px 0px 13px 0px;" name="submitstep10"
                                            onclick="tryfun()">Continue</button>
                                        <button class="b-btn nextBtn"
                                            style="margin: 12px 0px 13px 0px;visibility:hidden" type="submit"
                                            id="buttonstep10" name="submit2">Continue</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                        function tryfun() {
                            var allcatview = document.getElementById("allSelectcat").getElementsByClassName(
                            "inputfile");

                            var isclicknextbtn = true;
                            for (var i = 0; i < allcatview.length; i++) {
                                console.log(i);
                                var currentlen = allcatview[i].files.length;
                                console.log(currentlen);
                                if (currentlen < 4 || currentlen > 6) {
                                    isclicknextbtn = false;
                                    alert("Please upload 4-6 photos for each shoot type")
                                    break;
                                }
                            }
                            console.log(isclicknextbtn);
                            if (isclicknextbtn) {
                                //var mmid=$("#mid").html();
                                //console.log(mmid);
                                $("#buttonstep10").click();
                            }

                        }
                        </script>
                        <script>
                        $(function() {
                            $("#frmsendemail").on("submit", function(e) {
                                e.preventDefault();
                              
                                $.ajax({
                                    url: $(this).attr("action"),
                                    type: 'POST',
                                    // data: $(this).serialize(),
                                    data:new FormData(this),
                                    contentType: false,
                                     cache: false,
                                     processData:false,
                                    beforeSend: function() {
                                        // alert("sending");
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        // alert(data);
                                    }
                                });
                            });
                        });
                        </script>
                        <div class="panel panel-primary setup-content" id="step-11">
                            <div class="panel-heading d-grid justify-content-center">
                                <!--<img src="images/download.svg" onclick="backWord9();" style="position: relative; top:12px; cursor: pointer;">-->
                                <div class="progress mb-4" style="height: 4px;margin-left:60px;width: 86%;">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--<h3 class="panel-title">Join the Pyx family...we're excited you're here</h3> -->

                                <div class="bg-white">

                                    <div class="text-center pg-submit pt-3">
                                        <!-- <a href="join_us.php">Apply to Join</a> -->
                                        <h5><strong>Thank You!</strong></h5>
                                        <p style="">Thanks for applying to be a Pyx photographer. We will carefully
                                            assess your application and revert back soon. All the best!</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center" style="background-color: #fff;">
                                    <!-- <button class="b-btn mt-3 nextBtn" style="margin: 12px 0px 13px 0px;" type="submit">Continue</button>-->
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <!----footer---->
    <?php include('footer.php'); ?>



    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
    
    <script>
    function othertextboxhideshow(idofother, itemcheck) {
        var item = document.getElementById(idofother);
        if (itemcheck.checked) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }

    }
    $(document).ready(function() {
        $('.multi_select').selectpicker();
    });
    </script>
    <script>
    document.getElementById("joinus").onclick = function() {
        var r = confirm("Clicking OK will terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("faqlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("aboutuslink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("contactuslink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("termlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("privacylink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("footerlogo").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("bookshoot").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("headerlogo").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("twitterlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("instalink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("facebooklink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    </script>
    <script>
    function ShowHideDiv() {
        var chkYes = document.getElementById("chkYes");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "block" : "none";
        dvtext.style.paddingTop = "20px";
    }

    function ShowDiv() {
        var cameraYes = document.getElementById("cameraYes");
        var cameratext = document.getElementById("cameratext");
        cameratext.style.display = cameraYes.checked ? "block" : "none";
        cameratext.style.paddingTop = "10px";
    }

    function ShowlensDiv() {
        var lensYes = document.getElementById("lensYes");
        var lenstext = document.getElementById("lenstext");
        lenstext.style.display = lensYes.checked ? "block" : "none";
        lenstext.style.paddingTop = "10px";
    }

    function ShowaccessDiv() {
        var accessYes = document.getElementById("accessYes");
        var accesstext = document.getElementById("accesstext");
        accesstext.style.display = accessYes.checked ? "block" : "none";
        accesstext.style.paddingTop = "10px";
    }
    </script>

    <script>
    $(document).ready(function() {
        $("#camera_body").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#list #body_re").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#camera_lens").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#lens_list #lens").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#camera_accessory").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#accessory_list #body_accessory").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            $("#accessory_list #body_accessory1").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>

    <script>
    function nextStep() {
        var submit = $('#submit').val();
        if (submit == "") {
            return false;
        }
    };
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function(e) {
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

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next()
                .children("a"),
                curInputs = curStep.find(
                    "input[type='email'],input[type='text'],input[type='radio'],input[type='tel'],input[type='file'],input[type='url']"
                    ),
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

    <script>
    function forWard() {
        document.getElementById("step-2").style.display = "block";
        document.getElementById("step-1").style.display = "none";
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
        document.getElementById("step-6").style.display = "block";
        document.getElementById("step-7").style.display = "none";
    }

    function backWord6() {
        document.getElementById("step-7").style.display = "block";
        document.getElementById("step-8").style.display = "none";
    }

    function backWord7() {
        document.getElementById("step-8").style.display = "block";
        document.getElementById("step-9").style.display = "none";
    }

    function backWord8() {
        document.getElementById("step-9").style.display = "block";
        document.getElementById("step-10").style.display = "none";
    }

    function backWord9() {
        document.getElementById("step-10").style.display = "block";
        document.getElementById("step-11").style.display = "none";
    }
    </script>
    <script>
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }

    function fetch_mail() {
        var email = $('#email').val();
        if (email == "") {
            error.textContent = "Please enter a valid email address";
            error.style.color = "red";
            $("#email").focus();
        } else {
                       
            
            
            
           
                           error.textContent = ""; 
                             $('#step-1').hide();
                             $('#step-2').show();
                             document.getElementById("email1").value = email;
        }
    }
    </script>
    <script>
    //validations start
    $(document).on("focus", "#formFile", function(event) {
        //alert("yes");
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var phoneno = $("#phoneno").val();
        var homeaddress = $("#homeaddress").val();
        var city = $("#city").val();
        var pincode = $("#pincode").val();
        if (fname == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
            if (lname == "") {
                $(this).blur();
                $("#lname").focus();
                document.getElementById("error4").innerHTML = "Please enter your last name";
                document.getElementById("error4").style.color = "red";
            } else {
                document.getElementById("error4").innerHTML = "";
                if (phoneno == "") {
                    $(this).blur();
                    $("#phoneno").focus();
                    document.getElementById("error5").innerHTML = "Please enter your Phone No";
                    document.getElementById("error5").style.color = "red";
                } else {
                    document.getElementById("error5").innerHTML = "";
                    if (homeaddress == "") {
                        $(this).blur();
                        $("#homeaddress").focus();
                        document.getElementById("error6").innerHTML = "Please enter your Address";
                        document.getElementById("error6").style.color = "red";
                    } else {
                        document.getElementById("error6").innerHTML = "";
                        if (city == "") {
                            $(this).blur();
                            $("#city").focus();
                            document.getElementById("error7").innerHTML = "Please enter your City";
                            document.getElementById("error7").style.color = "red";
                        } else {
                            document.getElementById("error7").innerHTML = "";
                            if (pincode == "") {
                                $(this).blur();
                                $("#pincode").focus();
                                document.getElementById("error8").innerHTML = "Please enter your Pincode";
                                document.getElementById("error8").style.color = "red";
                            } else {
                                document.getElementById("error8").innerHTML = "";
                            }
                        }
                    }

                }
            }

        }


    });
    $(document).on("focus", "#homeaddress", function(event) {
        //alert("yes");
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var phoneno = $("#phoneno").val();
        if (fname == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
            if (lname == "") {
                $(this).blur();
                $("#lname").focus();
                document.getElementById("error4").innerHTML = "Please enter your last name";
                document.getElementById("error4").style.color = "red";
            } else {
                document.getElementById("error4").innerHTML = "";
                if (phoneno == "") {
                    $(this).blur();
                    $("#phoneno").focus();
                    document.getElementById("error5").innerHTML = "Please enter your Phone No";
                    document.getElementById("error5").style.color = "red";
                } else {
                    document.getElementById("error5").innerHTML = "";

                }
            }

        }


    });
    $(document).on("focus", "#phoneno", function(event) {
        //alert("yes");
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        if (fname == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
            if (lname == "") {
                $(this).blur();
                $("#lname").focus();
                document.getElementById("error4").innerHTML = "Please enter your last name";
                document.getElementById("error4").style.color = "red";
            } else {
                document.getElementById("error4").innerHTML = "";
            }
        }

    });
    
    $(document).on("focus", "#city", function(event) {
        //alert("yes");
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var phoneno = $("#phoneno").val();
        var home = $("#homeaddress").val();
        if (fname == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
            if (lname == "") {
                $(this).blur();
                $("#lname").focus();
                document.getElementById("error4").innerHTML = "Please enter your last name";
                document.getElementById("error4").style.color = "red";
            } else {
                document.getElementById("error4").innerHTML = "";
                if (phoneno == "") {
                    $(this).blur();
                    $("#phoneno").focus();
                    document.getElementById("error5").innerHTML = "Please enter your Phone No";
                    document.getElementById("error5").style.color = "red";
                } else {
                    document.getElementById("error5").innerHTML = "";
                    if (home == "") {
                        $(this).blur();
                        $("#homeaddress").focus();
                        document.getElementById("error6").innerHTML = "Please enter your Home Address";
                        document.getElementById("error6").style.color = "red";
                    } else {
                        document.getElementById("error6").innerHTML = "";

                    }
                }
            }
        }

    });

    $(document).on("focus", "#pincode", function(event) {
        //alert("yes");
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var phoneno = $("#phoneno").val();
        var home = $("#homeaddress").val();
        var city = $("#city").val();
        if (fname == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
            if (lname == "") {
                $(this).blur();
                $("#lname").focus();
                document.getElementById("error4").innerHTML = "Please enter your last name";
                document.getElementById("error4").style.color = "red";
            } else {
                document.getElementById("error4").innerHTML = "";
                if (phoneno == "") {
                    $(this).blur();
                    $("#phoneno").focus();
                    document.getElementById("error5").innerHTML = "Please enter your Phone No";
                    document.getElementById("error5").style.color = "red";
                } else {
                    document.getElementById("error5").innerHTML = "";
                    if (home == "") {
                        $(this).blur();
                        $("#homeaddress").focus();
                        document.getElementById("error6").innerHTML = "Please enter your Home Address";
                        document.getElementById("error6").style.color = "red";
                    } else {
                        document.getElementById("error6").innerHTML = "";
                        if (city == "") {
                            $(this).blur();
                            $("#city").focus();
                            document.getElementById("error7").innerHTML = "Please enter your City Name";
                            document.getElementById("error7").style.color = "red";
                        } else {
                            document.getElementById("error7").innerHTML = "";

                        }

                    }
                }
            }
        }

    });

    $(document).on("focus", "#number-of-hours", function(event) {
        //alert("yes");
        var expdesc = $("#expdesc").val();
        var number_of_hours = $("#number-of-hours").val();
        if (expdesc == "") {
            $(this).blur();
            $("#expdesc").focus();
            document.getElementById("expdesc-alert").innerHTML = "Please describe your experience";
            document.getElementById("expdesc-alert").style.color = "red";
        } else {
            document.getElementById("expdesc-alert").innerHTML = "";
            
        }

    });

    $(document).on("focus", "#studiocity", function(event) {
        //alert("yes");
        var txtBox = $("#txtBox").val();
        var studiocity = $("#studiocity").val();
        if (txtBox == "") {
            $(this).blur();

            $("#txtBox").focus();
            document.getElementById("errorstudioaddress").innerHTML = "Please Enter your studio address";
            document.getElementById("errorstudioaddress").style.color = "red";
        } else {
            document.getElementById("errorstudioaddress").innerHTML = "";
            if (studiocity == "") {
                $(this).blur();
                $("#studiocity").focus();
                document.getElementById("errorstudiocity").innerHTML = "Please enter your studio city name";
                document.getElementById("errorstudiocity").style.color = "red";
            } else {
                document.getElementById("errorstudiocity").innerHTML = "";
            }
        }

    });
    
       $(document).on("focus", "#studiopincode", function(event) {
        //alert("yes");
        var txtBox = $("#txtBox").val();
        var studiocity = $("#studiocity").val();
        var studiopincode = $("#studiopincode").val();
        if (txtBox == "") {
            $(this).blur();

            $("#txtBox").focus();
            document.getElementById("errorstudioaddress").innerHTML = "Please Enter your studio address";
            document.getElementById("errorstudioaddress").style.color = "red";
        } else {
            document.getElementById("errorstudioaddress").innerHTML = "";
            if (studiocity == "") {
                $(this).blur();
                $("#studiocity").focus();
                document.getElementById("errorstudiocity").innerHTML = "Please enter your studio city name";
                document.getElementById("errorstudiocity").style.color = "red";
            } else {
                document.getElementById("errorstudiocity").innerHTML = "";
                if (studiopincode == "") {
                    $(this).blur();
                    $("#studiopincode").focus();
                    document.getElementById("errorpin").innerHTML = "Please enter a valid 6 digit valid pincode";
                    document.getElementById("errorpin").style.color = "red";
                } else {
                    document.getElementById("errorpin").innerHTML = "";
                }
            }
        
        }
    });

    $(document).on("focus", "#your-website", function(event) {
        //alert("yes");
        var website = $("#your-website").val();
        if (website) {
            $(this).blur();
            $("#your-website").focus();
            document.getElementById("your-website-alert").innerHTML = "Please enter your Website";
            document.getElementById("your-website-alert").style.color = "red";
        } else {
            document.getElementById("your-website-alert").innerHTML = "";
        }
    });

    function isNumberKey(evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

   /* function isAlphabateKey(evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode
        //if (charCode > 31 && (charCode < 48 || charCode > 57))
        if (!(charCode >= 65 && charCode <= 120) && (charCode != 32 && charCode != 0))
            return false;

        return true;
    }*/
    </script>
    <script>
    function fileValidation() {

        //alert("yes");
        var fileInput =
            document.getElementById('formFile');

        var filePath = fileInput.value;

        // Allowing file type
        var allowedExtensions =
            /(\.jpg|\.pdf)$/i;

        if (!allowedExtensions.exec(filePath)) {

            alert('Invalid file type');
            fileInput.value = '';
            return false;
        }
       

    }
    </script>
    <script>
    var validate_email = function(email) {
        var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9-])+(?:\.[a-zA-Z])+/;
        var is_email_valid = false;
        if (email.match(pattern) != null) {
            is_email_valid = true;
        }
        return is_email_valid;
    }
    $(document).on("keyup", "#email", function() {
        var input_val = $(this).val();
        var is_success = validate_email(input_val);

        if (!is_success) {
            $("#email").focus();
            $("#step1btn").attr("disabled", true);
            error.textContent = "Please enter a valid email address";
            error.style.color = "red"
        } else {
              //
              var email=$("#email").val();
              //checking for email is already registered or not
              $.ajax({
                    url: "save.php",
                    type: "POST",
                    data: {email:email},
                    dataType: "json",
                    async:false,
                    success: function(data)
                    {
                        console.log(data);
                        if(data=='This email is already registered')
                        {
                            //alert("This email is already registered");
                            $('#email').focus();
                             error.textContent = "This email is already registered with us. Please try with different email";
                             error.style.color = "blue";
                             $("#step1btn").attr("disabled", true);
                        }
                        else
                        {
                              $("#step1btn").attr("disabled", false);
                              error.textContent = "";
                          
                        }
                    },
                    error:function(data)
                    {
                        console.log("error showing");
                    }
                });
            // end 
            
        }
         
        
    });
    /*$(document).on("focus", "#email", function(){
        
        
    }*/
    </script>
    <script>
    document.getElementById("home").onclick = function() {
        var r = confirm("Clicking OK will terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("faqlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("aboutuslink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("contactuslink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("termlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("privacylink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("footerlogo").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("bookshoot").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("headerlogo").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }

    document.getElementById("twitterlink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("instalink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    document.getElementById("facebooklink").onclick = function() {
        var r = confirm("Clicking OK will  terminate your photographer application. Do you wish to continue?");
        if (r == true) {
            window.location.href = 'index.php';
        } else {
            return false;
        }
        //alert("Hello WOrld");
    }
    </script>
    <script>
    $(document).on("focus", "#lname", function(event) {
        //alert("yes");
        if ($("#fname").val() == "") {
            $(this).blur();
            $("#fname").focus();
            document.getElementById("error3").innerHTML = "Please enter your first name";
            document.getElementById("error3").style.color = "red";
        } else {
            document.getElementById("error3").innerHTML = "";
        }
    });
    </script>

</body>

</html>