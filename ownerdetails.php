<?php
include('db.php');
$records=mysqli_query($con,"select * from registration where id ='".$_GET['id']."'");


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

	<div class="details">
		<h1> Owner Details</h1><br><br>



		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Address</th>";
			  echo "<th>Contact</th>";
			  echo "<th>Email</th>";
			  echo "<th>Status</th>";
			  echo "<th>Date</th>";

	           $r=mysqli_fetch_array($records);
	           
                   echo "<tr>";
                   // echo "<td> <img src='$r[]'> </td>"
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[3]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td>". $r[7]."</td>";
                   echo "<td>". $r[8]."</td>";

              
                     echo "</tr>";

			?>
		
		</table>
			<div class="panel panel-success">
				<div class="panel-heading">Description</div>
				<div class="panel-body"><?php echo $r[6]; ?></div>
				
			</div>
	</div>
	

</body>
</html>
<style type="text/css">
	.details{
		background-color: whitesmoke;
		margin-left:180px;
		margin-top: 80px;
		padding:30px;
		height: 800px;
		text-transform: capitalize;  
	}
</style>