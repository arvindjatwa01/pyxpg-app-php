<?php include('connection.php');

//search


	$output = "";
	if(isset($_POST['status']))
	{
	    
	    
		$s=$_POST['status'];
		$sql="select * from booking where booking_status='$s'";
		$qry=mysqli_query($conn,$sql);
		if(mysqli_num_rows($qry) > 0)
		{
			$output .= "<table class='table table-hover table-striped'>
		<thead>
			<tr>
				<th>Booking Id</th>
				<th>Customer Name</th>
				<th>Phone No</th>
				<th>Booking Date</th>
				<th>Shoot Date</th>
				<th>Photographer Id</th>
				<th>Status</th>
			</tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($qry)) 
		{
		   
		$output .= "<tbody>
			<tr>
				<td><a href='customerdetail.php?id={$row['shoot_id']}'>{$row['shoot_id']}</a></td>
				<td>{$row['name']}</td>
				<td>{$row['phone']}</td>
				<td>{$row['booking_date']}</td>
				<td>{$row['shoot_date']}</td>
				<td><select class='form-control' id='photographerlist' onchange='savephotographer({$row['shoot_id']},this.value)''>
                          		<option selected disabled>Select</option>";
                                  
                               $sql="select * from photographer where status='Approved' AND accept_booking='Yes'";
                            $pre=mysqli_query($conn,$sql);

                            while($prow=mysqli_fetch_assoc($pre))
                            {
                            		$output .="<option value='{$prow['photographer_id']}'";
                            		 if($row['assigned_photographer']==$prow['photographer_id']){$output .="selected";}
                            		$output .=">{$prow['photographer_id']}</option>";
                            }
                               $output .="</select>
                </td>
                <td>
                     <select class='form-control' onchange='savestatus(this.value,{$row['shoot_id']})'>
								<option selected disabled>Select</option>
                                <option value='New'";if($row['booking_status']=='New'){$output .="selected";}$output .=">New</option>
                                <option value='Assigned'";if($row['booking_status']=='Assigned'){$output .="selected";}$output .=">Assigned</option>
                                <option value='Pending'";if($row['booking_status']=='Pending'){$output .="selected";}$output .=">Pending</option>
                                <option value='Pending Upload'";if($row['booking_status']=='Pending Upload'){$output .="selected";}$output .=">Pending Upload</option>
                                <option value='Editing'";if($row['booking_status']=='Editing'){$output .="selected";}$output .=">Editing</option>
                                <option value='Completed'";if($row['booking_status']=='Completed'){$output .="selected";}$output .=">Completed</option>
                                <option value='Cancelled'";if($row['booking_status']=='Cancelled'){$output .="selected";}$output .=">Cancelled</option>
                                <option value='On Hold'";if($row['booking_status']=='On Hold'){$output .="selected";}$output .=">On Hold</option>
                                
							</select>
                </td>
			</tr>
			</tbody>";
		}
	$output .="</table>
	        <button onclick='searchdata();'>Get Excel</button>
	";
		echo $output;
		}
		else{
		echo "<h5>No record found</h5>";
	}
	}




	if (isset($_POST['query'])) {
		$search = mysqli_real_escape_string($conn, $_POST['query']);
		$sql = "SELECT * FROM  booking WHERE name LIKE '%$search%' || phone LIKE '%$search%' || 
				email LIKE '%$search%'";
	
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) 
	{
		$output .= "<table class='table table-hover table-striped'>
		<thead>
			<tr>
				<th>Booking Id</th>
				<th>Customer Name</th>
				<th>Phone No</th>
				<th>Booking Date</th>
				<th>Shoot Date</th>
				<th>Photographer Id</th>
				<th>Status</th>
			</tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($query)) 
		{
		$output .= "<tbody>
			<tr>
				<td><a href='customerdetail.php?id={$row['shoot_id']}'>{$row['shoot_id']}</a></td>
				<td>{$row['name']}</td>
				<td>{$row['phone']}</td>
				<td>{$row['booking_date']}</td>
				<td>{$row['shoot_date']}</td>
				<td><select class='form-control' id='photographerlist' onchange='savephotographer({$row['shoot_id']},this.value)''>
                          		<option selected disabled>Select</option>";
                                  
                               $sql="select * from photographer where status='Approved' AND accept_booking='Yes'";
                            $pre=mysqli_query($conn,$sql);

                            while($prow=mysqli_fetch_assoc($pre))
                            {
                            		$output .="<option value='{$prow['photographer_id']}'";
                            		 if($row['assigned_photographer']==$prow['photographer_id']){$output .="selected";}
                            		$output .=">{$prow['photographer_id']}</option>";
                            }
                               $output .="</select>
                </td>
                <td>
                     <select class='form-control' onchange='savestatus(this.value,{$row['shoot_id']})'>
								<option selected disabled>Select</option>
                                  <option value='New'";if($row['booking_status']=='New'){$output .="selected";}$output .=">New</option>
                                <option value='Assigned'";if($row['booking_status']=='Assigned'){$output .="selected";}$output .=">Assigned</option>
                                <option value='Pending'";if($row['booking_status']=='Pending'){$output .="selected";}$output .=">Pending</option>
                                <option value='Pending Upload'";if($row['booking_status']=='Pending Upload'){$output .="selected";}$output .=">Pending Upload</option>
                                <option value='Editing'";if($row['booking_status']=='Editing'){$output .="selected";}$output .=">Editing</option>
                                <option value='Completed'";if($row['booking_status']=='Completed'){$output .="selected";}$output .=">Completed</option>
                                <option value='Cancelled'";if($row['booking_status']=='Cancelled'){$output .="selected";}$output .=">Cancelled</option>
                                <option value='On Hold'";if($row['booking_status']=='On Hold'){$output .="selected";}$output .=">On Hold</option>
							</select>
                </td>
				
			</tr>
			</tbody>";
		}
	$output .="</table>";
		echo $output;
	}
	else{
		echo "<h5>No record found</h5>";
	}
	}
//search end


if(isset($_POST['st']))
{
    $s=$_POST['st'];
	$sql="select * from category where shoot_type='$s'";
	$r=mysqli_query($conn,$sql);
	$data1=array();
	while($result=mysqli_fetch_assoc($r))
	{
          $type=$result['category_name'];
  	      $cid=$result['category_id'];
          $data1[]=array(
          "type"=>$type,
	      "cid"=>$cid);
	}
    echo json_encode($data1);

}
if(isset($_POST['booking'])&& isset($_POST['id']))
{
	$photoid=$_POST['id'];
	$booking=$_POST['booking'];
	$sql="update photographer set accept_booking='$booking' where photographer_id='$photoid'";
	$re=mysqli_query($conn,$sql);
	echo json_encode("done");
}
if(isset($_POST['pid'])&& isset($_POST['status']))
{
	$pid=$_POST['pid'];
	$status=$_POST['status'];
	$sql="update photographer set status='$status' where photographer_id='$pid'";
	$re=mysqli_query($conn,$sql);
	

    if($status=="Approved")
	{
	   
	    $res="select *from photographer where photographer_id='$pid' ";
        $q=mysqli_query($conn,$res);
        while($result=mysqli_fetch_assoc($q))
    	{
    	    $name=$result['name'];
      	    $email=$result['email'];
             $from = "join@pyx.co.in";
            
            //  echo $name;
            //  echo $email;
             $mainsubject1="Congrats! Welcome to the Pyx photographer community! ";
             $message1= "
            <html>
                <head> </head>
                <body>
                    <p>Hey $name,</p>
                    <p>We are excited to inform you that your application to be part of the Pyx Photographer Network has been accepted.
                    The last step remaining in the process is for you to complete a two hour online orientation session. This session will help you get acquainted with our photo booking process, photographer payments and schedules, maintaining your availability etc. 
                    </p>
                    <p> Please look for an invite soon to attend an upcoming orientation session.</p>
                    <p>Congratulations once again and welcome aboard!</p>
                    <p><img src='https://pyx.co.in/images/emaillogo.jpeg' style='height: 36px;'></p>
                 </body>
            </html>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
       // Additional headers
        $headers[] = 'To:'.$email;
        $headers[] = 'From:Pyx PG Recruitment<join@pyx.co.in> ';
               
                if(mail($email,$mainsubject1,$message1,implode("\r\n", $headers)))
                {
                    echo "success";
                }
                else{
                    echo "fail";
                }
            //   header("refresh:20;url=https://pyx.co.in");  
    	}
    }
    if($status=="Rejected")
    {
        
         $res="select *from photographer where photographer_id='$pid' ";
        $q=mysqli_query($conn,$res);
        while($result=mysqli_fetch_assoc($q))
    	{
    	    $name=$result['name'];
      	    $email=$result['email'];
            $from = "no-reply@pyx.co.in";
            
         $mainsubject1="We are sorry, your application to be a Pyx photographer has been rejected";
         $message1= "
        <html>
            <head> </head>
            <body>
            
                <p>Hey $name,</p>
                <p>We hope you are doing well.</p>

                <p>We are sorry to inform you that your application to be a Pyx photographer did not clear our internal selection process. </p>
                <p>We maintain a very high bar for photographer selection and do not wish for you to be disheartened by this decision. We encourage you to apply again once you have had more experience in your chosen type of photography.
                </p>
                <p>Wishing you happy shooting.</p>
                <p>Sincerely,</p>
                
                <p><img src='https://pyx.co.in/images/emaillogo.jpeg' style='height: 36px;'></p>
            </body>
        </html>";
        
        
         $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
       // Additional headers
        $headers[] = 'To:'.$email;
        $headers[] = 'From:Pyx PG Recruitment <no-reply@pyx.co.in>';
        if(mail($email,$mainsubject1,$message1,implode("\r\n", $headers)))
                {
                    echo "success";
                }
                else{
                    echo "fail";
                }
          
    	}

        //   header("refresh:20;url=https://pyx.co.in");      
    }
    // echo json_encode("done");
	
}
if(isset($_POST['shootid'])&& isset($_POST['pgid']))
{
	$shootid=$_POST['shootid'];
	$pgid=$_POST['pgid'];
	$sql="update booking set assigned_photographer='$pgid' where shoot_id='$shootid'";
	$re=mysqli_query($conn,$sql);
	
}

if(isset($_POST['bid'])&& isset($_POST['sval']))
{
	$bid=$_POST['bid'];
	$sval=$_POST['sval'];
	$sql="update booking set booking_status='$sval' where shoot_id='$bid'";
	$re=mysqli_query($conn,$sql);
	
}
if(isset($_POST['val'])&& isset($_POST['id']))
{
    $id=$_POST['id'];
	$val=$_POST['val'];
	$sql="update booking set partner_name='$val' where shoot_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}

if(isset($_POST['val1'])&& isset($_POST['id1']))
{
    $id=$_POST['id1'];
	$val=$_POST['val1'];
	$sql="update booking set shoot_date='$val' where shoot_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}
if(isset($_POST['val2'])&& isset($_POST['id2']))
{
    $id=$_POST['id2'];
	$val=$_POST['val2'];
	$sql="update booking set shoot_note='$val' where shoot_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}
if(isset($_POST['val4'])&& isset($_POST['id4']))
{
    $id=$_POST['id4'];
	$val=$_POST['val4'];
	$sql="update booking set phone='$val' where shoot_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}
if(isset($_POST['val5'])&& isset($_POST['id5']))
{
    $id=$_POST['id5'];
	$val=$_POST['val5'];
	$sql="update booking set no_ofphotos='$val' where shoot_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}

if(isset($_POST['val7'])&& isset($_POST['id7']))
{
    $id=$_POST['id7'];
	$val=$_POST['val7'];
	$sql="update package set duration='$val' where package_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}
if(isset($_POST['saveval']))
{
    $sval=$_POST['saveval'];
    $sql="update shootatstudio set at_studio='$sval'";
    $re=mysqli_query($conn,$sql);
}
?>