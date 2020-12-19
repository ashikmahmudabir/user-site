<?php

require_once("config.php");

if(isset($_REQUEST["dlt_id"])){
    $dlt_id = $_REQUEST["dlt_id"];

    $dltQuery = "DELETE FROM usr_cmt_tb WHERE id=$dlt_id;";
    $run_dltQuery = mysqli_query($connect,$dltQuery);
    if($run_dltQuery==true){
       header("location: user_comment.php?cmt_deleted");
    }
}



?>