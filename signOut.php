<?php
include_once "connect.php";
    setcookie('token',$token,time() * 0,"/");
    header('Location: login.php');
?>