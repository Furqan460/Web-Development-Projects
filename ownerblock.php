<?php
include('db.php');
$records=mysqli_query($con,"update  registration  set status='Blocked' where id='".$_GET['id']."'");
header("location:blockedowners.php");
?>
