
<?php  
require_once("header.php"); 

if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
}




?>


<section>
    <div class="home-section py-5">
        <div class="container">
           <div class="row">
           <h1 class="display-4 mb-5">Profile Of   <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["fname"]." ". $myname["lname"];
                           }
                        }
                     }

                     ?></h1>
              <div class="col-md-9">
                <div class="user_name">
                    <h1 class="font-weight-bold">This Is Profile Of <?php   if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["fname"]." ". $myname["lname"];
                           }
                        }
                      } ?></h1>
                </div>
              </div>
              <div class="col-md-3">
                 <div style="width:200px;height:200px;border-radius:50%;position:relative;overflow:hidden;">
                 <a  href="change_place.php">
                 <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                       
                        $currentUser = $_COOKIE["currentUser"] ;
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($imgName = mysqli_fetch_array($run_selectQuery)){

                            $img_nm = $imgName["avatar"];
                              
                                echo "<img style='width:100%' src='images/$img_nm' >" ;
                           }
                        }
                        }
                     

                     ?>
                 </div>
                 </a>
              </div>
            </div>
            <h1>Bio Data   <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["fname"]." ". $myname["lname"];
                           }
                        }
                     }

                     ?></h1>
             <table class="table">
                <tr>
                    <td><b>FIRST NAME</b></td>
                    <td>
                    
                    <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["fname"];
                           }
                        }
                     }

                     ?>
                    
                    </td>  
                    <td><a href="change_place.php">Change</a></td> 

                </tr>
                <tr>
                    <td><b>LAST NAME</b></td>
                    <td>
                    <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["lname"];
                           }
                        }
                     }

                     ?>
                    </td>  
                    <td><a href="change_place.php">Change</a></td> 
                      
                </tr>
                <tr>
                    <td><b>FULL NAME</b></td>
                    <td>
                    
                    <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["fname"].' '. $myname["lname"];
                           }
                        }
                     }

                     ?>
                    
                    </td>
                    <td><a href="change_place.php">Change</a></td> 

                </tr>
                <tr>
                    <td><b>PROFESSION</b></td>
                    <td>
                    
                    <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["usr_prof"];
                           }
                        }
                     }

                     ?>
                    
                    </td>
                    <td><a href="change_place.php">Change</a></td> 

                </tr>
                <tr>
                    <td><b>SEX</b></td>
                    <td>
                    
                     <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($mySex = mysqli_fetch_array($run_selectQuery)){
                               echo  $mySex["usr_gender"];
                           }
                        }
                     }

                     ?>
                    
                    
                    </td>   
                    <td><a href="change_place.php">Change</a></td> 
                </tr>
                <tr>
                    <td><b>DISTRICT</b></td>
                    <td>
                    
                    <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               echo  $myname["usr_dist"];
                           }
                        }
                     }

                     ?>
                    
                    </td>
                    <td><a href="change_place.php">Change</a></td> 

                </tr>
                <tr>
                    <td><b>USERNAME OR EMAIL ADDRESS</b></td>
                    <td>

                    <?php 
                      if(isset($_COOKIE["currentUser"])){
                        $currentUser = $_COOKIE["currentUser"];
                       $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                       $run_selectQuery = mysqli_query($connect,$select_query);
                       if($run_selectQuery==true){
                          while($mySex = mysqli_fetch_array($run_selectQuery)){
                              echo  $mySex["usr_mail"];
                          }
                       }
                    }
                    ?>
                    
                    </td>    
                    <td><a href="change_place.php">Change</a></td> 

                </tr>
                <tr>
                    <td><b>PASSWORD</b></td>
                    <td>(USER PASSWORD  HIDDEN)</td>    
                    <td><a href="change_pwd.php">Change Password</a></td>    
                </tr>
             </table>
            
        </div>

        <h2 class="text-center text-success font-weigh-bold">
            <?php
                if(isset($_REQUEST["updated"])){
                    echo "Information Successfully Changed (:";
                }
            ?>
        </h2>

    </div>
</section>



<?php  require_once("footer.php"); ?>


