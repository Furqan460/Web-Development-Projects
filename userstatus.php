<?php
include('db.php');
$records=mysqli_query($con,"update orders  set status='Living' where id='".$_GET['id']."'");
header("location:statususer.php");
?>
