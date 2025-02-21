<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('db/connex.php');
//print_r($_POST);
//Array ( [name] => Peter [address] => Pie IX [phone] => 65465 [birthday] => 2025-02-05 [email] => peter@gmail.com [city_id] => 5 )


// $name = $_POST['name'];
// $address = $_POST['address'];
// $phone = $_POST['phone'];

foreach($_POST as $key=>$value){
   // echo $key." = ".$value."<br>";
   $$key = $value;
}

$sql = "INSERT INTO client (name, address, phone, birthday, email, city_id) VALUES (?, ?, ?, ?, ?, ? )";

$stmt=$pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $birthday, $email, $city_id))){
    $id= $pdo->lastInsertId();
    header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}

?>