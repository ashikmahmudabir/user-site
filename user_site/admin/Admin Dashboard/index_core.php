<?php
require_once("config_ad.php");
$ad_query = "SELECT * FROM ad_login_tb;";
$run_adQuery = mysqli_query($connect_db,$ad_query);
if($run_adQuery==true){  
 
while($fetch = mysqli_fetch_array($run_adQuery)){
  echo  $fetch["fname"];
  
}

}


?>