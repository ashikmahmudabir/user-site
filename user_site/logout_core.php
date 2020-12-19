<?php

if(isset($_COOKIE["currentUser"])){
    setcookie("currentUser","$usr_nm",time()-(86400*7));
    header("location: login.php");
}


?>