<?php

require_once("config.php");

$admin_nm = $_REQUEST["admin_nm"];
$post_title = $_REQUEST["post_title"];
$post_desc = $_REQUEST["post_desc"];
$post = $_REQUEST["post"];
$post_link = $_REQUEST["post_link"];
$post_url = $_REQUEST["post_url"];
if($admin_nm==""){
    header("location: post.php?not-send");
}elseif($post_title==""){
    header("location: post.php?not-send");
}elseif($post_desc==""){
    header("location: post.php?not-send");
}elseif($post==""){
    header("location: post.php?not-send");
}else{
    $post_query = "INSERT INTO my_post_tb (admin_nm,post_title,post_desc,post_link,post_url,post) VALUES ('$admin_nm','$post_title','$post_desc','$post_link','$post_url','$post');";
$run_postQuery = mysqli_query($connect,$post_query);
if($run_postQuery==true){
  header("location: post.php?post-send");
}

}





?>