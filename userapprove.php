<?php
include('db.php');
$records=mysqli_query($con,"select * from signup where status ='Approved'");
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
		<h1 class="four"> Users </h1>
		<table class="table table-stripped table-bordered"  style="z-index: -1">
			<?php
			  echo "<tr>";
			  echo "<th>Username</th>";
			  echo "<th>Email-id</th>";
			  echo "<th>Mobile No.</th>";
			  echo "<th>Address</th>";
			  echo "<th>Gender</th>";
			  // echo "<th>Status</th>";
			  echo "<th>Block</th>";
			  // echo "<th>Unblock</th>";

	           while($r=mysqli_fetch_array($records))
	           {
                   echo "<tr>";
                   // echo "<td> <img src='$r[]'> </td>"
                   echo "<td>". $r[1]."</td>";
                   echo "<td>". $r[2]."</td>";
                   echo "<td>". $r[4]."</td>";
                   echo "<td>". $r[5]."</td>";
                   echo "<td>". $r[6]."</td>";
                    // echo "<td>". $r[7]."</td>";
                   echo "<td> <a class='btn btn-danger' href='userblock.php?id=$r[0]'> Block</a></td>";
                   // echo "<td> <a class='btn btn-success' href='ownerblock.php?id=$r[0]'> Unblock</a></td>";
              	   echo "</tr>";
            }  	   

			?>
		
		</table>
			<!-- <div class="panel panel-success"> -->
				<!-- <div class="panel-heading">Description</div> -->
				<!-- <div class="panel-body"><?php echo $r[6]; ?></div> -->
				
			<!-- </div> -->
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
