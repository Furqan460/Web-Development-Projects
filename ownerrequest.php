<?php
include('db.php');
$records=mysqli_query($con,"select * from registration where status ='Pending'");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu.php');?>
	<?php include('all.php');?>
	<div class="owner">
		<h1 class="three">  Owner Requests </h1>
		<table class="table table-stripped table-bordered" style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Address</th>";
			  echo "<th>Contact</th>";
			  echo "<th>Status</th>";
			  echo "<th>Date</th>";

			   echo "<th>Block</th>";
			   echo "<th>Approve</th>";
			   echo "<th>Details</th>";
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[7]."</td>";
                   echo "<td>". $r[8]."</td>";


                   echo "<td> <a class='btn btn-danger'href='ownerblock.php?id=$r[0]'> Block</a></td>";
                   echo "<td> <a class='btn btn-success'href='ownerregistered.php?id=$r[0]'> Approve</a></td>";
                   echo "<td> <a class='btn btn-info' href='ownerdetails.php?id=$r[0]'> View Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>
	</div>
	

</body>
</html>
<style type="text/css">
.three{
	
	font-family: 'Lobster', cursive;
	font-weight: 900;
}
	.owner{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;  
		min-height: 700px;
	}
</style>