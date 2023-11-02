<?php
include('dashboard/connection.php');
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    if(isset($_GET['email'])&& isset($_GET['name']))
    {
        $email=$_GET['email'];
        $name=$_GET['name'];
        $fname = explode(" ", $name);
        
         $from = "no-reply@pyx.co.in";
    $to = $email;
    $mainsubject="We have received your support request";
    $message= "<html>
    <head>
    <style>
    
    </style>
    </head>
    <body>
    
    <p>Dear $fname[0],</p>
    <p>This email is to acknowledge receipt of your support ticket. Please be assured that we will be looking into your request at the earliest and revert back with a solution.</p>
    <p style='margin-bottom:10px'>You can also check our <a href=\"https://pyx.co.in/faq.php\">FAQ page</a> for answers to the most frequently asked questions about Pyx.</p>
   
    <p>Sincerely,</p>
    <p>Pyx customer support</p>
    <p><img src='https://pyx.co.in/images/emaillogo.jpeg' style='height: 36px;'></p>
    </body>
    </html>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
   
   // Additional headers
$headers[] = 'To:support'.$email;
$headers[] = 'From: noreply <no-reply@pyx.co.in>';
 if(mail($to,$mainsubject,$message,implode("\r\n", $headers))) {
		echo "<script>
	    
	  window.location.href = 'index.php';
	   
   </script>";
  

    } else {
    	echo "The email message was not sent.";
    } 
    }
?>