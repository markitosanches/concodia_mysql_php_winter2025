<?php
if(isset($_GET['id']) && $_GET['id']!=null){
    require_once('db/connex.php');
    $id = $_GET['id'];

    $sql = "SELECT client.id, name, address, phone, birthday, email, city  FROM store.client 
    INNER JOIN city on city.id = city_id WHERE client.id = ?;";

    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();

    if($count == 1){
        $client = $stmt->fetch();
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
    <h1>Client</h1>
    <div class="container">
        <p><strong>Name: </strong><?= $client['name'];?></p>
        <p><strong>Address: </strong><?= $client['address'];?></p>
        <p><strong>Phone: </strong><?= $client['phone'];?></p>
        <p><strong>Birthday: </strong><?= $client['birthday'];?></p>
        <p><strong>email: </strong><?= $client['email'];?></p>
        <p><strong>City: </strong><?= $client['city'];?></p>
        <a href="client-edit.php?id=<?= $client['id'];?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id']?>">
            <input type="submit" value="Delete" class="btn red">
        </form>
    </div>
<?php
require_once('footer.php');
?>
