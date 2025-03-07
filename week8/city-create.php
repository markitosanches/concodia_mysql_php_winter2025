<?php
require_once('classes/Auth.php');
Auth::session();

require_once('header.php');
?>
<h1>City Create</h1>
    <div class="container">
        <form action="city-store.php" method="post">
            <label for="city">City</label>
            <input type="text" name="city" id="city">
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
<?php
require_once('footer.php');
?>