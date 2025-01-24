<?php
//print_r($_POST);

$name = $_POST['name'];
$address = $_POST['address'];
$cnumber = $_POST['cnumber'];
$city = $_POST['city'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];


// echo $name;

require('function/function-message.php');


echo message($name, $address, $cnumber, $city,);

?>
