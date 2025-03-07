<?php
require_once('classes/Auth.php');
Auth::session();

require_once('db/connex.php');
$sql = "SELECT * FROM city ORDER BY city";
$stmt = $pdo->query($sql);
?>
<?php
require_once('header.php');
// print_r($_SESSION);

?>
    <h1>Client Create</h1>
    <div class="container">
        <form action="client-store.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">
            <label for="dob">Birthday</label>
            <input type="date" id="dob" name="birthday">
            <label for="email">email</label>
            <input type="email" id="email" name="email">
            <label for="city">City</label>
            <select name="city_id" id="city">
            <?php 
            foreach($stmt as $row){ 
            ?>
            <option value="<?= $row['id'];?>"><?= $row['city'];?></option>
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