<?php
include('db.php');
$records=mysqli_query($con,"select * from orders where status ='Living'");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu1.php');?>
	<?php include('allowner.php');?>
	<div class="request">
		<h1 class="one"> Status </h1>
		<table class="table table-stripped table-bordered style=" z-index: -1"">
			<?php
			  echo "<tr>";
			  echo "<th>Email</th>";
			  echo "<th>Pgid</th>";
			   echo "<th>Status</th>";
			   
	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td>". $r[3]."</td>";
                   // echo "<td> <a class='btn btn-primary' name='btn' href='review.php?id=$r[0]'>Review</a></td>";
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