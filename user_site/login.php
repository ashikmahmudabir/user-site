<?php 

require_once("header.php"); 

if(isset($_COOKIE["currentUser"])){
    header("location: profile.php");
}




?>

<br><br><br><br>
<section>
    <div class="signup-section">
        <div class="container">
            <div class="form-area py-5">
                <form action="login_core.php" method="POST" >
                  <div class="row justify-content-center">
                    <div class="col-md-6 bg-light p-5 border border-primary shadow">
                    <h2 class="text-uppercase text-primary h1 font-weight-bold mb-5">Login</h2>
                      

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="usr_name" id="Email_addr" placeholder="Username Or Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" name="usr_pwd"  placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
                        </div>
                        <a href="signup.php">Need Account</a>
                        <b style="color:red;text-align:center;font-weight:bold;display:block;">
                            <?php
                            
                             if(isset($_REQUEST["wrong_info"])){
                                 echo "Username or Password invalid";
                             }

                            ?>
                        </b>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</section>

<br><br><br><br>
<div class="mt-5"></div>


<?php require_once("footer.php"); ?>