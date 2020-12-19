<?php

 $host = "localhost";
 $db_usrnm = "newtest";
 $db_pwd = "newtest";
 $db_nm = "login_register";

$connect = mysqli_connect($host,$db_usrnm,$db_pwd,$db_nm);
if($connect==false){
    echo "Error Establishing Database Connection";
}

?>