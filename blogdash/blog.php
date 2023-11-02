<?php
session_start();

include("../dashboard/connection.php");
if(isset($_SESSION['login_admin'])){

if(isset($_GET['blogdel']))
     {
       $del=$_GET['blogdel'];
       /*-------------------Here Delete Image And Page-----------------*/
       $QuerySelect="Select * from blog where blog_id='$del'";
       $redelete=mysqli_query($conn,$QuerySelect);
        while($rowlist=mysqli_fetch_assoc($redelete))
        {
            unlink("../".$rowlist['blogname']);
            $sql="delete from blog where blog_id='$del'";
            $re=mysqli_query($conn,$sql);
            header('location:blog.php');
        }
       /*-------------------Here Delete Image And Page-----------------*/
       
     }
// if(isset($_SESSION['admin']))
// {

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 270px;
        height: 100vh;
        background: #000000;
        color: white;
        overflow-y: scroll;
    }

    .logo {
        padding: 10px;
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
        text-align: center;

    }

    .menu {
        margin-top: 10px;


    }

    ul li {
        list-style: none;
    }

    .menu a {
        margin-left: 10px;
        color: white;
        display: block;
        text-decoration: none;
        padding: 5px;
        font-size: 18px;



    }

    .menu a:hover {
        background: whitesmoke;
        color: #00796B;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }

    .content {
        margin-left: 270px;
        background: #f3f3f3;
        height: 100vh;

    }

    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #000000;
        color: white;
    }

    .searchbox {
        border-radius: 20px;
        padding: 10px;
        outline: none;
    }

    .card-body {
        height: 150px;
        text-align: center;
        margin: 10px;
        color: whitesmoke;
        background: #790065;
    }

    .submenu {
        display: none;
        margin-left: 40px;
    }

    .logoimg {
        vertical-align: middle;
        border-style: none;
        background-color: white;
        width: auto;
    }

    .btn1 {
        background-color: black;
        color: white;
    }
    .table td, .table th{
        padding: 0.70rem !important;
    }
    </style>
</head>

<body>

    <?php
    include("sidebar.php");
    ?>
    <div class="content">
        <div class="topbar shadow p-1 mb-2 ">
            <div>
                <h5><span class="fa fa-align-justify" aria-hidden="true"></span>Dashboard</h5>
            </div>
            <!-- <div class="search-wrapper">
        <span></span>
        <input class="searchbox" type="search" name="" placeholder="search here">
      </div> -->
            <div class="user-wrapper">
                <img class="logoimg" src="images/headerlogo.png" width="40px" height="40px">
                <div>
                    <h6><a href="logout.php">Logout</a></h6>
                </div>
            </div>
        </div>
        <div class="main container">
            <div class="text-center">
                <h3>Blog</h3>
            </div>

            <div style="text-align: right;">

            </div>



            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Tag</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Name</label>
                                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                                        placeholder="Enter Tag Name">
                                </div>
                                <input type="submit" value="Create" class="btn " name="createtag">
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th scope="col" style="display:none;">Blog id</th>
                            <th scope="col">Blog Page Path</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Publish</th>
                            <th scope="col">Category</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
              $sql="select * from blog ORDER BY blog_id DESC";
              $result=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                            <td style="display:none;"><?php echo $row['blog_id']; ?></td>
                            <td><a href="<?php echo "../".$row['blogname']; ?>"
                                    target="_blank"><?php echo $row['blogname']; ?></a></td>
                            <td><?php echo substr( $row['blog_title'],0,30); ?></td>
                            <td><?php echo $row['publish']; ?></td>
                            <?php 
                   $catid=$row['category_id'] ;           
                  $sqlcat="select * from blog_category where cat_id in('$catid') ";
                  $resultcat=mysqli_query($conn,$sqlcat);
                  while($rowcat=mysqli_fetch_assoc($resultcat)){
                
                ?>
                            <td><?php echo $rowcat['cat_name']; ?></td>
                            <?php }

                  $tagid=explode (",", $row['tag']);
                  $AllTags="";
                  if(count($tagid)>1)
                  {
                    $sqltag="select * from tag where tag_id in(";
                    foreach($tagid as $tagitem)
                    {
                       $sqltag.=$tagitem.",";
                    }
                    $sqltag.="0)";
                    $resulttag=mysqli_query($conn,$sqltag);
                    while($rowtag=mysqli_fetch_assoc($resulttag)){
                      $AllTags.=$rowtag['tag_name'].",";
                  }
                  }
                  
                ?>
                            <td><?php echo $AllTags; ?></td>
                            <?php  ?>
                            <td scope="col"><?php echo $row['created_date']; ?></td>
                            <td><!-- <a href="javascript:;" data-toggle="modal"
                                    data-target="#exampleModal<?php echo $row['blog_id']; ?>"
                                    class="btn btn-primary btn1">Edit</a>--><a
                                    href="blog.php?blogdel=<?php echo $row['blog_id'];?>"
                                    class="btn btn-danger btn1 ml-2">Delete</a></td>
                        </tr>

                        <div class="modal fade" id="exampleModal<?php echo $row['blog_id']; ?>" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Tag</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="" action="action.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $row['blog_id']; ?>">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">cat Size</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $row['blogname']; ?>" name="updatetagname"
                                                    id="formGroupExampleInput">
                                            </div>
                                            <input type="submit" value="Update" class="btn " name="blogupdate">
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                                </div>
                            </div>
                        </div>
                        <?php 
            } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>

<?php }
else{
  header("location: ../login.php");
}?>