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
    <title>Menu</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                                <h4 class="m-b-0 text-white">Menu</h4>
                            </div>
                                 <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                 <th>Image</th>
                                                <th>Dish</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                               <th>Action</th>	  
                                            </tr>
                                        </thead>
                                        <tbody>
								

  
                        <div class="menu-widget" id="2">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                            
                              </a>
                           </h3>
                            <div class="clearfix"></div>
                            </div>
                            <div class="collapse in" id="popular2">
						<?php  
									$stmt = $db->prepare("select * from dishes where rs_id='$_GET[res_id]'");
									$stmt->execute();
									$products = $stmt->get_result();
									if (!empty($products)) 
									{
									foreach($products as $product)
										{
	 
													 ?>
                                
                                <div class="food-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
										<form method="post" action='all_menu.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                                            <div class="rest-logo pull-left">
                                               <td> <a class="restaurant-logo pull-left" href="#"><?php echo '<img src="Res_img/dishes/'.$product['img'].'" alt="Food logo" radius" style="max-height:100px;max-width:150px>'; ?></a></td>
                                            </div>
                                
                                            <div class="rest-descr">
                                                <td><h6><a href="#"><?php echo $product['title']; ?></a></h6></td>
                                                <td><p> <?php echo $product['slogan']; ?></p></td>
                                            </div>
                                           
                           
                                        </div>
                               
                                        <div class="col-xs-12 col-sm-12 col-lg-3 pull-right item-cart-info"> 
										<td><span class="price pull-left" >RM<?php echo $product['price']; ?></span></td>
                                            
									<td><a href="delete_menu.php?menu_del='.$rows['d_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
								<a href="update_menu.php?menu_upd='.$rows['d_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
                                        </div></td>
              
                                </div>
                                </div>
                           
                                        <tbody>

                                              
                
								
								<?php
									  }
									}
									
								?>
  
                            </div>
             
                        </div>
            
                       
                    </div>
                    
                </div>
     
            </div>
        

        </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

						
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
         
  
           
        </div>
       
    </div>
    
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>