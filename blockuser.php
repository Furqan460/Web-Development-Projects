<?php
include('db.php');
$records=mysqli_query($con,"select * from signup where status ='Blocked'");
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
	<div class="req">
		<h1 class="nine"> User Blocked </h1>
		<table class="table table-stripped table-bordered style=" z-index: -1"">
			<?php
			echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Email</th>";
			  echo "<th>Password</th>";
			  echo "<th>Mobile no</th>";
			  echo "<th>Address</th>";
			   echo "<th>Gender</th>";
			    echo "<th>Status</th>";
			    echo "<th>Unblock</th>";
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[6]."</td>";
                   echo "<td>". $r[7]."</td>";
                   echo "<td> <a class='btn btn-danger' href='userunblock.php?id=$r[0]'> Unblock</a></td>";
                   // echo "<td> <a href='pgapprove.php?id=$r[0]'> Approve</a></td>";
                   //  echo "<td> <a class='btn btn-info' href='userdetails.php?id=$r[0]'> View Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>
	</div>
	

</body>
</html>
<style type="text/css">
.nine{
	font-family: 'Lobster', cursive;
	font-weight: 900;

}
	.req{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize;  
		min-height: 700px;
	}
</style>