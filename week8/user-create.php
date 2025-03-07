<?php
require_once('header.php');
?>
<h1>User Create</h1>
    <div class="container">
        <form action="user-store.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="username">Username</label>
            <input type="email" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
<?php
require_once('footer.php');
?>