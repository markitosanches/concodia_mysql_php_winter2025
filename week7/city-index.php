<?php
require_once('db/connex.php');
$sql = "SELECT * FROM city ORDER BY city;";
$stmt = $pdo->query($sql);

//$stmt->fetchAll());

?>
<?php
require_once('header.php');
?>
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
    
<?php
require_once('footer.php');
?>