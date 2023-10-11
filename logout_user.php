<?php
session_start();
// session_destroy();
unset($_SESSION['customerloggedin']);
header("location:index.php");
?>