<?php 
  session_start();
  require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Projects With PHP</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fonts/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
<div class="header-title bg-primary pb-4">
             <h1 class="display-1 text-light mb-0 text-center font-weight-bold">WELCOME TO MY WEBSITE</h1>
            </div>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg pb-4">
        <div class="container">
            
            <a class="navbar-brand text-uppercase" href="#">LoginProject</a>
            <button data-target="#showNav" data-toggle="collapse" class="navbar-toggler navbar-toggler-right">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="showNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">SIGNUP</a></li>
                   

                    <?php

                        if(!isset($_COOKIE["currentUser"])){
                            echo '<li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>';
                        }else{
                            echo "<li class='nav-item'><a class='nav-link' href='PHP PROJECTS/index.php'>DASHBOARD</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>PROFILE</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='logout_core.php'>LOGOUT</a></li>";

                            
                        }
                
                    ?>
                     
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
