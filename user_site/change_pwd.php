<?php  require_once("header.php") ?>

<div class="container">
<form action="change_pwd_core.php" class="my-5" method="POST">

<h4 class="text-center text-danger font-weight-bold">
  <?php 
    
    if(isset($_REQUEST["msg-1"])){
        echo "Required All Filed !";
    }elseif(isset($_REQUEST["gd-msg"])){
        echo "<font color='green'>Password Changed (:</font>";
    }
  
  ?>
</h4>

<div class="row justify-content-center">
     <div class="col-md-6">
     <div class="form-group btn btn-primary btn-block">
        <h3 class=" text-center text-uppercase py-4">Change Password</h3>
     </div>
         <div class="form-group">
             <input type="password" class="form-control" name="oldPwd" id="oldpwd" placeholder="Old Password">
         </div>
         <div class="form-group">
             <input type="password" class="form-control" name="newPwd" id="newPwd" placeholder="New Password">
         </div>
         <div class="form-group">
             <input type="password" class="form-control" name="cfmPwd" id="cfmPwd" placeholder="Confirm Password">
         </div>
         <div class="form-group">
             <input type="submit" class="btn btn-primary btn-block" name="changeButton" value="Change Password">
         </div>
     </div>  
    
</div>


</form>

</div>





<?php  require_once("footer.php") ?>