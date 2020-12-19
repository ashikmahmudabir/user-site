<?php require_once("header.php");  ?>

<br><br><br><br>
<section>
    <div class="signup-section">
        <div class="container">
            <div class="form-area py-5">
                <form action="signup_core.php" method="POST" >
                  <div class="row justify-content-center">
                    <div class="col-md-6 bg-light p-5 border border-primary shadow">
                   
                    <h2 class="text-uppercase text-primary h1 font-weight-bold mb-5">Sign Up To day</h2>
                       <div class="form-row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="First Name" name="fname">
                                </div>
                              </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                </div>
                              </div>
                         </div>
                       </div>
                       <div class="d-flex">
                       <div class="custom-control custom-switch mr-4 mb-3">
                           <input type="radio" name="usr_gender" id="male" class="custom-control-input" value="Male">  
                            <label for="male" class="custom-control-label">MALE</label>
                        </div>
                        <div class="custom-control custom-switch">
                           <input type="radio" name="usr_gender" id="female" class="custom-control-input" value="Female">   
                            <label for="female" class="custom-control-label">FEMALE</label>
                        </div>
                       </div>
                       <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-suitcase"></i>
                                    </span>
                                </div>
                                <input type="text" name="usr_prof"  placeholder="Profession (Optional)" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class=" fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <select class="custom-select" name="usr_dist" id="usr_dist">
                                    <option value="" selected>Select District</option>
                                    <option value="Gaibanda">Gaibnadha</option>
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Bogura">Bogura</option>
                                   
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" name="usr_mail"  placeholder="Email" class="form-control">
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
                            <input type="submit" value="SIGN UP" class="btn btn-primary btn-block">
                        </div>
                        <b style="color:green; text-align:center; font-weight:bold; display:block;">
                          <?php 
                          if(isset($_REQUEST["data-inserted"])){
                              echo "Registration Successfully Completed (: <a href='login.php' style='color:green'>Login</a>";
                          }elseif(isset($_REQUEST["datanot-inserted"])){
                              echo "<font color='red'>Check All Information</font>";
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

<br><br><br>
<div class="mt-3"></div>


<?php require_once("footer.php"); ?>