<?php
include('db.php');
$records=mysqli_query($con,"update  pgdetails  set status='approved' where id='".$_GET['id']."'");
header("location:pgunblock.php");
?>