<?php
require_once("config.php");

if(isset($_REQUEST["editButton"])){

 $admin_nm = $_REQUEST["admin_nm"];
 $post_title = $_REQUEST["post_title"];
 $post_desc = $_REQUEST["post_desc"];
 $post_link = $_REQUEST["post_link"];
 $post_url = $_REQUEST["post_url"];
 $post = $_REQUEST["post"];
 $editingId = $_REQUEST["editingId"];
$editQuery = "UPDATE my_post_tb SET admin_nm='$admin_nm', post_title='$post_title', post_desc='$post_desc', post_link='$post_link', post_url='$post_url',post='$post' WHERE id=$editingId;";
$run_editquery = mysqli_query($connect,$editQuery);
if($run_editquery==true){
    header("location: post_list.php?data_updated");
}else{
    echo "No";
}



 }





?>