<?php include('dashboard/connection.php');
if(isset($_POST['id'])&& isset($_POST['val']))
{
    $id=$_POST['id'];
    $val=$_POST['val'];
    $sql="update multiple_image set name='$val' where img_id='$id'";
    $re=mysqli_query($conn,$sql);
    echo json_encode("done");
}
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    //echo json_encode($email);
    $sql="select * from photographer where email='$email'";
    $re=mysqli_query($conn,$sql);
    $c=mysqli_num_rows($re);
    if($c==0)
    {
        echo json_encode("This email is not registered");
    }
    else
    {
        echo json_encode("This email is already registered");
    }
}
?>