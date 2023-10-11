<?php
include('db.php');
$records=mysqli_query($con,"update signup set status='Approved' where id='".$_GET['id']."'");
header("location:userapprove.php");
?>