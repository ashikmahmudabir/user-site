
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
              <div class="col-md-8">
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
              <div class="col-md-4">
                 <div style="width:200px;height:200px;border-radius:50%;position:relative;overflow:hidden;margin-left: 59px;">
              
                 <?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($myname = mysqli_fetch_array($run_selectQuery)){
                               $imgPath = $myname["avatar"];
                               echo "<img  style='width:100%' src='images/$imgPath' >" ;
                           }
                        }
                     }
 
                     ?>
                     
                 </div>
                
               <form action="change_profile_pic_core.php" enctype="multipart/form-data" class="form-row" method="POST">
                   
                    <div class="col-md-8 pr-0">
                         <div class="custom-file mt-4">
                            <input type="file" class="custom-file-input" name="avatar">
                            <label for="" class="custom-file-label">Choose  Picture</label>  
                        </div>
                    </div>
                     <div class="col-md-4 pl-0">
                     <input class="btn btn-primary mt-4" style="border-radius:0px" type="submit" value="UPLOAD">
                     </div>  
     
                </form>   

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
             <form  action="change_core.php" method="POST">
                <tr>
                    <td><b>FIRST NAME</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="text" class="form-control" value="<?php 
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
               
                                    ?>" name="fname">
                   
                    
                    </td>  
                    

                </tr>
                <tr>
                    <td><b>LAST NAME</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="text" class="form-control" value="<?php 
                     
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

                     ?>" name="lname">
                   
                    </td>  
                   
                      
                </tr>
                <tr>
                    <td><b>PROFESSION</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="text" class="form-control" value="<?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($mySex = mysqli_fetch_array($run_selectQuery)){
                               echo  $mySex["usr_prof"];
                           }
                        }
                     }

                     ?>" name="usr_prof">
                   
                    
                    </td>
                    

                </tr>
                <tr>
                    <td><b>SEX</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="text" class="form-control" value="<?php 
                     
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

                     ?>" name="gender">
                   
                    
                    
                    </td>   
                 
                </tr>
                <tr>
                    <td><b>DISTRICT</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="text" class="form-control" value="<?php 
                     
                     if(isset($_COOKIE["currentUser"])){
                         $currentUser = $_COOKIE["currentUser"];
                        $select_query = "SELECT * FROM my_login_tb WHERE auth='$currentUser';";
                        $run_selectQuery = mysqli_query($connect,$select_query);
                        if($run_selectQuery==true){
                           while($mySex = mysqli_fetch_array($run_selectQuery)){
                               echo  $mySex["usr_dist"];
                           }
                        }
                     }

                     ?>" name="usr_dist">
                   
                    
                    
                    </td>   
                 
                </tr>
                <tr>
                    <td><b>USERNAME OR EMAIL ADDRESS</b></td>
                    <td>
                    <input style="border:none;box-shadow:none;" type="email" name="usr_mail"  value="<?php 
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
                    ?>" class="form-control">
                   
                    
                    </td>    
                   

                </tr>
            
                <tr>
                    <td><b>USER PASSWORD</b></td>
                    <td>
                        <a href="change_pwd.php">Change Password</a>
                    </td>    
                   

                </tr>
               
             
             </table>
             <input class="btn btn-primary px-5" type="submit" name="editButton" value="CHANGE INFORMATION">
             </form>
        </div>
    </div>
</section>



<?php  require_once("footer.php"); ?>


