<?php
//PASSWORD CHANGES CODE HERE
require_once("config.php");
if(isset($_COOKIE["currentUser"])){
      
 $oldpwd = $_REQUEST["oldPwd"];
 $newPwd = $_REQUEST["newPwd"];
 $cfmPwd = $_REQUEST["cfmPwd"];
 $currentUser = $_COOKIE["currentUser"];
 if($oldpwd==""){
     header("location: change_pwd.php?msg-1");
 }elseif($newPwd==""){
    header("location: change_pwd.php?msg-1");
 }elseif($cfmPwd==""){
    header("location: change_pwd.php?msg-1");
 }else{


    $AllData_query = "SELECT * FROM my_login_tb WHERE auth ='$currentUser';";
    $run_queryAllData = mysqli_query($connect,$AllData_query);
    if($run_queryAllData==true){
        while($fetchMail = mysqli_fetch_array($run_queryAllData)){
            $crnUsrMail =  $fetchMail["usr_mail"];
        }
    }
    $oldAuth = md5(sha1($crnUsrMail.$oldpwd));
    if($currentUser==$oldAuth && $newPwd==$cfmPwd){
       $createNewAuth = md5(sha1($crnUsrMail.$cfmPwd));
       $newEncritypedPwd = md5(sha1($cfmPwd));
       $pwdChangeQuery = "UPDATE my_login_tb SET usr_pwd='$newEncritypedPwd', auth='$createNewAuth'; ";
       $run_pwdchangeQuery = mysqli_query($connect,$pwdChangeQuery);
       if($run_pwdchangeQuery==true){
           setcookie("currentUser","$createNewAuth",time()-(86400*7));
           setcookie("currentUser","$createNewAuth",time()+(86400*7));
           header("location: change_pwd.php?gd-msg");
       }
   
       
    }
   
   
   }



 }




?>