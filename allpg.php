<?php
include('db.php');
$records=mysqli_query($con,"select * from pgdetails");
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

		<h1 style="font-family: 'Lobster', cursive;;font-weight: 900;">All HOTELS</h1>
		<table class="table table-stripped table-bordered">
			<?php
			  echo "<tr>";
			  echo "<th>Images</th>";
			  echo "<th>Name</th>";
			  echo "<th>Location</th>";
			  echo "<th>Status</th>";
			  echo "<th>Date</th>";
			  echo "<th> Approve</th>";
			  echo "<th> Block</th>";
			  echo "<th>view Details</th>";
			  

	          while($r=mysqli_fetch_array($records))
	           {
                    echo "<tr>";
                    $arr=explode(",", $r[10]);
                     $img='owner/'.$arr[0];
                     $img='../owner/'.$arr[0];
                     echo "<td>  <img src='$img' style='width:50px'></td>";
                    echo "<td>". $r[1]."</td>";
                    echo "<td>". $r[2]."</td>";
                    echo "<td>". $r[8]."</td>";
                    echo "<td>". $r[9]."</td>";
                    echo "<td> <a class='btn btn-success' href='pgregistered.php?id=$r[0]' >Approve</a></td>";
                    echo "<td> <a class='btn btn-danger'href='blockpg.php?id=$r[0]'> Block</a></td>";
                    echo "<td> <a class='btn btn-info' href='pgdetails.php?id=$r[0]'>View Details</a></td>";
                  	echo "</tr>";
                 }
			?>
		</table>
	
	


	
		
	</div>

	

</body>
</html>
<style type="text/css">
	.details{
		background-color: whitesmoke;
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: auto;
		text-transform: capitalize;  
	}

</style>

</body>
</html>