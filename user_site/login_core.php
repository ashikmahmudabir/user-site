<?php 
 require_once("config.php");

$usr_nm = htmlentities($_REQUEST["usr_name"]) ;
$usr_pwd = htmlentities($_REQUEST["usr_pwd"]);
$createAuth = md5(sha1($usr_nm.$usr_pwd));

$login_query = "SELECT * FROM my_login_tb WHERE auth='$createAuth';";
$run_loginQuery = mysqli_query($connect,$login_query);
$count_dbRows = mysqli_num_rows($run_loginQuery);

if($run_loginQuery==true){

    if($count_dbRows===1){
        
            setcookie("currentUser","$createAuth",time()+(86400*7));
            header("location: PHP PROJECTS/index.php");       
    }else{
        header("location: login.php?wrong_info");
    }
}


?>