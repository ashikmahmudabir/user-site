<?php
 require_once("config.php");
 if(isset($_COOKIE["currentUser"])){
$currentUSR = $_COOKIE["currentUser"];
 $usr_file = $_FILES["avatar"];
$file_nm = $usr_file["name"];
$file_tmp_nm = $usr_file["tmp_name"];
move_uploaded_file($file_tmp_nm,"images/$file_nm");

$updateImg = "UPDATE my_login_tb SET avatar ='$file_nm' WHERE auth='$currentUSR '; ";
$run_insertFileQuery = mysqli_query($connect,$updateImg);

if($run_insertFileQuery==true){
    header("location: profile.php");
}



}



?>