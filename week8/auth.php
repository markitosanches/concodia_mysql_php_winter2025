<?php
session_start();
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:login.php');
    exit;
}
require_once('db/connex.php');
//print_r($_POST);
foreach($_POST as $key=>$value){
    $$key = $value;
}

// 1. check the user
$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($username));

//2 count user === 1
$count  = $stmt->rowCount();
if($count == 1){
    $user = $stmt->fetch();
    // print_r($user);
    // echo $user['password']." == ".$password;
//3 check user password
    if(password_verify($password, $user['password'])){
// 4 create a session
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
        header('location:client-create.php');
    }else{
        header('location:login.php?msg=2');
    }
}else{
    header('location:login.php?msg=1');
}

