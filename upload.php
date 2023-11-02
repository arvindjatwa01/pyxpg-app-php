<?php
include('dashboard/connection.php');
$countfiles = count($_FILES['files']['name']);
// Upload directory
$upload_location = "multipleimage/";
$files_arr = array();

for($index = 0;$index < $countfiles;$index++){
    
   if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '')
   {
       $filename=$_FILES['files']['name'][$index];
       $uniquesavename=time().uniqid(rand());
       $saveimage=md5($uniquesavename).".".strtolower(pathinfo($filename, PATHINFO_EXTENSION));
       $folder = $upload_location.$saveimage;
       $tempname = $_FILES['files']['tmp_name'][$index]; 
        move_uploaded_file($tempname, $folder);
        $files_arr[] =$saveimage;
    }
}
$i++;
$string=implode(",",$files_arr);
$sql="INSERT INTO `multiple_image` (`images`) VALUES ('$string')";
//$sql="insert into  (images) values ('$string')";
$save=array();
if($conn->query($sql)==true)
{
   
 array_push($save,$conn->insert_id);
   echo json_encode($save);
}



?>