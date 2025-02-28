<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('db/connex.php');

$sql = "DELETE FROM client WHERE id = ?";

$id = $_POST['id'];

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($id))){
    header('location:client-index.php');
}else{
    print_r($stmt->errorInfo());
}


?>