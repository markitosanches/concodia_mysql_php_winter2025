<?php
$msg = null;
if(isset($_GET['msg'])){
    if($_GET['msg']== 1){
        $msg = "Please check your username";
    }elseif($_GET['msg']== 2){
        $msg = "Please check your password";
    }
}
require_once('header.php');
?>
<h1>Login</h1>
    <div class="container">
         <span class="text-red"><?= $msg;?></span>
        <form action="auth.php" method="post">
            <label for="username">Username</label>
            <input type="email" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
<?php
require_once('footer.php');
?>