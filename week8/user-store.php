<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:city-index.php');
    exit;
}
require_once('db/connex.php');

//print_r($_POST);
//Array ( [name] => Paul [username] => peter@gmail.com [password] => 123456 )
foreach($_POST as $key=>$value){
    $$key = $value;
}


$password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>10]);


$sql = "INSERT INTO user (name, username, password) VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $username, $password))){
    header('location:login.php');
}else{
    print_r($stmt->errorInfo());
}
?>