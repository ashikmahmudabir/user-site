<?php
    require_once("../config.php");
    if(!isset($_COOKIE["currentUser"])){
        header("location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashoboard </title>
    <!-- Projects Favicon -->
    <link rel="shortcut icon" href="images/..." type="image/x-icon">
     <!-- BOOTSTRAP LINK CSS  -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- Font Awesome  -->
     <link rel="stylesheet" href="assets/fonts/css/all.min.css">
     <!-- Uikit Link CSS  -->
     <link rel="stylesheet" href="assets/css/uikit.min.css">
     <!-- Custom CSS  -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div style="background:#222;" class="dashboard-header text-light d-flex justify-content-between fixed-top">
        <div class="lefside-content">
            <ul class="navbar-nav navbar-expand-md">
              
                <li class="nav-item mr-4 ml-3">
                    <a class="nav-link text-light" href="../profile.php">
                        <i class="fa fa-home"></i> 
                        <?php 
                      if(isset($_COOKIE["currentUser"])){
                        $currentUser = $_COOKIE["currentUser"];
                       $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                       $run_selectQuery = mysqli_query($connect,$select_query);
                       if($run_selectQuery==true){
                          while($mySex = mysqli_fetch_array($run_selectQuery)){
                              echo  $mySex["fname"]." ".$mySex["lname"];
                          }
                       }
                    }
                    ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="notificatioin.php">
                        <i class="fa fa-bell"></i> <span>
                        
                        <?php
                           $post_query = "SELECT * FROM my_post_tb;";
                           $run_postQuery = mysqli_query($connect,$post_query);
                           if($run_postQuery==true){
                              echo $countMsg = mysqli_num_rows($run_postQuery);
                           }
                        ?>

                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="righside-content">
            <ul class="navbar-nav">
                <li class="nav-item mr-4 "><a uk-tooltip="Profile" class="nav-link text-light" href="#"><i class=" ml-2 fas fa-user-circle"></i></a></li>
                <div uk-dropdown="mode:hover" class="text-center" >
                    <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="../profile.php" target="_blank">
                            <div class="avatar_size" style=" width: 70px; height: 70px; border-radius: 50%; margin: auto;overflow:hidden">
                                <?php 
                                    if(isset($_COOKIE["currentUser"])){
                                        $myCookie =$_COOKIE["currentUser"];
                                        $img_query = "SELECT * FROM my_login_tb WHERE auth ='$myCookie';";
                                        $run_imgQuery = mysqli_query($connect,$img_query);
                                        if($run_imgQuery==true){
                                           while($fetch_img = mysqli_fetch_array($run_imgQuery)){
                                               $img_name = $fetch_img["avatar"];
                                               echo "<img src='../images/$img_name' style='width:100%'> ";
                                           }
                                        }
                                    }
                                
                                ?>
                            </div>
                        </a></li>
                        <li><a href="../profile.php"><?php 
                      if(isset($_COOKIE["currentUser"])){
                        $currentUser = $_COOKIE["currentUser"];
                       $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                       $run_selectQuery = mysqli_query($connect,$select_query);
                       if($run_selectQuery==true){
                          while($mySex = mysqli_fetch_array($run_selectQuery)){
                              echo  $mySex["fname"]." ".$mySex["lname"];
                          }
                       }
                    }
                    ?></a></li>
                        <li><a href="../change_place.php">Edit Profile</a></li>
                        <li><a href="../logout_core.php">Logout</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</header>
<section>

    <div class="dashbaord-body-section">
       <div class="row">
           <div class="col-md-2">
                <div style="width:15%;overflow:auto;height:100%;" class="position-fixed zIndex">
                <div class="uk-card uk-card-default bg-dark uk-card-body uk-width-1-1@s uk-light pt-5">
                    <ul class="uk-nav-default uk-nav-parent-icon pt-5" uk-nav>
                    <li><a href="index.php" class="font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: home"></span> DASHBOARD</a></li>

                        
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span>  Web Design Videos</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">BOOTSTRAP (CSS FRAMEWORK)</a></li>
                                <li><a href="#">UIKIT (CSS FRAMEWORK)</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span>  Web Development</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Marketplace</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Tips & Tricks</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-2">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Another Videos</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Data Entry</a></li>
                                <li><a href="#">SEO Optimizer</a></li>
                                <li><a href="#">Affiliate Marketing</a></li>
                                <li><a href="#">English Speaking</a></li>
                            </ul>
                        </li>
                       
                        <li class="mt-3 "><a href="notificatioin.php" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: bell"></span> Notifications </a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: youtube"></span> Follow Youtube</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> Follow Facebook</a></li>
                        
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> Follow Twiiter</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: instagram"></span> Follow Instagram</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: linkedin"></span> Follow Linkedin</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: dribbble"></span> Follow Dribbble</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: github"></span> Follow Github</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: whatsapp"></span> Follow WhatsApp</a></li>
                        
                        <li class="uk-parent mt-1">
                            <a href="#" class="font-size font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: cog"></span> Setting</a>
                            <ul class="uk-nav-sub">
                                <li><a target="_blank" href="../change_place.php">Edit Profile</a></li>
                                <li><a target="_blank" href="../change_pwd.php">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="mt-3 pb-5 "><a href="../logout_core.php" class="font-size  font-weight-bold"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>

                      
                    </ul>
            </div>
        </div>
           </div>

    <div class="col-md-10">
        <div class="mt-5 pt-5">
            <div class="custom-container">
               <div style="height:88vh;display:flex;justify-content:center;align-items:center;">
               <h1 class="text-center mb-4 display-4 font-weight-bold text-light text-uppercase">WELCOME TO DASHBOARD <?php 
                      if(isset($_COOKIE["currentUser"])){
                        $currentUser = $_COOKIE["currentUser"];
                       $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                       $run_selectQuery = mysqli_query($connect,$select_query);
                       if($run_selectQuery==true){
                          while($mySex = mysqli_fetch_array($run_selectQuery)){
                              echo  $mySex["fname"]." ".$mySex["lname"];
                          }
                       }
                    }
                    ?></h1>
               </div>
               
            </div>
           <!-- <div  class="ml-n5">
           <div uk-slideshow="ratio:7:3;animation:push;">
                    <div class="uk-position-relative uk-visible-toggle uk-light">
                        <ul class="uk-slideshow-items">
                            <li>
                                <img src="images/1.jpeg" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="images/2.jpg" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="images/3.jpg" alt="" uk-cover>
                            </li>
                        </ul>
                        <a href="#" class="uk-hidden-hover uk-position-center-left uk-position-small" uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a href="#" class="uk-hidden-hover uk-position-center-right uk-position-small" uk-slidenav-next uk-slideshow-item="next"></a>
                    </div>  
                </div>   
           </div>
        </div>
    </div>
<section>
    <div class="course-videos">
    <div class="row">
        <div class="">
            OUR COURSES VIDEOS
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex='0'>
                    <img src="images/2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
    -->


</div>


      </div>
    </div>
</section>


    <!-- jQuery CDN -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS  -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Uikit JS  -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <!-- Custom JS  -->
    <script src="js/script.js"></script>
</body>
</html>