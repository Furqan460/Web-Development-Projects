<?php
include('db.php');
$records=mysqli_query($con,"update  signup  set status='Blocked' where id='".$_GET['id']."'");
header("location:blockuser.php");
?>