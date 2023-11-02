<?php

include('dashboard/connection.php');
if(isset($_POST['checked_location'])){
    $checkedlocation = $_POST['checked_location'];
    $location =  implode("','", $checkedlocation);
    
    
    $sql = "SELECT photographer.*, pgpublish.* FROM photographer LEFT JOIN pgpublish ON 
    pgpublish.photographer_id = photographer.photographer_id 
    WHERE photographer.status='Approved' AND photographer.city IN ('$location')";
    $result = mysqli_query($conn, $sql) or die("Query FAiled");
    while($row = mysqli_fetch_assoc($result)){
    
    ?>
    <div class="col-lg-4 col-sm-6 p-0">
                <div class="portfolio-box photogrpherprofile">
                    <div class="portfolio-item set-bg" data-setbg=""><img
                    src="dashboard/images/pg-images/<?php echo $row['photographer_image']; ?>" height="310"></div>
                    <h6><a href="p-profile/<?php echo $row['pg_profile_page']; ?>"><?php echo $row['name']; ?></a></h6>
                    <p><?php echo $row['city']; ?></p>
                </div>
            </div>
    <?php }

}

if(isset($_POST['shootbook'])){
    $name = $_POST['cutomerName'];
    $address = $_POST['Address'];
    $email = $_POST['email'];
    if(!empty($_POST['shoot_type_p'])){
        $shoot_type = $_POST['shoot_type_p'];
    }else{
        $shoot_type = $_POST['shoot_type_b'];
    }
    
    $shootaddress = $_POST['shootaddress'];
    $start_date = $_POST['start_date'];
    $phoneNo = $_POST['phoneNo'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO book_shoot(customer_name, customer_address, customer_email, customer_mobile, shoot_functon, 
    book_start_date, book_end_date) 
    VALUES('$name', '$address', '$email', '$phoneNo', '$shoot_type', '$start_date', '$end_date')";

    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "Success";
        header("Location: p-profile/Ram Kishan774.html");
    }else{
        echo "Failed";
    }
}


?>