<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();

function function_alert() { 
    echo "<script>alert('Thank you. Your Order has been placed!');</script>";
    echo "<script>window.location.replace('your_orders.php');</script>"; 
} 


if(empty($_SESSION["user_id"]))
{
    header('location:login.php');
}
else{
    foreach ($_SESSION["cart_item"] as $item)
    {
        $item_total += ($item["price"]*$item["quantity"]);
        
        if($_POST['submit'])
        {
            $SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
            
            mysqli_query($db,$SQL);
            
            
            unset($_SESSION["cart_item"]);
            unset($item["title"]);
            unset($item["quantity"]);
            unset($item["price"]);
            function_alert();                                    
        }
        elseif ($_POST['cancel']) {
            echo "<a href=dishes.php>";
        }
    }
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <title>Checkout</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style type="text/css">
            .box{
                display: none;
            }
            
            #b{
                border-radius: 0px;
                padding: 8px;
                background-color: #5bb85d;
                text-decoration-color: whites;

            }
        </style>
        <script>
            $(document).ready(function(){
                $('input[type="radio"]').click(function(){
                    var inputValue = $(this).attr("value");
                    var targetBox = $("." + inputValue);
                    $(".box").not(targetBox).hide();
                    $(targetBox).show();
                });
            });
        </script>
    </head>
    <body>
        
        <div class="site-wrapper">
            <header id="header" class="header-scroll top-header headrom">
                <nav class="navbar navbar-dark">
                    <div class="container">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                        <a class="navbar-brand" href="index.php">OrderLah <img class="img-rounded" src="images/icn.png" alt=""> </a>
                        <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Arkeds <span class="sr-only"></span></a> </li>
                                
                                <?php
                                if(empty($_SESSION["user_id"]))
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
            </header>
            <div class="page-wrapper">

                <div class="container">  
                   
                 <span style="color:green;">
                    <?php echo $success; ?>
                </span>
                
            </div>
            
            
            <div class="container m-t-30">
                <form autocomplete="off" action="" method="post">
                    <div class="widget clearfix">
                        
                        <div class="widget-body">
                            
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                            <div class="cart-totals-fields">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Cart total</td>
                                                            <td> <?php echo "RM".$item_total; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Delivery Charges</td>
                                                            <td>Free</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-color"><strong>Total</strong></td>
                                                            <td class="text-color"><strong> <?php echo "RM".$item_total; ?></strong></td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        <div class="payment-option">
                                            <ul class=" list-unstyled">
                                                <h5>Select payment type:</h5><br>
                                                <li>
                                                    <label class="custom-control custom-radio  m-b-20">
                                                        <input name="mod" id="cod" value="COD" type="radio" class="custom-control-input" required> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash on Delivery</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    
                                                        <label class="custom-control custom-radio  m-b-10">
                                                            <input name="mod" id="stripe" type="radio" value="stripe"  class="custom-control-input" required> <span class="custom-control-indicator"></span> <span class="custom-control-description">Credit Card Payment </span> </label>
                                                        </li>
                                                        <div class="COD box paypal box required">
                                                            <p class="text-xs-center"> <input type="submit" onclick="return confirm('Do you want to confirm the order?');" name="submit"  class="btn btn-success btn-block" value="Order Now" > </p></div>
                                                            <p class="text-xs-center" id="b"> <a class="nav-link active"   type="submit" class="btn btn-success btn-block" href='dishes.php?res_id=<?php echo $_GET['res_id']; ?>'> Back</p></div>
                                                        </div>
                                                    </form>
                                                    <form autocomplete="off" action="checkout-charge.php" method="post">
                                                        
                                                    </ul>
                                                    <div class="stripe box text-xs-center required">
                                                        
                                                        
                                                        <input type="hidden" name="amount" value="<?php echo $item_total ?>">
                                                        <input type="hidden" name="product_name" value="<?php echo $item["title"] ?>">
                                                        <input type="hidden" name="quantity" value="<?php echo $item["quantity"] ?>">

                                                        <script
                                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button" name="stripe-button"
                                                        data-key="pk_test_51Lh7L4DrIuNl8BNUjtUzssUnN1LjUZorZagLtGCAKoCWO3b9V6nedEqlHQo6YjxWekygU9y3UqJwyNUP8nQbCCew00xQaNvNH5"
                                                        data-amount="<?php echo str_replace(",","",$item_total) * 100?>"
                                                        data-currency="myr"
                                                        data-locale="auto">
                                                    </script>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form><p class="text-xs-center">
                                        <div class="stripe box required">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>

                            <script src="js/jquery.min.js"></script>
                            <script src="js/tether.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                            
                        </body>

                        </html>

                        <?php
                    }
                    ?>
