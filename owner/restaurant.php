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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Restaurant</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">table#display td{
   

}</style>
    
</head>
    

    
<body class="fix-header fix-sidebar">

    <div id="main-wrapper">
      
          <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-collapse">
             
                    <ul class="navbar-nav mr-auto mt-md-0"> 
                    </ul>
                  
                    <ul class="navbar-nav my-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="owner-profile.php"><i class="fa fa-power-off"></i>Profile</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar">

            <div class="scroll-sidebar">
               
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">

                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
   
                    </ul>
                </nav>
         
            </div>
           
        </div>
     
        <div class="page-wrapper">

            <div class="container-fluid">
         
                <div class="row">
                    <div class="col-12">
						    
                             <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Restaurant</h4>
                            </div>
                            
                  <div class="inner-page-hero bg-image" >
                <div class="container">       
                </div>
            </div>
            <div class="result-show">
               
            </div>
            <section class="restaurants-page">
               
                  <table id="display" width="100%" class="table  table-hover">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from restaurant");
									      while($rows=mysqli_fetch_array($ress))
										  {

													 echo' <tr><td><div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="all_menu.php?res_id='.$rows['rs_id'].'" > </td>
                                                               <td> <img src="Res_img/'.$rows['image'].'" alt="Food logo" radius" style="max-height:100px;max-width:150px></a>
															</div></td>
                                                            </tr>
															<!-- end:Logo -->
															<div class="entry-dscr">
                                                           
																<td><h5><a href="all_menu.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5><span>'.$rows['address'].'</span> </td>
																
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																<td>		
																		<a href="all_menu.php?res_id='.$rows['rs_id'].'" class="btn btn-purple">View Menu</a> </div> </td>
																</div>
																<!-- end:right info -->
															</div>';
										  }
						?>          
                                </div>
                            </div>      
                            </div>   
                        </div></table>
                    </div>
                </div>
            </section>
       
        
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