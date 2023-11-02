<?php include('connection.php');
$output = "";
	if(isset($_POST['status']))
	{
		$s=$_POST['status'];
		$sql="select * from photographer where status='$s'";
		$qry=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($qry) > 0)
		{
			$output .= "
			
			<table class='table table-hover table-striped'>
		<thead>
			<tr>
				        <th scope='col'>Id</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Phone No</th>
                        <th scope='col'>Request</th>
                        <th scope='col'>Status 
                        
</th>
			</tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($qry)) 
		{
		  // 	$csv_output .=$row['photographer_id'].",";
		  // 	$csv_output .=$row['name'].",";
		  // 	$csv_output .=$row['email'].",";
		  // 	$csv_output .=$row['phone'].",";
		  // 	$csv_output .=$row['address'].",";
		  // 	$csv_output .=$row['city'].",";
		  // 	$csv_output .=$row['pincode'].",";
		  // 	$csv_output .=$row['adhar_card'].",";
		  // 	$csv_output .=$row['website'].",";
		  // 	$csv_output .=$row['insta_link'].",";
		  // 	$csv_output .=$row['fb_link'].",";
		  // 	$csv_output .=$row['twitter_link'].",";
		  // 	$csv_output .=$row['is_professional'].",";
		  // 	$csv_output .=$row['experience'].",";
		  // 	$csv_output .=$row['is_paid'].",";
		  // 	$csv_output .=$row['studio'].",";
		  // 	$csv_output .=$row['std_address'].",";
		  // 	$csv_output .=$row['std_city'].",";
		  // 	$csv_output .=$row['std_pincode'].",";
		  // 	$csv_output .=$row['expdesc'].",";
		  // 	$csv_output .=$row['workhours'].",";
		  // 	$csv_output .=$row['categories'].",";
		  // 	$csv_output .=$row['camera_body'].",";
		  // 	$csv_output .=$row['camera_lense'].",";
		  // 	$csv_output .=$row['accessory'].",";
		  // 		$csv_output .=$row['toption'].",";
		  // 	$csv_output .=$row['category_image'].",";
		  // 	$csv_output .=$row['accept_booking'].",";
		   	
		  // 	$csv_output .=$row['status']."\n";
		   
		$output .= "<tbody>
			<tr>
				<td><a href='phtographerdetail.php?id={$row['photographer_id']}'>{$row['photographer_id']}</a>
				</td>
			
				<td>{$row['name']}  
				</td>
				<td>{$row['email']} </td>
				<td>{$row['phone']}  </td>";
				if($row['status']=='Approved')
				{
				   $output .="<td><input type='radio' name='acceptbooking{$row['photographer_id']}' value='Yes' id='{$row['photographer_id']}'";if($row['accept_booking']=='Yes'){ $output .=" checked";}; $output .="><label>Yes</label>&nbsp;&nbsp;
  	                		             <input type='radio' name='acceptbooking{$row['photographer_id']}' value='No' id='{$row['photographer_id']}'";if($row['accept_booking']=='No'){$output .= " checked";}; $output .="><label>No</label></td>"; 
				}
				else
				{
				    $output .="<td>
				                    <input type='radio' disabled><label>Yes</label>&nbsp;&nbsp;
			                        <input type='radio' disabled><label>No</label>
  	                		    </td>";
				}
				$output .="
				<td>
				<select id='selectstatus{$row['photographer_id']}' onchange='status({$row['photographer_id']},this.value)' class='form-control'>
  		            <option selected disabled>Select</option>
  		            <option value='Pending'";if($row['status']=='Pending'){$output .= "selected";}$output .= ">Pendin</option>
  		            <option value='Applied'";if($row['status']=='Applied'){$output .= "selected";}$output .= ">Applied</option>
  		            <option value='Rejected'";if($row['status']=='Rejected'){$output .= "selected";}$output .= ">Rejected</option>
  		            <option value='Approved'";if($row['status']=='Approved'){$output .= "selected";}$output .= ">Approved</option>
  		            <option value='Deactivated'";if($row['status']=='Deactivated'){$output .= "selected";}$output .= ">Deactivated</option>
  		          </select> 
                </td>
             
			</tr>
			</tbody>";
			
			
		}
	$output .="</table>
	<button onclick='searchdata()'>Get Excel</button>
	";
		echo $output;
		
			
		}
		else{
		echo "<h5>No record found</h5>";
	}
	}

$out = '';






	if (isset($_POST['query'])) {
		$search = mysqli_real_escape_string($conn, $_POST['query']);
		$sql = "SELECT * FROM  photographer WHERE name LIKE '%$search%' || phone LIKE '%$search%' || 
				email LIKE '%$search%' || photographer_id LIKE '%$search'";
	
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) 
	{
		$output .= "<table class='table table-hover table-striped'>
		<thead>
			<tr>
				        <th scope='col'>Id</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Phone No</th>
                        <th scope='col'>Request</th>
                        <th scope='col'>Status</th>
			</tr>
		</thead>";
		while ($row = mysqli_fetch_assoc($query)) 
		{
		$output .= "<tbody>
			<tr>
				<td><a href='phtographerdetail.php?id={$row['photographer_id']}'>{$row['photographer_id']}</a></td>
				<td>{$row['name']}</td>
				<td>{$row['email']}</td>
				<td>{$row['phone']}</td>";
				if($row['status']=='Approved')
				{
				   $output .="<td><input type='radio' name='acceptbooking{$row['photographer_id']}' value='Yes' id='{$row['photographer_id']}'";if($row['accept_booking']=='Yes'){ $output .=" checked";}; $output .="><label>Yes</label>&nbsp;&nbsp;
  	                		             <input type='radio' name='acceptbooking{$row['photographer_id']}' value='No' id='{$row['photographer_id']}'";if($row['accept_booking']=='No'){$output .= " checked";}; $output .="><label>No</label></td>"; 
				}
				else
				{
				    $output .="<td><input type='radio' disabled><label>Yes</label>&nbsp;&nbsp;
				                   <input type='radio' disabled><label>No</label>
  	                		             </td>";
				}
				$output .="
				<td><select id='selectstatus{$row['photographer_id']}' onchange='status({$row['photographer_id']},this.value)' class='form-control'>
  	                		            <option selected disabled>Select</option>
  	                		            <option value='Pending'";if($row['status']=='Pending'){$output .= "selected";}$output .= ">Pending</option>
  	                		            <option value='Applied'";if($row['status']=='Applied'){$output .= "selected";}$output .= ">Applied</option>
  	                		            <option value='Rejected'";if($row['status']=='Rejected'){$output .= "selected";}$output .= ">Rejected</option>
  	                		            <option value='Approved'";if($row['status']=='Approved'){$output .= "selected";}$output .= ">Approved</option>
  	                		            <option value='Deactivated'";if($row['status']=='Deactivated'){$output .= "selected";}$output .= ">Deactivated</option>
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
if(isset($_POST['svalue']) && isset($_POST['sid']))
{
    $val=$_POST['svalue'];
    $id=$_POST['sid'];
    $sql="update photographer set studio='$val',std_address='' where photographer_id='$id'";
    $re=mysqli_query($conn,$sql);
    echo json_encode("done");
    
}
if(isset($_POST['val2'])&& isset($_POST['id2']))
{
    $id=$_POST['id2'];
	$val=$_POST['val2'];
	$sql="update photographer set std_address='$val' where photographer_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}


if(isset($_POST['val3'])&& isset($_POST['id3']))
{
    $id=$_POST['id3'];
	$val=$_POST['val3'];
	$sql="update photographer set std_city='$val' where photographer_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}

if(isset($_POST['val4'])&& isset($_POST['id4']))
{
    $id=$_POST['id4'];
	$val=$_POST['val4'];
	$sql="update photographer set std_pincode='$val' where photographer_id='$id'";
	$re1=mysqli_query($conn,$sql);
	echo $val;
	//$sql="select partner_name from booking where shoot_id='$'"
}

?>