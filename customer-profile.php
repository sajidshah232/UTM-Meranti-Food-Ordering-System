<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Orderlah</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

<body class="home">
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <!-- <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button> -->
                    <a class="navbar-brand" href="customerdashboard.php">OrderLah <img class="img-rounded" src="images/icn.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                        <?php
                        if(empty($_SESSION["user_id"]))
                            {}
                        else
                            {
                            echo '<li class="nav-item"> <a class="nav-link active" href="customerdashboard.php">Home <span class="sr-only"></span></a> </li>';
                            echo '<li class="nav-item"> <a class="nav-link active" href="restaurants.php">Arkeds <span class="sr-only"></span></a> </li>';
							echo '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
							echo '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                            echo '<li class="nav-item"> <a class="nav-link active" href="customer-profile.php"> <i class="fa-solid fa-user"></i> <span class="sr-only"></span></a> </li>';
                            }

                        ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section class="hero bg-image" data-image-src="images/img/meranti.jpg">
            <div class="hero-inner">
            <div class="banner-form">
                        <form class="form-inline">
                          
                        </form>
                    </div>
            </div>
      
        </section>
      
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>My Profile</h2>
                </div>
                <div class="card-body">
                              <?php 
                               session_start();
                                $ssql ="select * from users where u_id='".$_SESSION["user_id"]."'";
                                $res=mysqli_query($db, $ssql); 
                                $newrow=mysqli_fetch_array($res);
                                ?>
                                <form action='' method='post'  >
                                    <div class="form-body">
                                      
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username : </label>
                                                    <?php  echo $newrow['username']; ?>
                                                   </div>
                                            </div>
                                     
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name : </label>
                                                    <?php  echo $newrow['f_name'];  ?>
                                                    </div>
                                            </div>
                                      
                                        </div>
                                    
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name : </label>
                                                    <?php  echo $newrow['l_name']; ?>
                                                   </div>
                                            </div>
                                     
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email : </label>
                                                    <?php  echo $newrow['email'];  ?>
                                                    </div>
                                            </div>
                                        
                                        </div>
                                   
                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone : </label>
                                                    <?php  echo $newrow['phone'];  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="bottom-footer">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>Universiti Teknology Malaysia,Skudai johorbahru</p>
                                    <h5>Phone: 123456789</a></h5> </div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>