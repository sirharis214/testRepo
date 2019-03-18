<?php
session_start();
require('../rabbitMQFiles/testRabbitMQClient.php'); #will have register client function

$username = $_POST['usernamesignup'];
$addrStreet = $_POST['addrstreet'];
$addrCity = = $_POST['addrcity'];
$addrState = $_POST['addrstate'];
$email = $_POST['emailsignup'];
$password = $_POST['passwordsignup_confirm'];

$response = register($username,$addrStreet,$addrCity,$addrState,$email,$password);
 
if($response != false){ #account was registered successfully
	echo"Created User successfully!!";

}
else{
	echo"Sorry username already exists";
}
?>
