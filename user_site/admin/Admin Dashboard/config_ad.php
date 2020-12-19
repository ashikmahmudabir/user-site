<?php

$host = "localhost";
$db_user = "newtest";
$db_pwd = "newtest";
$db_nm = "login_register";

$connect_db = mysqli_connect($host,$db_user,$db_pwd,$db_nm);
if($connect_db==false){
    echo "Error Establishing Database Connection";
}

?>