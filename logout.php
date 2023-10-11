<?php
session_start();
// session_destroy();

unset($_SESSION['userloggedin']);

header("location:login.php");

?>