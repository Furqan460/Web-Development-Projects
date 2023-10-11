<?php
session_start();
// session_destroy();
unset($_SESSION['userlogedin']);
header("location:login.php");
?>