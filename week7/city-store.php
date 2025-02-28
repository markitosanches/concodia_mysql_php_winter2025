<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:city-index.php');
    exit;
}
require_once('db/connex.php');

$city = $_POST['city'];

$sql = "INSERT INTO city (city) VALUES (?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($city))){
    header('location:city-index.php');
}else{
    print_r($stmt->errorInfo());
}
?>