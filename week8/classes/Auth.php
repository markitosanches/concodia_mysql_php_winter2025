<?php
session_start();

class Auth {
    static public function session(){
        if(!isset($_SESSION['finger_print']) || $_SESSION['finger_print'] !==  md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
            header('location:login.php');
        }
    }
}

?>