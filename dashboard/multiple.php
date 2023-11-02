<?php 
include('connection.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    //echo $id;
    $sql="select * from multiple_image where img_id='$id'";
    $re=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($re);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    img{width:100px;height:100px}
    </style>
</head> 
<body>
    
    <?php
    $img=explode(",",$row['images']);
    $imgl=count($img)-1;
    //echo $img1;
    for($i=0;$i<=$imgl;$i++)
    {
        
        echo "<a href='../multipleimage/".$img[$i]."' download><img src='../multipleimage/".$img[$i]."'></a>";
    }
    ?>
   
</body>
</html>
<?php 
}
?>