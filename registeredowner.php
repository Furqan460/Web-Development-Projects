<?php
include('db.php');
$records=mysqli_query($con,"select * from registration where status ='Approved'");
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
	<div class="regist">
		<h1 class="four"> Registered Owners </h1>
		<table class="table table-stripped table-bordered"  style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Address</th>";
			  echo "<th>Contact</th>";
			  echo "<th>Status</th>";

			   echo "<th>Block</th>";
			   echo "<th>Details</th>";
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[7]."</td>";

                   echo "<td> <a class='btn btn-danger' href='ownerblock.php?id=$r[0]'> Block</a></td>";
                   // echo "<td> <a href='pgregistered.php?id=$r[0]'> Approve</a></td>";
                   echo "<td> <a class='btn btn-info' href='ownerdetails.php?id=$r[0]'> View Details</a></td>";
                     echo "</tr>";

	           }

			?>
		</table>
	</div>
	

</body>
</html>
<style type="text/css">
.four{
	font-family: 'Lobster', cursive;
	font-weight: 900;
}
	.regist{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: 500px;
		text-transform: capitalize; 
		min-height:700px;  
	}
</style>
