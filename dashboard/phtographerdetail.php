<?php include('connection.php');
  session_start();
  if(isset($_SESSION['email']))
  {
  	if(isset($_GET['id']))
  	{
  		$id=$_GET['id'];
  		$sql="select * from photographer where photographer_id='$id'";
  		$re=mysqli_query($conn,$sql);
  		$row=mysqli_fetch_assoc($re);
  	}
    
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <?php include('link.php');?>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"> -->
    <style>
    textarea {
        margin: 0px;
        padding: 0px !important;
        border: none;
        outline: 0px;
    }

    .i {
        float: right;
        font-size: 10px;
        color: purple
    }


    @media(max-width:768px) {
        #sidebar {

            position: relative;
            margin-top: 60px;
            max-height: 350px;
            min-height: 350px;


        }

        #maincontent {
            margin-top: 70px
        }

        #adminprofile {
            padding: 5px;
            width: 40px;
            height: 40px;
            margin-top: 2px
        }

        #topbar {
            margin-bottom: 0px
        }

        #barlink {
            margin: 10px;
            visibility: visible !important
        }
    }

    @media(min-width:769px) and (max-width: 2100px) {
        #sidebar {
            display: block !important;

        }
    }

    #editbackbtn:focus {
        outline: none;
    }

    #addpotfolioImg:focus {
        outline: none;
    }
    </style>
</head>


<body>
    <div class="container-fluid fixed-top">
        <div class="row" style="padding:0px">
            <?php include('topbar.php');?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php include('sidebar.php'); ?>

            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="maincontent">
                <?php
                    if($row['status'] == 'Approved'){ 
                ?>
                <div class="row">
                    <div class="col-md-3 col-lg-3 m-auto" id="pgprofile">
                        <a href="#" data-target="#editapprovepg" data-toggle="modal">
                            <button type="button" id="pgpublishbtn" class="btn form-control"
                                onclick="editpgdata()">Publish PG
                                Profile</button>
                        </a>
                    </div>
                </div>
                <?php }?>
                <div class="row" id="approvehead2" style="margin-top:30px">
                    <div class="col-sm-1">
                        <a href="approved.php">Back</a>
                    </div>
                    <div class="col-sm-10">
                        <h3 class="text-center">Photographer Id: <?php echo $row['photographer_id'];?></h3>
                    </div>

                </div>
                <div class="row" id="photographerdata" style="margin-top:30px">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-bordered">

                            <tr>
                                <th scope="col">Name</th>
                                <td id="td1"><?php echo $row['name'];?></td>
                            </tr>
                            <script>

                            </script>
                            <tr>
                                <th scope="col">Email</th>
                                <td><?php echo $row['email'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Phone</th>
                                <td><?php echo $row['phone'];?></td>
                            </tr>

                            <tr>
                                <th scope="col">Address</th>
                                <td><?php echo $row['address'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">city</th>
                                <td><?php echo $row['city'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">pincode</th>
                                <td><?php echo $row['pincode'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Adhar Card</th>
                                <td><a href='images/<?php echo $row['adhar_card'];?>'
                                        target='_blank'><?php echo $row['adhar_card'];?></a></td>
                            </tr>
                            <tr>
                                <th scope="col">Online Portfoilio</th>
                                <td><?php echo $row['website'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Instagram</th>
                                <td><?php echo $row['insta_link'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Facebook</th>
                                <td><?php echo $row['fb_link'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Twitter</th>
                                <td><?php echo $row['twitter_link'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Is Professional</th>
                                <td><?php echo $row['is_professional'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Experience</th>
                                <td><?php echo $row['experience'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Paid PG</th>
                                <td><?php echo $row['is_paid'];?></td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <table class="table table-bordered">
                            <tr>
                                <th scope="col">Studio</th>
                                <!----try---->
                                <td><select class="form-control"
                                        onchange="saveStudio(this.value,<?php echo $row['photographer_id'];?>)">
                                        <option value="Yes" <?php if($row['studio']=='Yes'){echo "selected";}?>>Yes
                                        </option>
                                        <option value="No" <?php if($row['studio']=='No'){echo "selected";}?>>No
                                        </option>
                                    </select></td>
                                <!----try end---->
                                <!--<td><?php //echo $row['studio'];?></td>-->
                            </tr>

                            <tr id="addtr">
                                <th scope="col">Studio Address</th>
                                <?php 
                          if($row['studio']=='Yes')
                          {?>
                                <td id="sadd"><textarea rows='3'
                                        onfocusout='savedata(this.value,<?php echo $row['photographer_id'];?>)'
                                        id='shootnote'><?php echo $row['std_address'];?></textarea><i
                                        class='i fa fa-pencil'></i>
                                </td>

                                <?php }
                      
                       else{echo "<td></td>";}
                       ?>
                            </tr>

                            <tr id="addtr">
                                <th scope="col">Studio City</th>
                                <?php 
                          if($row['studio']=='Yes')
                          {?>
                                <td id="sadd"><input type="text" id="studiocity"
                                        onfocusout='savecity(this.value,<?php echo $row['photographer_id'];?>)'
                                        value="<?php echo $row['std_city'];?>">
                                    <!--<i class='i fa fa-pencil'></i> -->
                                </td>

                                <?php }
                      
                           else{echo "<td></td>";}
                           ?>
                            </tr>
                            <tr id="addtr">
                                <th scope="col">Studio Pincode</th>
                                <?php 
                          if($row['studio']=='Yes')
                          {?>
                                <td id="sadd"><input type="text" id="studiopincode"
                                        onfocusout='savepin(this.value,<?php echo $row['photographer_id'];?>)'
                                        value="<?php echo $row['std_pincode'];?>">
                                    <!--<i class='i fa fa-pencil'></i> -->
                                </td>

                                <?php }
                      
                           else{echo "<td></td>";}
                           ?>
                            </tr>

                            <tr>
                                <th scope="col">Exp.Describe</th>
                                <td><?php echo $row['expdesc'];?></td>
                            </tr>



                            <tr>
                                <th scope="col">Can Work for hours</th>
                                <td><?php echo $row['workhours'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Specialist in(Categories)</th>
                                <td><?php echo $row['categories'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Camera Body</th>
                                <td><?php echo $row['camera_body'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Camera Lenses</th>
                                <td><?php echo $row['camera_lense'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Accessories</th>
                                <td><?php echo $row['accessory'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Transportation</th>
                                <td><?php echo $row['toption'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Portfolio</th>
                                <td>
                                    <?php 
                              $v= explode(" ", $row['category_image']);
                              
                             
                             $lev=count($v);
                             
                             for($i=0;$i<$lev;$i++)
                             { 
                                 $vid=$v[$i];
                                 $s="select * from multiple_image where img_id='$vid'";
                                 $rr=mysqli_query($conn,$s);
                                 $rrr=mysqli_fetch_assoc($rr);
                                 echo "<a target='_blank' href='multiple.php?id=".$v[$i]."'>".$rrr['name']."</a>&nbsp;&nbsp;";
                                 
                             }
                             //echo "<br>";
                             
                           
                              ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">Accept Booking</th>
                                <td><?php echo $row['accept_booking'];?></td>
                            </tr>
                            <tr>
                                <th scope="col">Status</th>
                                <td><?php echo $row['status'];?></td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="row" id="editprofiledata" style="display: none; margin-top: 15px;">
                    <?php 
                        $photographerId = $row['photographer_id'];
                        $sql1 = "SELECT * FROM pgpublish WHERE photographer_id = $photographerId";
                        
                        $result = mysqli_query($conn, $sql1);
                        $pgpublisdata = mysqli_fetch_assoc($result);
                        if($pgpublisdata['photographer_id'] == $photographerId){
                    ?>
                    <div class="d-flex">
                        <div class="col-sm-1 mb-4">
                            <a href="../dashboard/phtographerdetail.php?id=<?php echo $photographerId; ?>" id="back-btn-link">Back</a>
                        </div>
                        <div class="">
                            <input type="button" value="Edit" class="btn btn-primary" onclick="editpgpublishdata()"
                                name="editpgpublishdata" id="editpgpublishdata">
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <?php if($pgpublisdata['publish_online'] == '1'){ ?>
                            <input type="button" value="Remove From Live Site" class="btn btn-primary"
                                onclick="removeonline()" name="Publish Online" id="remove_online">
                            <?php }else{ ?>
                            <input type="button" value="Publish Online" class="btn btn-primary publish_online"
                                onclick="publishonline()" name="Publish Online" id="publish_online">
                            <?php } ?>
                        </div>
                    </div>


                    <div style="display: flex;" id="pgpublishdetails">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th scope="col">Profile Image</th>
                                    <td><img src="images/pg-images/<?php echo $pgpublisdata['photographer_image']; ?>"
                                            alt="Image Not Available" width="150"></td>
                                </tr>
                                <tr>
                                    <th scope="col">Rating</th>
                                    <td><?php echo $pgpublisdata['rating']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Reviews</th>
                                    <td><?php echo $pgpublisdata['review']; ?> Reviews</td>
                                </tr>
                                <tr>
                                    <th scope="col">About Photographer</th>
                                    <td><?php echo $pgpublisdata['about_photographer']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Portfolio Images</th>

                                    <td>
                                        <?php
                                            $img=explode(",",$pgpublisdata['portfolio_images']);
                                            $imgl=count($img)-1;
                                            for($i=0;$i<=$imgl;$i++)
                                            {
                                                // <button style='border-radius: 15px; font-size: 12px;'>x</button>
                                                echo "<img src='images/portfolio-images/".$img[$i]."' alt='Image Not Available' 
                                                width='100' style='min-height: 50px; max-height:50px; margin: 5px 5px 5px 5px;
                                                '>";
                                            }
                                        ?>
                                        <?php
                                            // $morepfSql = "SELECT GROUP_CONCAT(more_images) more_images, pgpublish_pgotographer_id 
                                            // FROM moreportfolioimg WHERE pgpublish_pgotographer_id = $photographerId";

                                            $morepfSql = "SELECT * FROM portfolioimages WHERE photograperId = $photographerId";
                                            
                                            $morepfRes = mysqli_query($conn, $morepfSql);
                                            while($morepfRow = mysqli_fetch_assoc($morepfRes)){
                                                echo "<img src='images/portfolio-images/".$morepfRow['ipf_mages']."' alt='Image Available' 
                                                width='100' style='min-height: 50px; max-height:50px; margin: 5px 5px 5px 5px;
                                                '>";
                                            }

                                            // $moreimg = explode(",",$morepfRow['ipf_mages']);

                                            
                                            // $countMoreImg = count($moreimg);
                                            
                                            // if($countMoreImg > 1){
                                            //     $moreimgl = count($moreimg)-1;
                                            //     for($j=0;$j<=$moreimgl;$j++)
                                            //     {
                                            //         // echo $moreimg[$j];
                                            //         echo "<img src='images/portfolio-images/".$moreimg[$j]."' alt='Image Available' 
                                            //         width='100' style='min-height: 50px; max-height:50px; margin: 5px 5px 5px 5px;
                                            //         '>";
                                            //     }
                                            // }
                                        ?>
                                        <button style="font-size: 2rem; border: none; background: transparent;"
                                            id="addpotfolioImg" data-toggle="modal" data-target="#addportfolioImages">
                                            <!-- <i class="fa-solid fa-circle-plus"></i> -->
                                            <i class="bi bi-plus-circle-fill"></i>
                                        </button>

                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- Add More Portfolio Images Model Box -->

                        <div class="modal fade" id="addportfolioImages" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Add Portfolio Images</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="pgpublishaction.php" method="POST" enctype="multipart/form-data"
                                            style="padding: 0px;">
                                            <input type="hidden" name="pg_publish_data_id"
                                                value="<?php echo $pgpublisdata['pg_publish_id']; ?>">
                                            <input type="hidden" name="pg_publish_photographer_id"
                                                value="<?php echo $pgpublisdata['photographer_id']; ?>">
                                            <div class="form-group">
                                                <label class="control-label">Add More Photos</label>
                                                <input type="file" class="form-control input-lg" name="addmore[]"
                                                    multiple>
                                            </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success"
                                            name="addportfolioImg">Add</button>
                                            
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th scope="col">What do you love about your job?</th>
                                    <td><?php echo $pgpublisdata['Q1']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">What types of shoots have you done and how did you make them
                                        special?</th>
                                    <td><?php echo $pgpublisdata['Q2']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Awards, honours and recognitions received</th>
                                    <td><?php echo $pgpublisdata['Q3']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">A fun fact about you</th>
                                    <td><?php echo $pgpublisdata['Q4']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="display: none;" id="editabledata">
                        <div class="col-sm-1 mb-4" style="margin-top: -3%;">
                            <button style="border: none; background: transparent; color: #529EF0;" id="editbackbtn"
                                onclick="editback()">
                                Back
                            </button>

                        </div>
                        <form action="pgpublishaction.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="pg_publish_id"
                                value="<?php echo $pgpublisdata['pg_publish_id'];?>">
                            <input type="hidden" id="EphotographerId" name="EphotographerId"
                                value="<?php echo $pgpublisdata['photographer_id'];?>">

                            <!-- <div class="row"> -->
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">Photographer Image</label>
                                    <input type="file" class="form-control"
                                        value="<?php echo $pgpublisdata['photographer_image']; ?>" id="new-pgprofileImg"
                                        name="new-pgprofileImg" onchange="return profileImgvalid()"
                                        accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp,image/tiff">
                                    <input type="hidden" name="old-pgprofileImg"
                                        value="<?php echo $pgpublisdata['photographer_image']; ?>">
                                    <span id="pgprofileImgErr"></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">Rating</label>
                                    <input type="text" class="form-control" name="Erating"
                                        value="<?php echo $pgpublisdata['rating']; ?>"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 53" maxlength="1"
                                        onpaste="return false">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">Reviews</label>
                                    <input type="text" class="form-control"
                                        value="<?php echo $pgpublisdata['review']; ?>"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3"
                                        name="Ereviews">

                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">Portfolio Images</label>
                                    <input type="file" class="form-control" id="portfolioImg" name="new-portfolioImg[]"
                                        multiple onchange="return portfolioimgvalid()"
                                        accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp,image/tiff">
                                    <input type="hidden" name="old-portfolioImg"
                                        value="<?php echo $pgpublisdata['portfolio_images']; ?>">
                                    <span id="portfolioImgErr"></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">About PhotoGrapher</label>
                                    <input type="text" class="form-control"
                                        value="<?php echo $pgpublisdata['about_photographer']; ?>"
                                        name="Eaboutphotographer">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <h4>More about <?php echo $row['name']; ?>...</h4>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">What do you love about your job?</label>
                                    <input type="text" class="form-control" name="EQ1"
                                        value="<?php echo $pgpublisdata['Q1']; ?>">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">What types of shoots have you done and how did you make them
                                        special?</label>
                                    <input type="text" class="form-control" name="EQ2"
                                        value="<?php echo $pgpublisdata['Q2']; ?>">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">Awards, honours and recognitions received</label>
                                    <input type="text" class="form-control" name="EQ3"
                                        value="<?php echo $pgpublisdata['Q3']; ?>">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="single-input-field">
                                    <label for="">A fun fact about you</label>
                                    <input type="text" name="EQ4" class="form-control"
                                        value="<?php echo $pgpublisdata['Q4']; ?>">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">

                                <input type="submit" class="btn btn-primary" value="Submit" name="pgpublisheditdata" />
                            </div>
                            <!-- </div> -->
                        </form>
                    </div>

                    <?php }else{
                ?>
                    <div class="col-sm-1 mb-4">
                        <a href="../dashboard/phtographerdetail.php?id=<?php echo $photographerId; ?>">Back</a>
                    </div>
                    <form action="pprofiles.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="photographername" value="<?php echo $row['name'];?>">
                        <input type="hidden" name="photographerId" value="<?php echo $row['photographer_id'];?>">

                        <!-- <div class="row"> -->
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">Add Photographer Image</label>
                                <input type="file" class="form-control" placeholder="Selct Image" id="pgprofileImg"
                                    name="pgprofileImg" onchange="return profileImgvalid()"
                                    accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp,image/tiff">
                                <span id="pgprofileImgErr"></span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">Give Rating</label>
                                <input type="text" class="form-control" name="rating"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 53" maxlength="1"
                                    onpaste="return false" placeholder="Give rating to the photrographer out of 5">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">Reviews</label>
                                <input type="text" class="form-control" placeholder="Give review to the photographer"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="3"
                                    name="reviews">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">Portfolio Images</label>
                                <input type="file" class="form-control" id="portfolioImg" name="portfolioImg[]" multiple
                                    onchange="return portfolioimgvalid()"
                                    accept="image/jpeg,image/jpg,image/gif,image/png,image/bmp,image/tiff">
                                <span id="portfolioImgErr"></span>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">About PhotoGrapher</label>
                                <input type="text" class="form-control" placeholder="about photographer"
                                    name="aboutphotographer">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <h4>More about <?php echo $row['name']; ?>...</h4>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">What do you love about your job?</label>
                                <input type="text" class="form-control" name="Q1"
                                    placeholder="What do you love about your job">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">What types of shoots have you done and how did you make them
                                    special?</label>
                                <input type="text" class="form-control" name="Q2"
                                    placeholder="What types of shoots have you done and how did you make them special?">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">Awards, honours and recognitions received</label>
                                <input type="text" class="form-control" name="Q3"
                                    placeholder="Awards, honours and recognitions received">
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="single-input-field">
                                <label for="">A fun fact about you</label>
                                <input type="text" name="Q4" class="form-control" placeholder="A fun fact about you">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <input type="submit" class="btn btn-primary" value="Submit" name="pgpublishdata" />
                        </div>
                        <!-- </div> -->
                    </form>
                    <?php }?>
                </div>
                <button onclick="getdata()" id="getexcel">Get Excel</button>


            </div>




        </div>
    </div>

    <script>
    function getdata() {
        $("#photographerdata").table2excel({
            filename: "photographerdata.xls"
        });
    }

    function savedata(value, id) {

        var id2 = id;
        var val2 = value;

        $.ajax({
            url: "action.php",
            type: "POST",
            chache: false,
            data: {
                val2: val2,
                id2: id2
            },
            success: function(response) {

                $("#shootnote").html(response);

            }
        });
    }


    function savecity(value, id) {

        var id3 = id;
        var val3 = value;

        $.ajax({
            url: "action.php",
            type: "POST",
            chache: false,
            data: {
                val3: val3,
                id3: id3
            },
            success: function(response) {

                $("#studiocity").val(response);

            }
        });
    }



    function savepin(value, id) {

        var id4 = id;
        var val4 = value;

        $.ajax({
            url: "action.php",
            type: "POST",
            chache: false,
            data: {
                val4: val4,
                id4: id4
            },
            success: function(response) {

                $("#studiopincode").val(response);

            }
        });
    }


    function saveStudio(value, id) {

        var sval = value;
        var sid = id;
        if (sval == 'No') {
            document.getElementById("shootnote").disabled = true;

            $.ajax({
                url: "action.php",
                type: "POST",
                chache: false,
                data: {
                    svalue: sval,
                    sid: sid
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);

                },
                error: function(response) {
                    console.log("error");
                }
            });
        }
        if (sval == 'Yes') {

            // 
            $.ajax({
                url: "action.php",
                type: "POST",
                chache: false,
                data: {
                    svalue: sval,
                    sid: sid
                },
                dataType: "json",
                success: function(response) {
                    document.getElementById("shootnote").disabled = false;
                    /*  // console.log(response);
                      document.getElementById('addtr').innerHTML="";
                      var th=document.createElement('th');
                      th.setAttribute('scope','col');
                      th.innerHTML="Studio Address";
                      document.getElementById('addtr').appendChild(th);
                      var td=document.createElement('td');
                      document.getElementById('addtr').appendChild(td);
                      var txt=document.createElement('textarea');
                      txt.setAttribute('rows','3');
                      txt.setAttribute("onfocusout","savedata(this.value,'<?php //echo $row['photographer_id'];?>')");
                      var i=document.createElement('i');
                      i.setAttribute('class','i fa fa-pencil');
                      i.setAttribute('id','shootnote');
                      document.getElementById('addtr').appendChild(i);*/


                },
                error: function(response) {
                    console.log("error");
                }
            });
        }

    }
    </script>
    <script>
    $(document).ready(function() {
        $("#barlink").click(function() {
            $("#sidebar").toggle();
        });
    });
    </script>
    <script>
    function editpgdata() {
        document.getElementById("photographerdata").style.display = "none";
        document.getElementById("approvehead2").style.display = "none";
        document.getElementById("getexcel").style.display = "none";
        document.getElementById("editprofiledata").style.display = "block";
        document.getElementById("pgprofile").style.display = "none";
    }

    function profileImgvalid() {
        var fileInput = document.getElementById('pgprofileImg');

        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.bmb|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(filePath)) {
            var imgerr = document.getElementById('pgprofileImgErr');

            imgerr.innerHTML = 'Sorry, only accepted files are .jpg,.png,.bmb,.gif,.jpeg';
            imgerr.style.color = 'red';
            fileInput.value = '';
            return false;
        }

    }

    function portfolioimgvalid() {
        var fileInput = document.getElementById('portfolioImg');

        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.bmb|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(filePath)) {
            var imgerr = document.getElementById('portfolioImgErr');

            imgerr.innerHTML = 'Sorry, only accepted files are .jpg,.png,.bmb,.gif,.jpeg';
            imgerr.style.color = 'red';
            fileInput.value = '';
            return false;
        }

    }

    function editpgpublishdata() {
        document.getElementById("pgpublishdetails").style.display = "none";
        document.getElementById("editabledata").style.display = "block";
        document.getElementById("editpgpublishdata").style.display = "none";
        document.getElementById("back-btn-link").style.display = "none";
        var pubOnlinebtn = document.getElementById("publish_online");
        if (pubOnlinebtn != null) {
            document.getElementById("publish_online").style.display = "none";
        } else {
            document.getElementById("remove_online").style.display = "none";
        }

        // var backBtnlink = document.getElementById("back-btn-link");
        // if(backBtnlink!=null)

    }

    function publishonline() {
        var pubOnlinebtn = document.getElementById("publish_online");
        var publishId = document.getElementById("EphotographerId").value;
        var btntext = document.getElementById("publish_online").value;



        $.ajax({
            url: 'pgpublishaction.php',
            type: 'post',
            data: {
                publishId: publishId,
                btntext: btntext
            },
            success: function(data) {
                // console.log(data);
                if (pubOnlinebtn.value == 'Publish Online') {
                    pubOnlinebtn.value = "Remove From Live Site";
                } else {
                    pubOnlinebtn.value = "Publish Online";
                };
            }
        });

    }

    function removeonline() {
        var removeOnlinebtn = document.getElementById("remove_online");
        var rpublishId = document.getElementById("EphotographerId").value;
        var rbtntext = document.getElementById("remove_online").value;

        // alert(publishId);
        $.ajax({
            url: 'pgpublishaction.php',
            type: 'post',
            data: {
                rpublishId: rpublishId,
                rbtntext: rbtntext
            },
            success: function(data) {
                // console.log(data);
                if (removeOnlinebtn.value == 'Remove From Live Site') {
                    removeOnlinebtn.value = "Publish Online";
                } else {
                    removeOnlinebtn.value = "Remove From Live Site";
                }

            }
        });

    }

    function editback() {
        document.getElementById("pgpublishdetails").style.display = "flex";
        // document.getElementById("editabledata").style.display = "block";
        document.getElementById("editpgpublishdata").style.display = "block";
        document.getElementById("back-btn-link").style.display = "block";
        var pubOnlinebtn = document.getElementById("publish_online");
        if (pubOnlinebtn != null) {
            document.getElementById("publish_online").style.display = "block";
        } else {
            document.getElementById("remove_online").style.display = "block";
        }
    }
    </script>
</body>

</html>
<?php
  }
  else {
	echo "<script>alert('Please login First');
                  window.location='index.php';</script>";
}
?>