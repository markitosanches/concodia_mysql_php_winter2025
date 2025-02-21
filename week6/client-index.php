<?php
require_once('db/connex.php');
$sql = "SELECT client.id, name, address, phone, birthday, email, city  FROM store.client 
INNER JOIN city on city.id = city_id
ORDER BY name ASC;";
$stmt = $pdo->query($sql);
// print_r($stmt->fetchAll())
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <h1>Clients</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>City</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($stmt as $row){
            ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['address']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['birthday']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['city']; ?></td>
                <td><a href="client-show.php?id=<?= $row['id'];?>" class="btn">View</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="client-create.php" class="btn">New Client</a>
</body>
</html>
