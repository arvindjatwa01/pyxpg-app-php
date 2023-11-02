<?php 

include('connection.php');
session_start();
if(isset($_SESSION['email']))
  {
    if(isset($_POST['pgpublishdata'])){
        $photographerId = $_POST['photographerId'];
        

        $rating = $_POST['rating'];
        $reviews = $_POST['reviews'];
        $about_photographer = mysqli_real_escape_string($conn,$_POST['aboutphotographer']);
        $q1 = mysqli_real_escape_string($conn,$_POST['Q1']);
        $q2 = mysqli_real_escape_string($conn,$_POST['Q2']);
        $q3 = mysqli_real_escape_string($conn,$_POST['Q3']);
        $q4 = mysqli_real_escape_string($conn,$_POST['Q4']);

        // ************ Photographer Profile Image Move into Folder ******** // 

        $photographerprofileImg = $_FILES['pgprofileImg']['name'];
        $profileImgfolder = "images/pg-images/";
        $uniquesaveprofile= rand(1000, 9999);
        $saveprofileimage=$uniquesaveprofile.".".strtolower(pathinfo($photographerprofileImg, PATHINFO_EXTENSION));
        
        $profileImgfolder = $profileImgfolder.$saveprofileimage;

        $tempnameProfile = $_FILES['pgprofileImg']['tmp_name']; 
        move_uploaded_file($tempnameProfile, $profileImgfolder);

        // ************ Portfolio Image Move into Folder ******** // 

        $countfiles = count($_FILES['portfolioImg']['name']);
        $upload_location = "images/portfolio-images/";
        $portfolioImg =  array();
        for($index = 0;$index < $countfiles;$index++){
    
            if(isset($_FILES['portfolioImg']['name'][$index]) != '')
            {
                $filename=$_FILES['portfolioImg']['name'][$index];
                $uniquesavename= rand(1000, 9999);
                
                $saveimage=$uniquesavename.".".strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                
                $folder = $upload_location.$saveimage;
                
                $tempname = $_FILES['portfolioImg']['tmp_name'][$index]; 
                 move_uploaded_file($tempname, $folder);
                 $portfolioImg[] =$saveimage;
                //  echo $portfolioImg;
             }
        }
        // $portfolioImg =  $_FILES['portfolioImg']['name'];
        $pfImages = implode(",",$portfolioImg);
       
        $sql = "INSERT INTO pgpublish(photographer_id, photographer_image, rating, review, about_photographer, Q1, Q2, Q3, Q4, portfolio_images) 
        VALUES('$photographerId', '$saveprofileimage', '$rating', '$reviews', '$about_photographer', '$q1', '$q2', '$q3', '$q4', '$pfImages')";

        $result = mysqli_query($conn, $sql) or die("Query Failed");
        if($result){
            header("Location: ../dashboard/phtographerdetail.php?id=$photographerId");
        }else{
            echo "Failed";
        }
    } 

    if(isset($_POST['pgpublisheditdata'])){
      $pg_publish_Id = $_POST['pg_publish_id'];
      $rating = $_POST['Erating'];
      $review = $_POST['Ereviews'];
      $about_photographer = $_POST['Eaboutphotographer'];
      $Q1 = $_POST['EQ1'];
      $Q2 = $_POST['EQ2'];
      $Q3 = $_POST['EQ3'];
      $Q4 = $_POST['EQ4'];
$EphotographerId = $_POST['EphotographerId'];
      if(empty($_FILES['new-pgprofileImg']['name'])){
          $EphotographerprofileImg = $_POST['old-pgprofileImg'];
      }else{
        $EphotographerprofileImg = $_FILES['new-pgprofileImg']['name'];
        $profileImgfolder = "images/pg-images/";
        $uniquesaveprofile= rand(1000, 9999);
        $saveprofileimage=$uniquesaveprofile.".".strtolower(pathinfo($EphotographerprofileImg, PATHINFO_EXTENSION));
        
        $profileImgfolder = $profileImgfolder.$saveprofileimage;

        $tempnameProfile = $_FILES['new-pgprofileImg']['tmp_name']; 
        // move_uploaded_file($tempnameProfile, $profileImgfolder);
      }

      $sql = "UPDATE pgpublish SET photographer_image = '$EphotographerprofileImg', rating='$rating', review='$review', 
      about_photographer='$about_photographer', Q1='$Q1', Q2='$Q2', Q3='$Q3', Q4='$Q4' WHERE 	pg_publish_id = $pg_publish_Id";

      $result = mysqli_query($conn, $sql) or die("Query Failed");
      if($result){
          header("Location: ../dashboard/phtographerdetail.php?id=$EphotographerId");
      }else{
          echo "Failed";
      }


    }

    if(isset($_POST['publishId'])){
      $publishId = $_POST['publishId'];
      $btntext = $_POST['btntext'];
      
      $publsih_online = TRUE;
      $remove_online = FALSE;

      if($btntext == 'Publish Online'){
        $sql =  "UPDATE pgpublish SET publish_online = '$publsih_online' WHERE photographer_id = '$publishId'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        $a = "Publish Online";
      }else{
        $sql = "UPDATE pgpublish SET publish_online = '$remove_online' WHERE photographer_id = '$publishId'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        $a = "Remove Online";
      }

      if($result){
       echo $a;
      }else{
          echo "Failed";
      }

    }

    if(isset($_POST['rpublishId'])){
      $publishId = $_POST['rpublishId'];
      $btntext = $_POST['rbtntext'];

      $publsih_online = TRUE;
      $remove_online = FALSE;
      if($btntext == 'Remove From Live Site'){
        $sql =  "UPDATE pgpublish SET publish_online = '$remove_online' WHERE photographer_id = '$publishId'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        $a = "Remove Online";
      }else{
        $sql = "UPDATE pgpublish SET publish_online = '$publsih_online' WHERE photographer_id = '$publishId'";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        $a = "Publish Online";
      }

      if($result){
       echo $a;
      }else{
          echo "Failed";
      }

    }

    if(isset($_POST['addportfolioImg'])){
      $pg_publish_data_id = $_POST['pg_publish_data_id'];
      $pg_publish_photographer_id = $_POST['pg_publish_photographer_id'];



      $errors = array();
      $portfolioImg = array();

      $uploadDir = 'images/portfolio-images/';
      $allowTypes = array('jpg','png','jpeg','gif');
        
      foreach($_FILES['addmore']['name'] as $key=>$val){
        $filename=$_FILES['addmore']['name'][$key];
        $uniquesavename= rand(1000, 9999);
        $saveimage=$uniquesavename.".".strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        $targetFile = $uploadDir.$saveimage;;

        if(move_uploaded_file($_FILES["addmore"]["tmp_name"][$key], $targetFile)){
          $portfolioImg[] = "$saveimage";
                        
          $insertQrySplit[] = "('$saveimage')";
        }
        else {
          $errors[] = "Something went wrong- File - $filename";
        }
      }

      
      // ************ Portfolio Image Move into Folder ******** // 
      for($i=0;$i<=count($portfolioImg)-1;$i++){

        $sql = "INSERT INTO portfolioimages (photograperId, publishId, ipf_mages) 
         VALUES ('$pg_publish_photographer_id', '$pg_publish_data_id', '$portfolioImg[$i]')";
         $result = mysqli_query($conn, $sql);;
      }

      if($result){
        header("Location: ../dashboard/phtographerdetail.php?id=$pg_publish_photographer_id");
      }else{
          echo "Failed";
      }

      
    }

  }

  
?>