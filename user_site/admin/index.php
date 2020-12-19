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
             <h1 class="display-1 text-light mb-0 text-center font-weight-bold">ADMIN LOGIN</h1>
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
          
                   

                 
                    
                </ul>
            </div>
        </div>
    </nav>
</header>

<br><br><br><br>
<section>
    <div class="signup-section">
        <div class="container">
            <div class="form-area py-5">
                <form action="index_core.php" method="POST" >
                  <div class="row justify-content-center">
                    <div class="col-md-6 bg-light p-5 border border-primary shadow">
                    <h2 class="text-uppercase text-primary h1 font-weight-bold mb-5">Admin Login</h2>
                      

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="usr_name" id="Email_addr" placeholder="Username Or Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" name="usr_pwd"  placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
                        </div>
                        

                          
                        </b>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</section>

<br><br><br><br>
<div class="mt-5"></div>



<footer class="bg-primary text-light pt-4 pb-3 border-top">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="copyright-text">
                <p>&copy; Copyright By  2020 & Alright Reserved <a href="#" class="text-white font-weight-bold">Ashik Mahmud</a> </p>
            </div>
            <div class="social-icon">
                <span>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin"></i>
                </span>
            </div>
            <div class="privacy">
                <a href="#" class="text-white font-weight-bold">Privacey Policy</a>
                <a href="#" class="text-white font-weight-bold">FAQ</a>
            </div>
        </div>
    </div>
</footer>

    <!-- Script Link -->
    <script src="Assets/js/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    
</body>
</html>