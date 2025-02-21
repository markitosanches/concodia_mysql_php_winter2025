<?php
require_once('db/connex.php');


$sql = "SELECT * FROM city ORDER BY city;";

$stmt = $pdo->query($sql);

//$stmt->fetchAll());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cities</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($stmt as $row){ 
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['city'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="city-create.php" class="btn">New City</a>
    
</body>
</html>