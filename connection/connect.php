<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onlinefoodphp";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php

/*//main connection file for both admin & front end
$servername = "sql111.epizy.com"; //server
$username = "epiz_32668406"; //username
$password = "YDuzEJd50gti"; //password
$dbname = "epiz_32668406_onlinefoodphp";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB   
    die("Connection failed: " . mysqli_connect_error());
}*/

?>