<?php
require_once("config.php");

if(isset($_REQUEST["editButton"])){

 $fname = $_REQUEST["fname"];
 $lname = $_REQUEST["lname"];
 $gender = $_REQUEST["usr_gender"];
 $prof = $_REQUEST["usr_prof"];
 $dist = $_REQUEST["usr_dist"];
 $mail = $_REQUEST["usr_mail"];
 $editingId = $_REQUEST["editingId"];
$editQuery = "UPDATE my_login_tb SET fname='$fname', lname='$lname', usr_gender='$gender', usr_prof='$prof', usr_dist='$dist',usr_mail='$mail' WHERE id=$editingId;";
$run_editquery = mysqli_query($connect,$editQuery);
if($run_editquery==true){
    header("location: user_mangement.php?data_updated");
}else{
    echo "No";
}



 }





?>