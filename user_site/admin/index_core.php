<?php
 $host = "localhost";
 $db_usr_nm = "newtest";
 $db_usr_pwd = "newtest";
 $db_nm = "login_register";
  $ad_connect = mysqli_connect($host,$db_usr_nm,$db_usr_pwd,$db_nm);
  if($ad_connect==false){
      echo "Error Establishing Database Connection";
  }

  $usr_nm = $_REQUEST["usr_name"];
  $usr_pwd = $_REQUEST["usr_pwd"];
  $ad_query = "SELECT * FROM ad_login_tb WHERE ad_mail='$usr_nm' AND ad_pwd='$usr_pwd';";
  $run_addQuery = mysqli_query($ad_connect,$ad_query);
  $count_rows = mysqli_num_rows($run_addQuery);
  if($run_addQuery==true){
      if($count_rows==1){
          setcookie("crntAdn","$usr_nm",time()+(86400*2));
          header("location: Admin Dashboard/index.php");
      }
  }



?>