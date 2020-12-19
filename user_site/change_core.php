<?php

require_once("config.php");
if(isset($_COOKIE["currentUser"]) && isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["usr_mail"]) && isset($_REQUEST["usr_prof"]) && isset($_REQUEST["usr_dist"])){

$edit_fname = $_REQUEST["fname"];
$edit_lname = $_REQUEST["lname"];
$edit_gender = $_REQUEST["gender"];
$edit_mail = $_REQUEST["usr_mail"];
$edit_prof = $_REQUEST["usr_prof"];
$edit_dist = $_REQUEST["usr_dist"];
$currentUser = $_COOKIE["currentUser"];

$updQuery = "UPDATE  my_login_tb SET fname ='$edit_fname', lname = '$edit_lname' , usr_gender = '$edit_gender', usr_prof='$edit_prof',usr_dist='$edit_dist', usr_mail ='$edit_mail' WHERE auth='$currentUser'; ";
$run_updQuery = mysqli_query($connect,$updQuery);

if($run_updQuery==true){
    
     header("location: profile.php?updated");
}

}



?>