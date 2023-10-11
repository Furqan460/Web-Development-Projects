<?php
include('db.php');
$records=mysqli_query($con,"update  registration  set status='Approved' where id='".$_GET['id']."'");
header("location:registeredowner.php");
?>