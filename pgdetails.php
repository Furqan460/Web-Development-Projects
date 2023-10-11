<?php


?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('menu.php');?>
	<?php include('all.php');
include('db.php');

		$records=mysqli_query($con,"select * from pgdetails where id ='".$_GET['id']."'");
		?>

			<div class="details">
		<h1 style="text-align:center; font-weight:700;  font-family: cursive; color: burlywood;"> hOTEL Details</h1><br><br>
     <?php $r=mysqli_fetch_array($records); ?>
     <div class="tags">
     	<?php
     				$arr = explode(",", $r[10]);
                     $img='PG-owner/'.$arr[0];
                     $img='../PG-owner/'.$arr[0];
					echo "<img src='$img'style='width:600px;'>";
		?>			

	
</div>
<div style="display: inline-block;">
	<h1 class="h1"><?php echo"Name" .": &nbsp;"; echo $r[1];?></h1>
    <h2 class="h1"><?php echo"Location" .": &nbsp;"; echo $r[2];?></h2>
    <h3 class="h1"><?php echo"No. of Rooms" .": &nbsp;";echo $r[3];?></h3>
    <h1 class="h1"><?php echo"Type" .": &nbsp;"; echo $r[4];?></h1>
    <h1 class="h1"><?php echo"Rent" .":&nbsp; &nbsp;"; echo $r[6];?></h1>
    <h1 class="h1"><?php echo"Status" .": &nbsp;"; echo $r[8];?></h1>
    <h1 class="h1"><?php echo"Date" .": &nbsp;"; echo $r[9];?></h1>
    <h1 class="h1"><?php echo"Description" .": &nbsp;"; echo $r[5];?></h1>
    


</div>
</div>


</div>


	
	

</body>
</html>
<style type="text/css">

	.details{
		
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: auto;
		text-transform: capitalize;
		font-weight: 900;
		/*color: whitesmoke; */
		
		}
	
	.h1{
		margin-left: 70px;
		font-size: 16px;
		color: #323232;
		
	}
	#imag{
			
			width: 400px;

	}
	#img :hover {
		transform: scale(1.4);
	}
	
</style>