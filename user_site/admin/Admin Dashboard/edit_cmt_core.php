<?php
    require_once("config.php");

    $usr_cmt_mail = $_REQUEST["usr_cmt_mail"];
    $usr_cmt_sbjt = $_REQUEST["usr_cmt_sbjt"];
    $usr_cmt_cmts = $_REQUEST["usr_cmt_cmts"];
    $usr_editId  = $_REQUEST["editingId"];

    $cmtUpdateQuery = "UPDATE usr_cmt_tb SET usr_cmt_mail='$usr_cmt_mail', usr_cmt_sbjt='$usr_cmt_sbjt', usr_cmt_cmts='$usr_cmt_cmts' WHERE id=$usr_editId;";
    $run_cmtUpdateQuery = mysqli_query($connect,$cmtUpdateQuery);
    if($run_cmtUpdateQuery==true){
        header("location: user_comment.php?cmt_updated");
    }


?>