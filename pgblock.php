<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');
	include('db.php');
	$records=mysqli_query($con,"select * from pgdetails where status ='Blocked'");
?>
	<?php include('menu1.php');?>
	<?php include('allowner.php');?>
	<div class="request">
		<h1 class="one"> Blocked PG </h1>
		<!--  -->
		<table class="table table-stripped table-bordered"  style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Image</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Unblock</th>";
			  echo "<th>View Details</th>";

			   while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   $arr=explode(",", $r[10]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
                   	echo "<td> <img src='$img'style='width:50px;'></td>";

                   // echo "<td> <img src='$r[10]'style='width:50px;'></td>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td> <a class='btn btn-primary' href='unblockpg.php?id=$r[0]'>Unblock</a></td>";
                   echo "<td> <a class='btn btn-info' href='pgdetails.php?id=$r[0]'>View Details</a></td>";
              		

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