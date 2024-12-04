<?php 
// this is main destroy session 
session_start();

unset($_SESSION["ismail"]);
 session_destroy();
 header("location:login.php");
?>

