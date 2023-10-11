<?php


?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu1.php');?>
	<?php include('allowner.php');

	include('db.php');
		$records=mysqli_query($con,"select * from signup");
		$newuser= mysqli_num_rows($records);

		$records=mysqli_query($con,"select * from pgdetails where status ='Pending'");
		$newPgRequest= mysqli_num_rows($records);

		$records=mysqli_query($con,"select * from pgdetails where status ='Approved' and pgownerid='". $_SESSION['pgid']."'");
		$approvedPg= mysqli_num_rows($records);

		$records=mysqli_query($con,"select * from hosteldetails where status ='Approved' and pgownerid='". $_SESSION['pgid']."'");
		$approvedhostels= mysqli_num_rows($records);

		$records=mysqli_query($con,"select * from details where status ='Approved' and pgownerid='". $_SESSION['pgid']."'");
		$approvedvillaFlats= mysqli_num_rows($records);

?>
	<div class="dash">
	
		<ul class="list-group" style="z-index: -1">

			<li class="list-group-item"> My Registered PG's <span class="badge"> <?php echo $approvedPg;?> </span></li>
			<li class="list-group-item"> My Registered Hostels <span class="badge"> <?php echo $approvedhostels;?> </span></li>

			<li class="list-group-item"> My Registered Flats & Villas <span class="badge"> <?php echo $approvedvillaFlats;?> </span></li>
            
			
			<li class="list-group-item">Total customers <span class="badge"> <?php echo $newuser;?> </span></li>

		</ul>
	</div>
	

</body>
</html>
<style type="text/css">

	.dash{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 90px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;
		min-height: 700px;  
	}
</style>
