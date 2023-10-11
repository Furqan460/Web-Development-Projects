<?php
include('db.php');
$records=mysqli_query($con,"update  pgdetails  set status='Blocked' where id='".$_GET['id']."'");
header("location:pgblock.php");
?>
