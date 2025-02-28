<?php

if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('db/connex.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM store.client WHERE client.id = ?;";

    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();

    if($count == 1){
        
        $client = $stmt->fetch();
        // print_r($client);
        $sql = "SELECT * FROM city ORDER BY city";
        $stmt = $pdo->query($sql);

    }else{
        header('location: client-index.php');
    } 
}else{
    header('location: client-index.php');
}

?>
<?php
require_once('header.php');
?>
    <h1>Client Edit</h1>
    <div class="container">
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id'];?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= $client['name'];?>">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?= $client['address'];?>">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?= $client['phone'];?>">
            <label for="dob">Birthday</label>
            <input type="date" id="dob" name="birthday" value="<?= $client['birthday'];?>">
            <label for="email">email</label>
            <input type="email" id="email" name="email" value="<?= $client['email'];?>">
            <label for="city">City</label>
            <select name="city_id" id="city">
            <?php 
            foreach($stmt as $row){ 
            ?>
            <option value="<?= $row['id'];?>" <?php if($row['id'] == $client['city_id']){ echo 'selected';} ?>><?= $row['city'];?></option>
            <?php
            }
            ?>
            </select>
            <input type="submit" value="Save" class="btn">
        </form>
    </div>
    
<?php
require_once('footer.php');
?>