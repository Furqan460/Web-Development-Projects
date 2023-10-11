<?php
include('db.php');
$records=mysqli_query($con,"select * from registration where status ='Blocked'");
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
	<div class="request">
		<h1 class="one"> Blocked Owners </h1>
		<table class="table table-stripped table-bordered style=" z-index: -1"">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Address</th>";
			  echo "<th>Contact</th>";

			   echo "<th>UnBlock</th>";
			   
			   echo "<th>Details</th>";


	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td> <a class='btn btn-success'href='ownerregistered.php?id=$r[0]'> Unblock</a></td>";
                   echo "<td> <a class='btn btn-info'href='ownerdetails.php?id=$r[0]'> View Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>
	</div>
	

</body>
</html>
<style type="text/css">
.one{
	font-family: 'Lobster', cursive;
	font-weight: 900;

}
	.request{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;  
		min-height: 700px;
	}
</style>