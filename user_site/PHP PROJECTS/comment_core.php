<?php
require_once("../config.php");

$cmt_mail = $_REQUEST["usr_cmt_mail"];
$cmt_sub = $_REQUEST["usr_cmt_sbjt"];
$cmt_msg = $_REQUEST["usr_cmt_cmts"];
if($cmt_mail==""){
	header("location: notificatioin.php?comment-no");
}elseif($cmt_sub==""){
	header("location: notificatioin.php?comment-no");
}elseif($cmt_msg==""){
	header("location: notificatioin.php?comment-no");
}else{
$cmtInsertQuery = "INSERT INTO usr_cmt_tb (usr_cmt_mail,usr_cmt_sbjt,usr_cmt_cmts) VALUES ('$cmt_mail','$cmt_sub','$cmt_msg');";
$run_cmtInsertQuery = mysqli_query($connect,$cmtInsertQuery);
if($run_cmtInsertQuery==true){
    header("location: notificatioin.php?comment-yes");
}
}


?>