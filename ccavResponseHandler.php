<?php include('Crypto.php');
include('dashboard/connection.php');
include('testmail.php');?>
<?php
error_reporting(0);
$workingKey = '8507285DF00384997C2EEE7A89C60443';    //Working Key should be provided here.
$encResponse = $_POST["encResp"];      //This is the response sent by the CCAvenue Server
$rcvdString = decrypt($encResponse, $workingKey);    //Crypto Decryption used as per the specified working key.
$decryptValues = explode('&', $rcvdString);
$dataSize = sizeof($decryptValues);
$order_status = "";
$Tracking_no = "";
$Reference_no = "";
$sqlQuery = "update booking set ";
$orderID = 0;
$amount=0;

//echo $encResponse;
for ($i = 0; $i < $dataSize; $i++) {
  
  $information = explode('=', $decryptValues[$i]);
  //echo $information;
 // echo $dataSize[$i];
  ////echo $decryptValues[$i];
  //die();
 
  if ($information[0] == "order_id") {
       $orderID = $information[1];
  }

  if ($information[0] == "tracking_id") {
    $sqlQuery = $sqlQuery . "tracking_id='$information[1]'";
    $Tracking_no = $information[1];
  }
  if ($information[0] == "bank_ref_no") {
    $sqlQuery = $sqlQuery . ",bank_ref_no='$information[1]'";
    $Reference_no = $information[1];
  }

  if ($information[0] == "order_status") {
    $sqlQuery = $sqlQuery . ",order_status='$information[1]'";
    $order_status = $information[1];
  }
  if ($information[0] == "failure_message") {
    $sqlQuery = $sqlQuery . ",failure_message='$information[1]'";
  }

  if ($information[0] == "payment_mode") {
    $sqlQuery = $sqlQuery . ",payment_mode='$information[1]'";
  }

  if ($information[0] == "card_name") {
    $sqlQuery = $sqlQuery . ",card_name='$information[1]'";
  }
  if ($information[0] == "status_code") {
    $sqlQuery = $sqlQuery . ",status_code='$information[1]'";
  }
  if ($information[0] == "status_message") {
    $sqlQuery = $sqlQuery . ",status_message='$information[1]'";
  }
  if ($information[0] == "currency") {
    $sqlQuery = $sqlQuery . ",currency='$information[1]'";
  }
  
  if ($information[0] == "amount") {
    $sqlQuery = $sqlQuery . ",amount='$information[1]'";
    $amount=$information[1];
  }
   if($information[0]== "billing_email")
   {
       $email=$information[1];
   }
    if($information[0]== "billing_name")
   {
       $name=$information[1];
   }
  
 
}
$sqlQuery = $sqlQuery . " where shoot_id=" .$orderID;
if ($conn->query($sqlQuery) == true) {
    
     $sql="select * from booking where shoot_id='$orderID'";
     $re=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($re);
     $stype=$row['shoot_type'];
     $name=$row['name'];
     $sdate=$row['shoot_date'];
     $stime=$row['shoot_time'];
     $shootneed=$row['shoot_need'];
     $sql2="select * from category where category_id=' $shootneed'";
     $re2=mysqli_query($conn,$sql2);
     $r2=mysqli_fetch_assoc($re2);
     $package=$row['shoot_package'];
     $sql1="select * from package where package_id='$package'";
     
     $ree=mysqli_query($conn,$sql1);
     $roww=mysqli_fetch_assoc($ree);
     $duration=$roww['duration'];
     //echo $duration;
     
    // echo $stype;
     //echo $sdate;
     //die();
    //echo $name;
    //echo $order_status;
      bookingemailsend($order_status,$orderID,$name,$amount,$Tracking_no,$Reference_no,$email,$stype,$sdate,$duration);
      if(($order_status=='Aborted') || ($order_status=='Failure'))
      {
          header("refresh:10;url=http://pyx.co.in/contact_us.php");
      }
      else
      {
         // header("refresh:10;url=http://pyx.co.in/");
      }
       
   }
  
?>
<!DOCTYPE html>
<html lang="en">

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

<?php if($order_status != "Success"){?>
  
  <style>
    .container-main {
      display: flex;
      justify-content: center;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 75px;
      border: 1px solid #fff;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5),
        -2px -2px 10px rgba(0, 0, 0, 0.5);
      border-radius: 5px;
      height: auto;
      width: 650px;
      padding: 10px
    }

    .container h1 {
      margin: 0 0 20px 0;
    }

    .container .fa {
      font-size: 50px;
      text-align: center;
      transition: 0.5s;
    }

    .container .fa:hover {
      color: <?php if ($order_status === "Success"){echo "greenyellow";} else{echo "red";}?>;
    }

    .container .fas,
    .container h4 {
      text-align: center;
      font-size: 25px;
      margin: 0;
    }

    .container .content-box {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 30px 0;
    }

    .container .content-box .row {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 30px;
      width: 300px;
    }

    .container .content-box .row .col {
      flex-basis: 50%;
    }

    .container .content-box .row .col h3 {
      text-align: left;
    }

    .container .content-box label {
      text-align: right;
    }

    .container h2 {
      padding: 5px 75px;
      color: #fff;
      background-color: #111;
      border-radius: 5px;
      letter-spacing: 3px;
      margin: 20px 0 0 0;
      transition: 0.5s;
    }

    .container h2:hover {
      background-color:<?php if ($order_status === "Success"){echo "greenyellow";} else{echo "red";}?>;
    }
  </style>
  <?php } else{?>
   
  <style type="text/css">
    table{
        width: 510px;
    }
    tbody{
        height: 100px;
    }
    a{
        color: #1F168C;
    }
</style>
  <?php }?>
</head>

<body>
  <?php include('header.php');?>
  <?php if ($order_status === "Success"){include('header.php');} ?>
      
      <?php if ($order_status === "Success") 
      {?>
        <section>
    <div class="container">
        <div class="d-flex justify-content-center"><img src="images/star.png"></div>
        <div class="pt-3">
            <h4 class="d-flex justify-content-center">Congratulations <?php echo $name;?>, your booking of a <?php echo $r2['category_name'];?> shoot on <?php echo $sdate; ?> at<br> <?php echo $stime;?> has been sucessfully made.</h4>
            <p class="d-flex justify-content-center">Please find your booking details below( and be sure to reference them in <br> any correspondence with Pyx):</p>
        </div>
        <div class="d-flex justify-content-center">
            <table>
                   <tr>
                        <td>Order number : </td>
                        <td><?php echo  $orderID; ?></td>
                   </tr>
                   <tr>
                        <td>Tracking number : </td>
                        <td><?php echo $Tracking_no; ?></td>
                   </tr>
                   <tr>
                        <td>Reference number : </td>
                        <td><?php echo $Reference_no; ?></td>
                   </tr>
            </table>
        </div>
       
            <p class="justify-content-center" >If you have any questions/ updates about your booking, please contact us &nbsp;<a href='https://pyx.co.in/contact_us.php'>here</a>&nbsp; and be sure to include your order number above.</p><p class="d-flex justify-content-center"> You can also refer to our&nbsp;<a href='https://pyx.co.in/faq.php'>FAQ page</a>&nbsp;for the most commonly asked questions.</p>
            <p class="justify-content-center"> Please look for an email from us shortly confirming your photographer details. Thanks and happy shooting! </p>
       
    </div>
</section>
<?php 
      }
      else
      {?>
          <div class="container-main">
    <div class="container">
         <?php  if ($order_status === "Aborted") {
        echo '<i class="fa fa-times"></i><h1>Payment Aborted</h1>';
      }
      if ($order_status === "Failure") {
        echo '<i class="fa fa-times"></i><h1>Payment Failure</h1>';
      }
      ?>
      <span><i class="fas fa-rupee-sign"></i></span>
     
      <h4><?php echo $amount?></h4>
      <div class="content-box">
        <div class="row">
          <div class="col">
            <h3 style="font-size:19px">Order no:</h3>
          </div>
          <div class="col"><?php echo  $orderID; ?></div>
        </div>
        <div class="row">
          <div class="col">
            <h3 style="font-size:19px">Tracking no:</h3>
          </div>
          <div class="col"><?php echo $Tracking_no; ?></div>
        </div>
        <div class="row">
          <div class="col">
            <h3 style="font-size:19px">Reference no.:</h3>
          </div>
          <div class="col"><?php echo $Reference_no; ?></div>
        </div>
      </div>
      <h2>Thanks!</h2>
      </div>
  </div>
  <br>
    <?php } ?>  
    <?php if ($order_status === "Success"){include('footer.php');} ?>
    <?php include('footer.php');?>
</body>
</html>