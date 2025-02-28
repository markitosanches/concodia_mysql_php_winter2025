<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('db/connex.php');
//print_r($_POST);

//Array ( [name] => Paul [address] => Rene Levesque [phone] => 5465465 [birthday] => 2025-02-14 [email] => paul@gmail.com [city_id] => 4 )


foreach($_POST as $key=>$value){
    $$key = $value;
}

$sql = "UPDATE client SET name = ?, address = ?, phone = ?, birthday = ? , email = ?, city_id =? WHERE id = ?";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($name, $address, $phone, $birthday, $email, $city_id, $id))){
   header('location:client-index.php');
}else{
    print_r($stmt->errorInfo());
}


?>