<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
$mail = new PHPMailer(true);                              
try {
    $Name =$_REQUEST['fname']." ".$_REQUEST['lname'];
    $Email =$_REQUEST['email'];
    $Moblie =$_REQUEST['mobile'];
    $Project_interest =$_REQUEST['project'];
    $Messages =$_REQUEST['message'];

    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = 'smtpout.asia.secureserver.net'; // SMTP host as gmail 
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = 'blogscric@gmail.com';  // sender gmail host              
    $mail->Password = 'Cricblogs@0011'; // sender gmail host password                          
    $mail->SMTPSecure = 'tls';  // for encrypted connection                           
    $mail->Port =80;   // port for SMTP     

    $mail->setFrom('admin@storexcell.com', "Sender"); // sender's email and name
    $mail->addAddress('admin@storexcell.com', "Receiver");  // receiver's email and name
    $mail->addAddress('shentou.traders@gmail.com', "Receiver");  // receiver's email and name
    $mail->addAddress('gkg_sds@yahoo.co.in', "Receiver");  // receiver's email and name
    $mail->addAddress('gauravhtc@gmail.com', "Receiver");  // receiver's email and name

 
    $mail->isHTML(true);
    $mail->Subject = "New  Quote Request From ".$Name;
    $mail->Body = "<!DOCTYPE html>
    <html>
    <head>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
      text-align: left;    
    }
    </style>
    </head>
    <body>
    
    <h2>Quote Request From Web</h2>
    <p></p>
    
    <table style='width:100%'>
     <tbody>
    <tr style='width:100%;border: 1px solid black'>
    <td colspan='2'>Request received from website</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>&nbsp;Name</td>
    <td style='width: 273.7px; height: 27px;'>$Name</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>E-mail</td>
    <td style='width: 273.7px; height: 27px;'>$Email</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>Moblie Number</td>
    <td style='width: 273.7px; height: 27px;'>$Moblie</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>Project Interest</td>
    <td style='width: 273.7px; height: 27px;'>$Project_interest</td>
    </tr>
    <tr style='height: 27.3px;'>
    <td style='width: 133.3px; height: 27.3px;'>Message</td>
    <td style='width: 273.7px; height: 27.3px;'>$Messages</td>
    </tr>
    </tbody>
    </table>
    </body>
    </html>";
    $mail->AltBody = "This is the plain text version of the email content";
    if(strlen($Name)>2&&strlen($Email)>3&&strlen($Moblie)>9&&strlen($Messages)>3)
    $mail->send();
    echo 'Message has been sent';
   
	echo'<script> window.location="thank.php"; </script> ';
} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>