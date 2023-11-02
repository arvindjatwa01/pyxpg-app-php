<?php
session_start();
// include("../connection.php");
// if(isset($_SESSION['admin']))
// {
  include("../dashboard/connection.php");
if(isset($_SESSION['login_admin'])){

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .sidebar{
      position:fixed;
      top: 0;
      left: 0;
      width: 270px;
      height:100vh;
      background:#000000;
      color: white;
      overflow-y:scroll;
    }
    .logo{
      padding:10px;
      font-weight:700;
      font-size: 20px;
      text-transform: uppercase;
      text-align: center;

    }
    .menu{
      margin-top: 10px;
      
      
    }
    ul li{
      list-style: none;
    }
    .menu a{
      margin-left: 10px;
      color: white;
      display: block;
      text-decoration: none;
      padding:5px;
      font-size: 18px;
      
      

    }
    .menu a:hover{
      background: whitesmoke;
      color:#00796B;
      border-top-left-radius:20px;
      border-bottom-left-radius:20px;
    }
    .content{
      margin-left:270px;
      background: #f3f3f3;
      height: 100vh;

    }
    .topbar{
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #000000;
      
    }
    .searchbox{
      border-radius: 20px;
      padding: 10px;
      outline: none;
    }
    .card-body{
      height: 150px;
      text-align: center;
      margin: 10px;
      color: whitesmoke;
      background:#000000;
    }
    .submenu{
      display:none;
      margin-left: 40px;
    }
    .logoimg{
      vertical-align: middle;
      border-style: none;
      background-color: white;
      width: auto;
    }

  </style>
</head>
<body>
  
    <?php
    include("sidebar.php");
    ?>
  <div class="content">
    <div class="topbar shadow p-1 mb-2 ">
      <div><h5 class="text-white"><span class="fa fa-align-justify m-1" aria-hidden="true"></span></h5></div>
     <!--  <div class="search-wrapper">
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
      <div class="row">
        <div class="col-md-3 ">
        <div class="card-body">
          <h6>Category</h6>
        </div>
      </div>
      <div class=" col-md-3">
        <div class="card-body">
         <h6> Blog</h6>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>

<?php }
else{
  header("location: ../login.php");
}
?>