<?php
include('connection/connect.php');
session_start();

$firstname = $_GET['fstname'];
$lastName = $_GET['lastname'];
$email=$_GET['email'];
$Role = "customer";
echo $firstname;
echo $lastName;
echo $email;


$sql = "INSERT INTO users (username, f_name, l_name , email, role)
 VALUES ('$firstname' , '$firstname','$lastName' , '$email' , '$Role')";
if ($db->query($sql) === TRUE) {
  echo "New record created successfully";


  $result_1 = mysqli_query($db, "SELECT * FROM users WHERE username = '$firstname'");
  $inserted_user = $result_1->fetch_assoc();

  $_SESSION["user_id"] = $inserted_user["u_id"];


  header('Location: customerdashboard.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>