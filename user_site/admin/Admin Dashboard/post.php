<?php

    require_once("config_ad.php");
    if(!isset($_COOKIE["crntAdn"])){
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
              <li class="nav-item mr-2 ">
              <button style="" class="uk-button uk-button-default uk-margin-small-right border-0" type="button" uk-toggle="target: #offcanvas-usage" ><span uk-icon="icon: table" class="uk-light"></span></button>
              </li>
                <li class="nav-item mr-4 ml-2">
               
                    <a class="nav-link text-light" href="#">
                        <i class="fa fa-home"></i> 
                        <?php
               
                $ad_query = "SELECT * FROM ad_login_tb;";
                $run_adQuery = mysqli_query($connect_db,$ad_query);
                if($run_adQuery==true){  
 
                while($fetch = mysqli_fetch_array($run_adQuery)){
                echo  $fetch["fname"]." ". $fetch["lname"];
                }
                } ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">
                        <i class="fa fa-bell"></i> 0
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
                           
                            </div>
                        </a></li>
                        <li><a href="#"> <?php
               
               $ad_query = "SELECT * FROM ad_login_tb;";
               $run_adQuery = mysqli_query($connect_db,$ad_query);
               if($run_adQuery==true){  

               while($fetch = mysqli_fetch_array($run_adQuery)){
               echo  $fetch["fname"]." ". $fetch["lname"];
               }
               } ?></a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="../logout_core.php">Logout</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</header>
<section>




    <div class="dashbaord-body-section">
   
<div class="container my-5">
    


<div id="offcanvas-usage" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <div  class="zIndex">
                <div style="background:none;" class="uk-card uk-card-default uk-card-body uk-width-1-1@s uk-light ">
                    <ul class="uk-nav-default uk-nav-parent-icon pt-4 pl-0" uk-nav>
                    <li><a href="index.php" class="font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: home"></span>ADMIN DASHBOARD</a></li>

                        
                        <li class=" mt-3">
                            <a href="user_list.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: users"></span>USERLIST HERE</a>
                            
                        </li>
                        <li class=" mt-3">
                            <a href="user_mangement.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: file-edit"></span> USER MANEGEMENT</a>
                        </li>
                        <li class=" mt-3">
                            <a href="post.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: commenting"></span> POST</a>
                           
                        </li>
                      
                       
                        <li class="mt-3 "><a href="post_list.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: list"></span> POST LISTS </a></li>
                        <li class="mt-3 "><a href="user_comment.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: comment"></span>USERS COMMENTS</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> Follow Facebook</a></li>
                        
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> Follow Twiiter</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: instagram"></span> Follow Instagram</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: linkedin"></span> Follow Linkedin</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: dribbble"></span> Follow Dribbble</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: github"></span> Follow Github</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: whatsapp"></span> Follow WhatsApp</a></li>
                        
                        <li class="mt-1">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: cog"></span> Setting</a>
                          
                        </li>
                        <li class="mt-3 pb-5 "><a href="../logout_core.php" class="font-size  font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>

                      
                    </ul>
            </div>
        </div>

    </div>
</div>
</div>
 </div>


<section>
<div class="container">
          <h2 class="text-center text-success font-weight-bold h1">
               <?php
               
               if(isset($_REQUEST["post-send"])){
                   echo "Post Already Gone (: ‍<a style='color:green;' href='post_list.php'>Check List</a>";
               }elseif(isset($_REQUEST["not-send"])){
                   echo "<font color='red'>Post Doesn't Send ):</font>";
               }

               ?>
          </h2>
     <form action="post_core.php" method="POST" style="width:800px;">
     <div class="form-group btn btn-lg btn-block btn-light">
     <h1 class="text-center font-weight-bold display-4 text-dark">WRITE POST HERE</h1>
     
     </div>
       <div class="form-group">
               <input type="text" name="admin_nm" id="admin_nm" placeholder="Admin Name" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <input type="text" name="post_title" id="post_title" placeholder="Post Title" class="form-control form-control-lg">
        </div>
        <div class="form-group">     
            <input type="text" name="post_desc" id="post_desc" placeholder="Post Describetion" class="form-control form-control-lg">
        </div>
        <div class="form-group">     
            <input type="text" name="post_link" id="post_link" placeholder="Link" class="form-control form-control-lg">
        </div>
        <div class="form-group">     
            <input type="url" name="post_url" id="post_url" placeholder="Link URL" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <textarea name="post" id="post" cols="30" rows="10" class="form-control form-control-lg" placeholder="Write Post"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-light btn-block" value="SEND POST">
        </div>
               
       
    </form>
     
  
    
</div>
</section>

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