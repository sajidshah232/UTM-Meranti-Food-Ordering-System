<?php
include("connection/connect.php");
error_reporting(0);
session_start();
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51Lh7L4DrIuNl8BNUYEs1ZAs9cxAmmFrp33Fu85mQvXU3V0hE2Am0W6eBAzTk7yLz60qhhAYuLVDaQ5w2Wj4Cl6oV00Khdap9Mw",
        "publishableKey" => "pk_test_51Lh7L4DrIuNl8BNUjtUzssUnN1LjUZorZagLtGCAKoCWO3b9V6nedEqlHQo6YjxWekygU9y3UqJwyNUP8nQbCCew00xQaNvNH5"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);

