<?php

    require_once("config_ad.php");
  

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
              <li class="nav-item ">
              <button style="" class="uk-button uk-button-default uk-margin-small-right border-0" type="button" uk-toggle="target: #offcanvas-usage" ><span uk-icon="icon: table" class="uk-light"></span></button>
              </li>
                <li class="nav-item mr-4">
               
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
                        <i class="fa fa-bell"></i> <span>
                        <?php
                                $host = "localhost";
                                $db_usrnm = "newtest";
                                $db_pwd = "newtest";
                               $db_nm = "login_register";
               
                               $connect = mysqli_connect($host,$db_usrnm,$db_pwd,$db_nm);
                               if($connect==false){
                                echo "Error Establishing Database Connection";
                               }
                              $all_data_query = "SELECT * FROM my_post_tb;";
                              $run_all_dataQuery = mysqli_query($connect,$all_data_query);
                              if($run_all_dataQuery==true){
                                 echo $count_rows_db = mysqli_num_rows($run_all_dataQuery);
                                  
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
                        <li><a href="#" target="_blank">
                            <div class="avatar_size" style=" width: 70px; height: 70px; border-radius: 50%; margin: auto;overflow:hidden">
                           
                            </div>
                        </a></li>
                        <li><a href="../profile.php"> <?php
               
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
                        <li class="mt-3 "><a href="user_comment.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: comments"></span> USER COMMETS</a></li>
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
<h4 class="text-center font-weight-bold">
    <?php 
        if(isset($_REQUEST["data-deleted"])){
            echo "<font color='green'>Data successfully Deleted!</font>";
        }elseif(isset($_REQUEST["data_updated"])){
            echo "<font color='green'>Data Successfully Edited !</font>";
        }
    ?>
</h4>
<h1 class="text-center text-light">ALL POSTS HERE</h1>
                            <a class="text-right d-block text-light h3" href="post.php">Post</a>
               <table style="width:1500px"  class="table table-striped table-bordered text-light">
                <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>DB ID</th>
                        <th>ADMIN NAME</th>
                        <th>POST TITLE</th>
                        <th>POST DESCRIBETION</th>
                        <th>POST LINK</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <?php
                
      

                $host = "localhost";
                 $db_usrnm = "newtest";
                 $db_pwd = "newtest";
                $db_nm = "login_register";

                $connect = mysqli_connect($host,$db_usrnm,$db_pwd,$db_nm);
                if($connect==false){
                 echo "Error Establishing Database Connection";
                }
                $all_data_query = "SELECT * FROM my_post_tb;";
                $run_all_dataQuery = mysqli_query($connect,$all_data_query);
                if($run_all_dataQuery==true){
                    $slno = 1;
                    $db_Rows = mysqli_num_rows($run_all_dataQuery);
                    if($db_Rows==0){
                        ?>
                        
                        <a href="post.php" style="display:block;position:absolute;left:35%;bottom:10%; text-decoration:none;color:white; font-size:5rem; border:1px solid white;padding:15px 100px;border-radius:150px;">POST PLEASE</a>
                        
                    <?php

                    }else{
                    while($fetch_allData = mysqli_fetch_array($run_all_dataQuery)){
                    ?>  
                    <tbody>
                    <tr>
                        <td><?php  echo $slno; $slno++; ?></td>
                        <td><?php echo $fetch_allData["id"]  ?></td>
                        <td><?php echo $fetch_allData["admin_nm"]  ?></td>
                        <td><?php echo $fetch_allData["post_title"]  ?></td>
                        <td><?php echo $fetch_allData["post_desc"]  ?></td>
                        <td><?php echo $fetch_allData["post_link"]  ?></td>
                        <td><a class="text-light" href="post_edit_place.php?edit_id=<?php echo $fetch_allData["id"]  ?>">Edit</a> | <a onclick="return confirm('Are you sure')" class="text-light" href="dlt_post_core.php?dlt_id=<?php echo $fetch_allData["id"];   ?> ">Delete</a></td>
                    </tr>
                </tbody>
                    
                    


                <?php
                }
                }
            }
                 ?>
               
               </table>




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