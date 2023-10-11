<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include('header.php');
		include('db.php');
		$records=mysqli_query($con,"select * from pgdetails where id ='".$_GET['id']."'");

	?>
	<?php include('menu1.php');?> 
		<!-- <?php include('allowner.php');?> -->
	<div class="details">
		<h1 style="text-align:center; font-weight:700;  font-family: cursive; color: burlywood;"> PG Details</h1><br><br>
     <?php $r=mysqli_fetch_array($records); ?>
     <div class="tags">
     	<?php
     				$arr = explode(",", $r[10]);
                     $img='owner/'.$arr[0];
                     $img='../owner/'.$arr[0];
					echo "<img src='$img'style='width:600px;'>";
		?>			

	<!-- <img src="<?php echo $r[10]?>" id="imag"> -->
</div>
<div style="display: inline-block;">
	<h1 class="h1"><?php echo"Name" .":"; echo $r[1];?></h1>
    <h2 class="h1"><?php echo"Location" .":"; echo $r[2];?></h2>
    <h3 class="h1"><?php echo"No. of Rooms" .":";echo $r[3];?></h3>
    <h1 class="h1"><?php echo"Type" .":"; echo $r[4];?></h1>
    <h1 class="h1"><?php echo"Description" .":"; echo $r[5];?></h1>
    <h1 class="h1"><?php echo"Rent" .":"; echo $r[6];?></h1>
</div>
</div>


</div>

</body>
</html>
<style type="text/css">
body{
	margin: 0;
	background-color: tomato;
	/*background-image: url("../images/two.jpg");*/
	/*background-repeat:no-repeat;
	background-size:cover;*/


}
.tags{
	display: inline-block;
	float: left;

}
	.details{
		
		margin-left:200px;
		margin-top: 80px;
		padding:30px;
		height: auto;
		text-transform: capitalize;
		font-weight: 900;
		color: whitesmoke; 
		
		}
		
	.h1{
		margin-left: 70px;
		font-size: 20px;
		/*margin-bottom: 50px;*/
		/*font-family:cursive;*/
	}
	#imag{
			/*margin-left:330px;*/
			/*margin-top: 20px; */
			width: 400px;

	}
	#img :hover {
		transform: scale(1.4);
	}
</style>