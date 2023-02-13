<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");  
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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="animsition.min.css" rel="stylesheet">
    <link href="animate.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> </head>
    <link rel="stylesheet" href="./outside/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.png">
    <!--------------Grid Css ------------------->
    <link rel="stylesheet" href="navcss/grid.css">
    <!-----------------Main Css ------------------>
    <link rel="stylesheet" href="navcss/main.css">
    <!-----------------Normalize Css ------------------>
    <link rel="stylesheet" href="navcss/normalize.css">
    <!------------------Custom Css Code-------------------->
    <link rel="stylesheet" href="navcss/style.css">
    <!------------------Responsive Css code---------------->
    <link rel="stylesheet" href="navcss/responsive.css">


<body class="home">
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">

                    <!-- <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button> -->
                    <a class="navbar-brand" href="index.php">OrderLah  </a>
                    <a class="navbar-brand" href="../admin/index.php">Admin Page</a>
                    <a class="navbar-brand" href="../index.php">Customer Page</a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            
							<?php
						if(empty($_SESSION['user_id'])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{	
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							
                        </ul>
						 
                    </div>
                </div>
            </nav>

            <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
        <div class="scroll-up-btn">

        </div> -->
 
        <div class="headernav" id="home">
            <div class="row">
                <div class="header-content">
                    <h1>WELCOME TO ARKED MERANTI</h1>
                    <p>Create account and Register your Arked in just few clicks and have a better food sale.
                    </p>
                </div>
            </div>
        </div>
        
        </header>

       
    <script src="jquery.min.js"></script>
    <script src="tether.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="animsition.min.js"></script>
    <script src="bootstrap-slider.min.js"></script>
    <script src="jquery.isotope.min.js"></script>
    <script src="headroom.js"></script>
    <script src="foodpicky.min.js"></script>

    
    <!--------------Jquery ------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!------------- particles -------- -->
    <Script type="text/javascript" src="navjs/particles.min.js"></Script>

    <!-------------- for Sticky nav bar ------------------->
    <script type="text/javascript" src="navjs/jquery.waypoints.min.js"></script>

    <!--------------html5shiv ------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
        integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA=="
        crossorigin="anonymous"></script>
    <!--------------respond ------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"
        integrity="sha512-qWVvreMuH9i0DrugcOtifxdtZVBBL0X75r9YweXsdCHtXUidlctw7NXg5KVP3ITPtqZ2S575A0wFkvgS2anqSA=="
        crossorigin="anonymous"></script>
    <!--------------selectivizr ------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"
        integrity="sha512-0mXreXYrXoy9laHoypsAOjuSCqh57vY+kIdE46k8Hw0yRY1EhJyHWUEAqfHOTrPkBpsbO39/ZPw5HITv8mLVOA=="
        crossorigin="anonymous"></script>
    <!------------------Fontawesome-------------------->
    <script src="custom.js"></script>
    <script src="https://kit.fontawesome.com/a6f4b9b662.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#icon').click(function () {
                $('ul').toggleClass('show');
            });
        });
    </script>
</body>

</html>