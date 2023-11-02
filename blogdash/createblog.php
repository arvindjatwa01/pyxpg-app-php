<?php
session_start();

include("../dashboard/connection.php");
if(isset($_SESSION['login_admin'])){

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="../ckeditor/ckeditor.js"></script>

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
      color: #ffffff;
      
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
      background:#790065;
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

    #customid{
      display: none;
    }

    .btn1{
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  
    <?php
    include("sidebar.php");
    ?>
  <div class="content">
    <div class="topbar shadow p-1 mb-2 ">
      <div><h5><span class="fa fa-align-justify" aria-hidden="true"></span>Dashboard</h5></div>
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
      <div class="text-center"><h3>Create Blog</h3></div> 
      <div class="">
        <h6>Choose Creation Blog</h6>
        <input type="radio" name="createblog" value="default" checked="">Default
        &nbsp;&nbsp;<input type="radio" name="createblog" value="custom">Custom
      </div> 

      <div id="customid" >
              <div class="form-group">
                <select id="cselect" class="form-select form-control" aria-label="" name="category" >
                  <option selected>Select Category</option>
                  <?php 
                  $sqlcat="select *from blog_category";
                  $catres=mysqli_query($conn,$sqlcat);
                  while($rowcat=mysqli_fetch_assoc($catres)){

                  ?>
                  <option value="<?php echo $rowcat['cat_id'] ?>"><?php echo $rowcat['cat_name'] ?></option>
                <?php }
                 ?>
                 </select>
              </div>
              
              <div class="form-group">
                <label >Choose Tag</label><br>
                <?php 
                  $sqltag="select *from tag";
                  $tagres=mysqli_query($conn,$sqltag);
                  while($rowtag=mysqli_fetch_assoc($tagres)){

                  ?>
                <input type="checkbox" value="<?php echo $rowtag['tag_id'] ?>" name="tagdefault[]" >&nbsp;&nbsp;<span><?php echo $rowtag['tag_name'] ?></span>
                <?php }
                 ?>
              </div>
              <div class="form-group">
                <input id="cbanner" type="text" name="title" class="form-control" placeholder="enter Banner Title">
              </div>
              <div class="custom-file" style="width:400px;">
                    <input type="file" id="cphoto" name="bannerimg" required><br>
                </div>
              <textarea cols="80" id="editor1" name="editor1" rows="10" data-sample-short></textarea>
              <div class="form-group">
                <input id="cpublish" type="text" name="publish" class="form-control" placeholder="Publish By">
              </div>
              <script type="text/javascript">
          function customvalid()
          {
            var data = CKEDITOR.instances.editor1.getData();
            var category_id = document.getElementById("cselect").value;
            var tag_array = document.getElementsByName('tagdefault[]');
            var banner_title = document.getElementById("cbanner").value;
            var banner_image = document.getElementById("cphoto").value;
            var inputimage= $("#cphoto").prop("files")[0];
            var publish_by = document.getElementById("cpublish").value;
            var tag_array_onsubmit = [];
            try {
                var anycheck = false;
                 
                for (i = 0; i < tag_array.length; i++) {

                    if (tag_array[i].checked) {
                        anycheck = true;
                         tag_array_onsubmit.push(tag_array[i].value);

                    }
                }
                if (!anycheck) {
                    return;
                }
            } catch {
                document.getElementById("cboxerror").innerHTML = "";
            }
            var form_data = new FormData();
             form_data.append("bannerimg", inputimage);
             form_data.append("content", data);
             form_data.append("title", banner_title);
             form_data.append("category", category_id);
             form_data.append("tagdefault[]", tag_array_onsubmit);
             form_data.append("publish", publish_by);
             form_data.append("publish", publish_by);
            $.ajax({
                url: "../create.php",
                method: "POST",
                processData: false,
                contentType: false,
                data: form_data,
                success: function(result) {
                    console.log(result);
                    //window.location.reload();
                    alert("Created Successfully");
                  window.location.reload();

                }
            });
          }
             
          </script>
              <div class="text-right m-4"><button onclick="customvalid()" class="btn btn-success">Create</button></div>



              <script type="text/javascript">
                CKEDITOR.replace('editor1', {

                    filebrowserUploadUrl: "upload.php",
                    filebrowserUploadMethod: 'form'
                });
                </script>
             
          
      </div>
      <div id="defaultid">
        <form class="" action="" method="POST" id="sub_blog">
            
              <div class="form-group">
                <select class="form-select form-control" aria-label="" name="category" >
                  <option selected>Select Category</option>
                  <?php 
                  $sqlcat="select *from blog_category";
                  $catres=mysqli_query($conn,$sqlcat);
                  while($rowcat=mysqli_fetch_assoc($catres)){

                  ?>
                  <option value="<?php echo $rowcat['cat_id'] ?>"><?php echo $rowcat['cat_name'] ?></option>
                <?php }
                 ?>
                 </select>
              </div>
              
              <div class="form-group">
                <label >Choose Tag</label><br>
                <?php 
                  $sqltag="select *from tag";
                  $tagres=mysqli_query($conn,$sqltag);
                  while($rowtag=mysqli_fetch_assoc($tagres)){

                  ?>
                <input type="checkbox" value="<?php echo $rowtag['tag_id'] ?>" name="tagdefault[]" >&nbsp;&nbsp;<span><?php echo $rowtag['tag_name'] ?></span>
                <?php }
                 ?>
              </div>
            
              <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="enter Banner Title">
              </div>
              <div class="form-group">
               <textarea class="form-control" name="desc" placeholder="enter Description About Blog"></textarea>
             </div> 
               <div class="form-group">
                <input type="text" name="publish" class="form-control" placeholder="Publish By">
              </div>
             <div class="custom-file" style="width:400px;">
                <input type="file"  id="customFile" name="bannerimg">
                
               
              </div>
              <div id="formadd">
              </div>
              <input type="hidden" name="form-input" id="form-input">
            <div class="text-right"><input name="create" type="submit" value="Create" class="btn btn-success btn1"></div>
            
        </form>
           <div ><button  class="btn btn-primary btn1" onclick="addform()">Add more</button></div> 
      </div> 
   </div>

       <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
      </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script type="text/javascript">
       $('input[type=radio][name=createblog]').change(function() {
            if (this.value == 'custom') {
             $("#customid").css("display" , "block");
              $("#defaultid").css("display" , "none");
            }
            else if (this.value == 'default') {
                $("#customid").css("display" , "none");
                $("#defaultid").css("display" , "block");
            }
        });
      </script>
     
      
      
      <script type="text/javascript">
         var i=0;
          function addform(){
                    var n;
                   
                    for(n=i;n<i+1;n++){
                        $("#formadd").append('<div class="form-group mt-2"><label>Blog Title</label><textarea class="form-control" name="formtextfirst'+n+'"></textarea></div><div><label>Blog Description</label><textarea class="form-control" name="formtextsecond'+n+'"></textarea></div><div class="form-group"><label>Blog Image</label><input type="file" name="formimg'+n+'" class="form-control-file" ></div>');
                    }
                     i = i+1;
                     n=n+1;
                   
                       $('#form-input').val(n-1);
                     }

    


       
        $('#sub_blog').on('submit',function(e){
          e.preventDefault();
          
          $.ajax({
            url : 'phpfunction.php',
             type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
            
              if(data=="success"){
                
                alert("File Created Successfully");
                 window.location.reload();
              }
              else{
                console.log(data);
                 alert("Created Successfully");
                  window.location.reload();
              }
            }
          })
        });
        
      </script>
</body>
</html>

<?php }
else{
  header("location: ../login.php");
}?>