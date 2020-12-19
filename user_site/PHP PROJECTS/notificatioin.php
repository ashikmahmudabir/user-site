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
     <style>
        body{
            margin:0;
            background:linear-gradient(#fffffff0,#ffffffbd),url(images/2.jpg);
            justify-content:center;
            align-items:center;
            display:flex;
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center center;
            background-attachment:fixed;
        }
     </style>
</head>
<body>

<header>
    <div style="background:#222;" class="dashboard-header text-light d-flex justify-content-between fixed-top">
        <div class="lefside-content">
            <ul class="navbar-nav navbar-expand-md">
            <li class="nav-item mr-2 ">
              <button style="" class="uk-button uk-button-default uk-margin-small-right border-0" type="button" uk-toggle="target: #offcanvas-usage" ><span uk-icon="icon: table" class="uk-light"></span></button>
              </li>
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
                        <i class="fa fa-bell"></i><span>
                        <?php
                           $post_query = "SELECT * FROM my_post_tb;";
                           $run_postQuery = mysqli_query($connect,$post_query);
                           if($run_postQuery==true){
                              echo $countMsg = mysqli_num_rows($run_postQuery);
                           } ?>
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
    <div class="container my-5">
<div id="offcanvas-usage" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <div  class="zIndex">
                <div style="background:none;" class="uk-card uk-card-default uk-card-body uk-width-1-1@s uk-light ">
                <ul class="uk-nav-default uk-nav-parent-icon pt-3" uk-nav>
                    <li><a href="index.php" class="font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: home"></span> DASHBOARD</a></li>

                        
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span>  Web Design Videos</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">BOOTSTRAP (CSS FRAMEWORK)</a></li>
                                <li><a href="#">UIKIT (CSS FRAMEWORK)</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span>  Web Development</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Marketplace</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-3">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Tips & Tricks</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent mt-2">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: play-circle"></span> Another Videos</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Data Entry</a></li>
                                <li><a href="#">SEO Optimizer</a></li>
                                <li><a href="#">Affiliate Marketing</a></li>
                                <li><a href="#">English Speaking</a></li>
                            </ul>
                        </li>
                       
                        <li class="mt-3 "><a href="notificatioin.php" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: bell"></span> Notifications </a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: youtube"></span> Follow Youtube</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> Follow Facebook</a></li>
                        
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> Follow Twiiter</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: instagram"></span> Follow Instagram</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: linkedin"></span> Follow Linkedin</a></li>

                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: dribbble"></span> Follow Dribbble</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: github"></span> Follow Github</a></li>
                        <li class="mt-3 "><a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: whatsapp"></span> Follow WhatsApp</a></li>
                        
                        <li class="uk-parent mt-1">
                            <a href="#" class="font-size font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: cog"></span> Setting</a>
                            <ul class="uk-nav-sub">
                                <li><a target="_blank" href="../change_place.php">Edit Profile</a></li>
                                <li><a target="_blank" href="../change_pwd.php">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="mt-3 pb-5 "><a href="../logout_core.php" class="font-size  font-weight-bold pl-0"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>

                      
                    </ul>
            </div>
        </div>

    </div>
</div>
</div>
</div>


    
 <?php
 
  $post_query = "SELECT * FROM my_post_tb;";
  $run_postQuery = mysqli_query($connect,$post_query);
  if($run_postQuery==true){
      $slNo =1;
	  $db_rows = mysqli_num_rows($run_postQuery);
	 if($db_rows==0){
		 ?>
		 <div style="width:100%;height:95vh;display:flex;justify-content:center;align-items:center;">
			<div style="border:4px groove black;padding:50px; border-radius:150px;">
				<h1 style="text-align:center;color:black;font-size:6rem;"><?php echo $db_rows; ?> Empty Notifications</h1>
			</div>
		 </div>
		   
		 
<?php
	 }else{
		 
      while($fetch_post = mysqli_fetch_array($run_postQuery)){
	
	 ?>
		  
	  
   
    <div class="container mb-5">
        <table class="table table-bordered table-dark">
            <tr>
                <td><b>POST NUMBER</b></td>
                <td><?php echo $slNo; $slNo++; ?></td>
            </tr>
            <tr>
                <td><b>POST TITLE</b></td>
                <td><?php echo $fetch_post["post_title"]; ?></td>
            </tr>
            <tr>
                <td><b>POST SUBTITLE</b></td>
                <td><?php echo $fetch_post["post_desc"]; ?></td>
            </tr>
            <tr>
                <td><b>POST AUTHOR</b></td>
                <td><?php echo $fetch_post["admin_nm"]; ?></td>
            </tr>
            <tr>
                <td><b>POST LINK</b></td>
                <td><a href="<?php echo $fetch_post["post_url"]; ?>"><?php echo $fetch_post["post_link"]; ?></a></td>
            </tr>
            <tr>
                <td><b>POST DATE</b></td>
                <td><?php echo $fetch_post["post_date"]; ?></td>
            </tr>
        </table>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                      <h1> <?php echo $fetch_post["post_title"]; ?> </h1>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p class="text-justify"><?php echo $fetch_post["post"]; ?></p>
                        </div>
                    </div>

                  <h3 class="text-center text-success font-weight-bold">
                  <?php
                        if(isset($_REQUEST["comment-yes"])){
                            echo "Comment Already Gone !";
                        }elseif(isset($_REQUEST["comment-no"])){
							echo "<font color='red'> All Filled Required</font>";
						}

                   ?>
                  </h3>
               

					<div class="card-footer">
						<button data-target="#mymodal" data-toggle="modal" class="btn btn-secondary btn-lg">Comment</button>
					<form action="comment_core.php" method="POST">	
						<div id="mymodal"  class="modal" >
							<div class="modal-dialog ">
								<div class="modal-content bg-dark text-light">
									<div class="modal-header">
										<h2 class="text-light">Comments Please</h2>
										<button class="close text-light h1" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
										  <input type="email" class="form-control form-control-lg" placeholder="Email Address" name="usr_cmt_mail"/>
										</div>
										<div class="form-group">
										  <input type="text" class="form-control form-control-lg" placeholder="Subject" name="usr_cmt_sbjt"/>
										</div>
										<div class="form-group">
										<textarea rows="5" class="form-control form-control-lg" placeholder="Comment" name="usr_cmt_cmts"></textarea>
										  
										</div>
									
									</div>
									<div class="modal-footer">
										<button data-dismiss="modal" class="btn btn-secondary btn-lg">Close</button>
										<button type="submit" class="btn btn-danger btn-lg">Comment</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					</div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    }
  }
  }
 ?>



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