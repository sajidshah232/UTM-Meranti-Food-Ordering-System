<!DOCTYPE html>
<html lang="en" >
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{
                                    	$_SESSION["adm_id"] = $row['adm_id'];
										header("refresh:1;url=dashboard.php");
	                            } 
							else
							    {
										echo "<script>alert('Invalid Username or Password!');</script>"; 
                                }
	 }
	
	
}

?>
<header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container" style="background-color: darkred; color: white;">

                    <!-- <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button> -->
                   
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                        	</ul>
                        </div>
                      </div>
                    </nav>
                  </header>

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">-->

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<!--<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>-->

      <link rel="stylesheet" href="css/login.css">
      <style type="text/css">
      	#a{
      		background: url(images/utmbackground.jpg)no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;;
      	}
      	#input{
      		border-radius: 20px;
      		border: solid black;
      	}
      </style>

  
</head>

<body id="a">

  
<div class="container">
  <div class="info">
    <h1>Admin Panel </h1>
  </div>
</div>
<div class="form" style="background-color: floralwhite;border: 2px solid black;border-radius: 30px;">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
  <form class="login-form" action="index.php" method="post">
    <input type="text" placeholder="Username" id="input" name="username"/>
    <input type="password" placeholder="Password" id="input"name="password"/>
    <input type="submit"  name="submit" id="input"value="Login" />

    <a class="navbar-brand" href="../owner/index.php">Owner Page</a>
    <a class="navbar-brand" href="../index.php">Customer Page</a>

  </form>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/index.js'></script>
</body>

</html>
