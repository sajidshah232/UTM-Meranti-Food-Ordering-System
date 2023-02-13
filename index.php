<!-- <?php

?> -->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link rel="stylesheet" href="css/login.css">
<style type="text/css">
  
#buttn{
color:#fff;
background-color: #5c4ac7;
}
#a{
  background: url("images/img/utmback.jpg")no-repeat center center fixed;;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Login with google credentials -->
    <script src="http://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="111002081841-4hlaaal5viorunm0ek93975uqo3dnqgu.apps.googleusercontent.com">

  
</head>

<body class="loginbg" id="a">
<header id="header" class="header-scroll top-header headrom" >
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="#"> OrderLah<img class="img-rounded" src="images/icn.png" alt=""> </a>
                    <a class="navbar-brand" href="admin/index.php">Admin Page</a>
                    <a class="navbar-brand" href="owner/index.php">Owner Page</a>
                    
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                       <ul class="nav navbar-nav">
                            <!-- <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only"></span></a> </li> -->
                            <!-- <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Arkeds <span class="sr-only"></span></a> </li> -->
   
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									// 	echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									// echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<div >
<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	              if(is_array($row)) 
								{
                  	$_SESSION["user_id"] = $row['u_id']; 
									 header("refresh:1;url=customerdashboard.php"); 
	              } 
							else
							    {
                    	$message = "Invalid Username or Password!"; 
                 }
	 }
}
?>

 <div class="pen-title">

<div class="module form-module" >
  <div class="toggle">
  
  </div>
  <div class="form" style="text-align: center;" style="si">
    <h2>Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password" id="pswrd" />
      <i class="fa fa-lock" onclick="show()">Show</i>

      <input type="submit" id="buttn" name="submit" value="Login" />
      <!-- <input type="submit" id="buttn" name="submit" value="Login with Google" /> -->
      <!-- <button type="button" onclick="window.location=  '<?php echo $loginURL ?>';" > Login with Google</button> -->
      <!-- <div class="g-signin2" data-onsuccess="onSignIn" data-width="240" data-height="50" data-prompt="select_account">Sign In with Google </div> -->
      <div id="google-button" >sign in </div> <!-- you can add some for design -->


     <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
                   // function to get response
        function handleCredentialResponse(response) {
            const responsePayload = decodeJwtResponse(response.credential);
              console.log(responsePayload);
              console.log("ID: " + responsePayload.sub);
              console.log('Full Name: ' + responsePayload.name);
              console.log('Given Name: ' + responsePayload.given_name);
              console.log('Family Name: ' + responsePayload.family_name);
              console.log("Image URL: " + responsePayload.picture);
              console.log("Email: " + responsePayload.email);
              var fname = responsePayload.given_name;
              var lname = responsePayload.family_name ;
              var email = responsePayload.email;
              
              window.location.href = "insertintodb.php?fstname="+fname+"&lastname="+lname+"&email="+email;

             // when user login u get user data u can store data and redirect home page
        }

        window.onload = function () {
            google.accounts.id.initialize({
                client_id: "111002081841-4hlaaal5viorunm0ek93975uqo3dnqgu.apps.googleusercontent.com", 
                //client id valid for your domain
                callback: handleCredentialResponse,
                auto_select: true,
                auto: true
            });
            google.accounts.id.renderButton(
                document.getElementById("google-button"),
                { theme: "filled_blue", size: "medium", width: '200' }  // customization attributes
            );
            google.accounts.id.prompt(); 
        }

        // function to decode the response.credential
        function decodeJwtResponse(token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            var jsonPayload = decodeURIComponent(atob(base64).split('').map(function (c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));
            return JSON.parse(jsonPayload);

        }
        
    </script>
    </form>
  </div>  
  <div class="cta">Not registered?<a href="registration.php" style="color:#5c4ac7;"> Create an account</a></div>
  <a class="navbar-brand" href="admin/index.php">Admin Page</a>
                    <a class="navbar-brand" href="owner/index.php">Owner Page</a>
</div>
</div>
</div>



<script type="text/javascript">
  function show(){
var pswrd = document.getElementById('pswrd');
var icon = document.querySelector('.fa-lock');
if (pswrd.type==="password"){
  pswrd.type="text";
  icon.style.color="#e84393";
}
else {
  pswrd.type="password";
  icon.style.color="black";
}
}
</script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <div class="container-fluid pt-3">
  
</body>
</html>
