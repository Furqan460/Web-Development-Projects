<?php
include('db.php');
$records=mysqli_query($con,"DELETE FROM pgdetails where id='".$_GET['id']."'");
header("location:registeredpg.php");
?>
