<?php
include('db.php');
$records=mysqli_query($con,"update  pgdetails set status='Approved' where id='".$_GET['id']."'");
header("location:registeredpg.php");
?>