<?php
require_once('db/connex.php');
$id = $_GET['id'];

$sql = "SELECT client.id, name, address, phone, birthday, email, city  FROM store.client 
INNER JOIN city on city.id = city_id WHERE client.id = ?;";

$stmt=$pdo->prepare($sql);
$stmt->execute(array($id));

$client = $stmt->fetch();

// print_r($client);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Client</h1>
    <div class="container">
        <p><strong>Name: </strong><?= $client['name'];?></p>
        <p><strong>Address: </strong><?= $client['address'];?></p>
        <p><strong>Phone: </strong><?= $client['phone'];?></p>
        <p><strong>Birthday: </strong><?= $client['birthday'];?></p>
        <p><strong>email: </strong><?= $client['email'];?></p>
        <p><strong>City: </strong><?= $client['city'];?></p>
    </div>
    
</body>
</html>
