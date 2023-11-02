<?php include("dashboard/connection.php");
if(isset($_POST['gid']))
{
	$id=$_POST['gid'];

	       $bsql="select * from booking where shoot_id='$id' limit 1";
                                        $bresult=mysqli_query($conn,$bsql);
                                        $brow=mysqli_fetch_assoc($bresult);
                                        $shoottype=$brow['shoot_type'];

$fetch_cat = "select * from category where for_page='wireframe' AND shoot_type='$shoottype'";
$result = mysqli_query($conn,$fetch_cat);
$data=array();
while ($cat=mysqli_fetch_assoc($result))
 {
       $cname=$cat['category_name'];
       $cid=$cat['category_id'];
       $cimage=$cat['category_image'];
       $catstudio=$cat['at_studio'];
       //if($catstudio=='Yes')
       $data[]=array(
       	"cname"=>$cname,
       	"cid"=>$cid,
       	"catstudio"=>$catstudio,
       	"cimage"=>$cimage);
 }
 echo json_encode($data);
}
if(isset($_POST['getcid']))
{
	$id=$_POST['getcid'];
	//$id='sohini';
	//echo json_encode($id);
	       $bsql="select * from booking where shoot_id='$id' limit 1";
                                        $bresult=mysqli_query($conn,$bsql);
                                        $brow=mysqli_fetch_assoc($bresult);
                                        $shoottype=$brow['shoot_type'];
                                        $shootcat=$brow['shoot_need'];
$fetch_cat = "select * from package  where package.packagefor='$shootcat' OR shoot_type='All'";
$result = mysqli_query($conn,$fetch_cat);
$data=array();
while ($cat=mysqli_fetch_assoc($result))
 {
       $price=$cat['package_price'];
        $pname=$cat['package_title'];
       $pdesc=$cat['package_desc'];
       $pid=$cat['package_id'];
       $pfor=$cat['duration'];
       $pimage=$cat['package_image'];
       $data[]=array(
       	"price"=>$price,
       	"pid"=>$pid,
       	"pfor"=>$pfor,
       	"pdesc"=>$pdesc,
       	"pname"=>$pname,
       	"pimage"=>$pimage);
 }
 echo json_encode($data);
}
if(isset($_POST['id5']))
{
	$id=$_POST['id5'];
	$sql="select * from category where category_id='$id'";
	$re=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($re);
	$at_studio=$row['at_studio'];
	$data=array();
	$data[]=array(
		"atstudio"=>$at_studio);

	echo json_encode($data);
	//echo json_encode($at_studio);
}
?>