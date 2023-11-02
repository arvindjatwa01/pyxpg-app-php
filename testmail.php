<?php
  
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   function bookingemailsend($order_status,$orderID,$name,$amount,$Tracking_no,$Reference_no,$email,$stype,$sdate,$duration)
   {
   
    $from = "admin@pyx.co.in";
    $to = "bookings@pyx.co.in";
   
	
$mainsubject="Booking enquiry received- ".$name;
 $message= "<html>
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
    
    <h2>Booking enquiry</h2>
    <p></p>
    
    <table style='width:100%'>
     <tbody>
    <tr style='width:100%;border: 1px solid black'>
    <td colspan='2'>Recieve Enquiry Form From Web</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Order Status</td>
          <td>$order_status</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Order ID</td>
          <td>$orderID</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Name</td>
          <td>$name</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Amount</td>
          <td>$amount</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Tracking No</td>
          <td>$Tracking_no</td>
    </tr>
    <tr style='width:100%;border: 1px solid black'>
          <td>Reference No</td>
          <td>$Reference_no</td>
    </tr>
    </tbody>
    </table>
    </body>
    </html>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
   // Additional headers
$headers[] = 'To: Bookings <bookings@pyx.co.in>';
$headers[] = 'From: noreply <admin@pyx.co.in>';

    if(mail($to,$mainsubject,$message,implode("\r\n", $headers))) {
          bookingemail($order_status,$name,$amount,$email,$stype,$sdate,$duration);
            
        
        
        
	
	
        
    } else {
    	echo "The email message was not sent.";
    }  
   }
    function bookingemail($order_status,$name,$amount,$email,$stype,$sdate,$duration)
    {
      
       if($order_status==='Success')
       {
           
           $from1 = "bookings@pyx.co.in";
                 $to1 = $email;
                $mainsubject1="Your booking request has been received ";
         $message1= "<html>
    <head>
    <style>
    
    </style>
    </head>
    <body>
    
    <p>Dear $name,</p>
    <p>Thank you for booking your $stype shoot with Pyx. We appreciate your trust in us.</p><br>
    <p style='margin-bottom:10px'>This mail is to acknowledge receipt of INR $amount towards the booking of a $duration shoot on $sdate.</p>
   
    <p>Please allow us 24-48 hours to identify and assign the best photographer in your location for your shoot. We take this time to ensure that you are matched with a specialist who will deliver top-notch photos for you.</p>
    
    <p>We will confirm the photographer details via email at the earliest. In the unlikely event that we are unable to find a specialist in your area, the full amount of your booking will be refunded back to you. You also have the option to hold onto this amount as credits for future shoots, should you prefer.</p>
    
    <p>Thank you for your support and patronage.</p>
     <p>Sincerely,</p>
    <p><img src='https://pyx.co.in/images/emaillogo.jpeg' style='height: 36px;'></p>
    </body>
    </html>";
          $headers1[] = 'MIME-Version: 1.0';
          $headers1[] = 'Content-type: text/html; charset=iso-8859-1';
   // Additional headers
        $headers1[] = 'To:'.$email;
         $headers1[] = 'From: noreply <bookings@pyx.co.in>';
         if(mail($to1,$mainsubject1,$message1,implode("\r\n", $headers1)))
         {
             //echo "yes";
         }
         else
         {
            // echo "no";
         }
          // echo "yes";
       }
        else
        {
          //  echo "no";
        }
    
        
         
    
        
        
        
    }

?>
    