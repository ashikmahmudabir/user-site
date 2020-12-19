<?php

    if(isset($_COOKIE["crntAdn"])){
        $usrmail = $_COOKIE["crntAdn"];
        setcookie("crntAdn","$usrmail",time()-(864000*1));
        header("location: index.php");
    }

?>