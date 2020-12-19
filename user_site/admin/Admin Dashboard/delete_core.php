<?php

   $host = "localhost";
    $db_usrnm = "newtest";
    $db_pwd = "newtest";
   $db_nm = "login_register";

   $connect = mysqli_connect($host,$db_usrnm,$db_pwd,$db_nm);
   if($connect==false){
    echo "Error Establishing Database Connection";
   }

   if(isset($_REQUEST["dlt_id"])){
       $dltId = $_REQUEST["dlt_id"];
        echo $dltId;


   $dlt_Query = "DELETE FROM my_login_tb WHERE id =$dltId;";
   $run_dlt_Query = mysqli_query($connect,$dlt_Query);
   if($run_dlt_Query==true){
        header("location: user_mangement.php?data-deleted");
        if(isset($_COOKIE["crntAdn"])){
          setcookie("crntAdn","$usrmail",time()-(864000*1));

        }
   }
 
    
}


?>