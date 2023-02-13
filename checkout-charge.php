<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include("./config.php");
error_reporting(0);
session_start();
    $token = $_POST["stripeToken"];
    $token_card_type = $_POST["stripeTokenType"];
    $email           = $_POST["stripeEmail"];
    $amount          = $_POST["amount"]; 
    $desc            = $_POST["product_name"];
    $quantity    = $_POST["quantity"];
    $charge = \Stripe\Charge::create([
      "amount" => str_replace(",","",$amount) * 100,
      "currency" => 'myr',
      "description"=>$desc,
      "source"=> $token,
    ]);

    if($charge){
      header("Location:success.php?quantity=$quantity&description=$desc&amount=$amount");
    }
?>