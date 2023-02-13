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
    header('location:index.php');
}else{
/*foreach ($_SESSION["cart_item"] as $item)
    {
        $item_total += ($item["price"]*$item["quantity"]);
                    */                          
        if($_POST['submit'])
            {
                $SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$_GET["description"]."','".$_GET["quantity"]."','".$_GET["amount"]."')";
                        
                mysqli_query($db,$SQL);
                                                        
                                                        
                unset($_GET["description"]);
                unset($_GET["quantity"]);
                unset($_GET["amount"]);
                function_alert();                                    
            } 
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        .success-container {
            width:50%;
            position:absolute;
            top:30%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#bdc3c7;
            font-weight:bold;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
      <div class="success-container">
       <form method="post" action="">
                <h3>Your Transaction has been Successfully Completed !</h3>
                <p class="text-xs-center"> <input type="submit" onclick="return confirm('You will be redirected to merchant page.');" name="submit"  class="btn btn-success btn-block" value="Continue" > </p>
            </form>
        
      </div>  
</body>
</html>