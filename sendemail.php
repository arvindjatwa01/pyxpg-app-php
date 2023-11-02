<?php
include('dashboard/connection.php');
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   
if(isset($_POST['send']))
{
	$Name =$_REQUEST['firstname'];
    $Email =$_REQUEST['email'];
    $Moblie =$_REQUEST['mobile'];
     $Project =$_REQUEST['project'];
    $Mess =$_REQUEST['message'];
    $from = "admin@pyx.co.in";
    $to = "support@pyx.co.in";
    $subject = $_REQUEST['message'];
	
$mainsubject="Support enquiry submission: ".$Name;
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
    
    <h2>Support enquiry</h2>
    <p></p>
    
    <table style='width:100%'>
     <tbody>
    
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>&nbsp;Name</td>
    <td style='width: 273.7px; height: 27px;'>$Name</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>E-mail</td>
    <td style='width: 273.7px; height: 27px;'>$Email</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>Mobile number</td>
    <td style='width: 273.7px; height: 27px;'>$Moblie</td>
    </tr>
    <tr style='height: 27px;'>
    <td style='width: 133.3px; height: 27px;'>Subject</td>
    <td style='width: 273.7px; height: 27px;'>$Project</td>
    </tr>
    <tr style='height: 27.3px;'>
    <td style='width: 133.3px; height: 27.3px;'>Message</td>
    <td style='width: 273.7px; height: 27.3px;'>$Mess</td>
    </tr>
    </tbody>
    </table>
    </body>
    </html>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
   // Additional headers
$headers[] = 'To: Support <support@pyx.co.in>';
$headers[] = 'From: noreply <admin@pyx.co.in>';

    if(mail($to,$mainsubject,$message,implode("\r\n", $headers))) {
		echo "<script>
	    
	  window.location.href = 'returnmail.php?email=".$Email."&name=".$Name."';
	   
   </script>";
  

    } else {
    	echo "The email message was not sent.";
    } 
}

?>

<?php 
if(isset($_POST['email'])&&isset($_POST['fname'])&&isset($_POST['phone']))
{
	session_start();
	$mimage=addslashes($_POST['mimage']);
	
  $email=$_POST['email'];
  $name=$_POST['fname']." ".$_POST['lname'];
  $phone=$_POST['phone'];
  $add=addslashes($_POST['address']);
  $city=addslashes($_POST['city']);
  $pincode=addslashes($_POST['pincode']);
  
  $web=addslashes($_POST['website']);

  $insta=addslashes($_POST['insta']);
  $fb=addslashes($_POST['fb']);
  $twitter=addslashes($_POST['twitter']);
  $prof=addslashes($_POST['professional']);
  $exp=addslashes($_POST['exp']);
  $paid=addslashes($_POST['paid']);
  $cbother=addslashes($_POST['cbodyother']);
  $clother=addslashes($_POST['clenseother']);
  $caother=addslashes($_POST['caother']);
  $studio=addslashes($_POST['studio']);
  	$date=date('Y-m-d');
  if($studio=='Yes')
  {
      $studioadd=$_POST['studioaddress'];
      $studiocity=$_POST['studiocity'];
      $studiopincode=$_POST['studiopincode'];
  }
  else
  {
      $studioadd="";
      $studiocity="";
      $studiopincode="";
  }
  $expdesc=addslashes($_POST['expdesc']);
  $workhour=addslashes($_POST['workhour']);
  $checkbox1=$_POST['category'];  
   $chk="";  
    foreach($checkbox1 as $chk1)  
     {  
      $chk .= $chk1.", ";  
     }
     $cat=substr($chk,0,-2);

     $checkbox2=$_POST['cbody'];  
   $cbody="";  
    foreach($checkbox2 as $cb2)  
     {  
         if($cb2=='Other')
         {
             $cbody .= $cb2."( ".$cbother."), ";  
         }
         else
         {
             $cbody .= $cb2.", ";  
         }
      
     }

     $ccbody=substr($cbody,0,-2);
     
   $checkbox3=$_POST['lense'];  
   $lense="";  
    foreach($checkbox3 as $lense2)  
     { 
         if($lense2=='Other')
         {
             $lense .= $lense2."( ".$clother."), "; 
         }
         else
         {
             $lense .= $lense2.", "; 
         }
       
     }
    $clense=substr($lense,0,-2);
    
      $checkbox4=$_POST['accessory'];  
   $accessory="";  
    foreach($checkbox4 as $accessory2)  
     {  
        if($accessory2=='Other')
        {
            $accessory .= $accessory2."( ".$caother."), ";  
        }
        else
        {
            $accessory .= $accessory2.", ";  
        }
      
     }
   $cass=substr($accessory,0,-2);
  
      $checkbox5=$_POST['toption'];  
   $toption="";  
    foreach($checkbox5 as $toption2)  
     {  
      $toption .= $toption2.", ";  
     }
    $ctoption=substr($toption,0,-2);
   
   
           
          $filename=uniqid($_FILES['adharcard']['name']);
            $tempname = $_FILES["adharcard"]["tmp_name"]; 
            $folder = "dashboard/images/".basename($filename);
            move_uploaded_file($tempname, $folder);
           
           //header('location:pgtry.php');
                 
                 $sql="insert into photographer (name,email,phone,address,city,pincode,adhar_card,website,insta_link,fb_link,twitter_link,is_professional,experience,is_paid,studio,expdesc,workhours,categories,camera_body,camera_lense,accessory,toption,category_image,status,std_address,std_city,std_pincode,date) 
          values ('$name','$email','$phone','$add','$city','$pincode','$filename','$web','$insta','$fb','$twitter','$prof','$exp','$paid','$studio','$expdesc','$workhour','$cat','$ccbody','$clense','$cass','$ctoption','$mimage','Applied','$studioadd','$studiocity','$studiopincode','$date')";
        
          $re=mysqli_query($conn,$sql);
          if($re==true)
          {
              //echo $mimage;
              //die();
                $from = "admin@pyx.co.in";
            $to = "join@pyx.co.in";
            //$subject = $_REQUEST['message'];
        	
        $mainsubject="PG application: ".$name;
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
            
            <h2>PG application: $name</h2>
             <table style='width:100%'>
             <tbody>
            
            <tr style='height: 27px;'>
            <td style='width: 133.3px; height: 27px;'>&nbsp;Name</td>
            <td style='width: 273.7px; height: 27px;'>$name</td>
            </tr>
            <tr style='height: 27px;'>
            <td style='width: 133.3px; height: 27px;'>E-mail</td>
            <td style='width: 273.7px; height: 27px;'>$email</td>
            </tr>
            <tr style='height: 27px;'>
            <td style='width: 133.3px; height: 27px;'>Mobile number</td>
            <td style='width: 273.7px; height: 27px;'>$phone</td>
            </tr>
            <tr style='height: 27px;'>
            <td style='width: 133.3px; height: 27px;'>Addresss</td>
            <td style='width: 273.7px; height: 27px;'>$add</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'> WebLinks</td>
            <td style='width: 273.7px; height: 27.3px;'>$web</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>FbLinks</td>
            <td style='width: 273.7px; height: 27.3px;'>$fb</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Twitter</td>
            <td style='width: 273.7px; height: 27.3px;'>$twitter</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Studio</td>
            <td style='width: 273.7px; height: 27.3px;'>$studio</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Is Profession</td>
            <td style='width: 273.7px; height: 27.3px;'>$prof</td>
            </tr>
             <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Expereince</td>
            <td style='width: 273.7px; height: 27.3px;'>$exp</td>
            </tr>
             <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Work Hour</td>
            <td style='width: 273.7px; height: 27.3px;'>$workhour</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Category</td>
            <td style='width: 273.7px; height: 27.3px;'>$cat</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Camera Body</td>
            <td style='width: 273.7px; height: 27.3px;'>$ccbody</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Camera Lense</td>
            <td style='width: 273.7px; height: 27.3px;'>$clense</td>
            </tr>
             <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Camera Accessories</td>
            <td style='width: 273.7px; height: 27.3px;'>$cass</td>
            </tr>
            <tr style='height: 27.3px;'>
            <td style='width: 133.3px; height: 27.3px;'>Transportation</td>
            <td style='width: 273.7px; height: 27.3px;'>$ctoption</td>
            </tr>
            </tbody>
            </table>
            
            
            </body>
            </html>";
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
          // Additional headers
        $headers[] = 'To: Join <join@pyx.co.in>';
        $headers[] = 'From: Pyx PG recruitment <admin@pyx.co.in>';
        
            if(mail($to,$mainsubject,$message,implode("\r\n", $headers))) {
        		//echo "The email message was sent.";
        		 $from1 = "admin@pyx.co.in";
                 $to1 = $email;
                 $mainsubject1=" Hang on tight! We have received your application to be a Pyx photographer ";
                 $message1= "<html>
            <head>
            <style>
            
            </style>
            </head>
            <body>
            
            <p>Hey $name,</p>
            <p>Thanks for applying to be a Pyx photographer. Pyx is the first and largest on-demand photography marketplace in India.</p>
            <p style='margin-bottom:10px'>While we assess the quality of your portfolio and overall application, here is what you can expect as next steps:</p>
          <ol type='1'>
          <li>A 15 minute video-call with one of our leadership team members to understand more about your photography background and expertise</li>
          <li>Decision on whether you meet the quality standards to be a Pyx photographer</li>
          
          </ol>
            <p>Thanks again for applying and we look forward to speaking with you soon.</p>
            
            <p><img src='https://pyx.co.in/images/emaillogo.jpeg' style='height: 36px;'></p>
            </body>
            </html>";
                  $headers1[] = 'MIME-Version: 1.0';
              $headers1[] = 'Content-type: text/html; charset=iso-8859-1';
          // Additional headers
          $headers1[] = 'To:'.$email;
          $headers1[] = 'From: noreply <no-reply@pyx.co.in>';
          mail($to1,$mainsubject1,$message1,implode("\r\n", $headers1));
          //header('location:index.php');
          //header("refresh:20;url=https://pyx.co.in");
        	 echo "The email message was sent";    
            } else {
            	echo "The email message was not sent.";
            } 
          }
      
 
}
?>