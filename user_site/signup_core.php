<?php
require_once("config.php");
$usr_fname = htmlspecialchars(htmlentities($_REQUEST["fname"])) ;
$usr_lname = htmlspecialchars(htmlentities($_REQUEST["lname"]));
$usr_gender = htmlspecialchars(htmlentities($_REQUEST["usr_gender"]));
$usr_mail = htmlspecialchars(htmlentities($_REQUEST["usr_mail"]));
$usr_pwd = htmlspecialchars(htmlentities($_REQUEST["usr_pwd"]));
$usr_prof = htmlspecialchars(htmlentities($_REQUEST["usr_prof"])); $usr_dist = htmlspecialchars(htmlentities($_REQUEST["usr_dist"]));
$encriptedPwd = md5(sha1($usr_pwd));
$auth = md5(sha1($usr_mail.$usr_pwd)) ;



if($usr_fname==""){
    header("location: signup.php?datanot-inserted");
}elseif($usr_lname==""){
   header("location: signup.php?datanot-inserted");
}elseif($usr_gender==""){
    header("location: signup.php?datanot-inserted");
}elseif($usr_mail==""){
   header("location: signup.php?datanot-inserted");
}elseif($usr_pwd==""){
   header("location: signup.php?datanot-inserted");
}elseif($usr_dist==""){
   header("location: signup.php?datanot-inserted");
}else{

    $signup_query = "INSERT INTO my_login_tb (fname,lname,usr_gender,usr_prof,usr_dist,usr_mail,usr_pwd,auth) VALUES ('$usr_fname','$usr_lname','$usr_gender','$usr_prof','$usr_dist','$usr_mail','$encriptedPwd','$auth');";
   $run_signupQuery = mysqli_query($connect,$signup_query);
 
    if($run_signupQuery==true){
    header("location: signup.php?data-inserted");
   }   

}



?>