<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('111002081841-4hlaaal5viorunm0ek93975uqo3dnqgu.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Activity-PHP/foodorderingsystem1.1/testing/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here