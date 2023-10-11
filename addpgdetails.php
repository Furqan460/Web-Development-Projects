<!DOCTYPE html>
<html>
<head>
	<?php include('allowner.php');?>
	<?php include('header.php');?>
	<?php include('menu1.php');?> 
	<script>
		function go()
		{
			alert("Property will be approved soon,if filled correctly");
		}
	</script>
	
	
	<title></title>
</head>
<body>
	<div class="container" style="margin-top:90px;opacity:.9;);
">
		
	<form method="POST" enctype="multipart/form-data"><br>

		<div class= "divsion" style="border: 1px solid black;">
		<h1 class="text-center" style="font-size: 40px; font-weight:900; font-family: cursive; ">Hotel Details</h1>
		<div class="form-group">
            <label>PG Name</label>
            <input  type="text" name="pgname" class="form-control" style="background-color: whitesmoke;border: 1px solid black;" required>	
				</div>
				<div class="form-group">
            <label>PG Location</label>
            <input  type="text" name="pglocation" class="form-control" style="background-color:whitesmoke; border: 1px solid black;"required>					
				</div>
			<div class="form-group">
                <label>No Of Rooms</label>
                <input  type="text" name="noofrooms" class="form-control" style="background-color: whitesmoke;border: 1px solid black;"required>					
			</div>
				<div class="form-group" >
			            <label>Accomodation</label>
			            <select name="acc" class="form-control" style="background-color:whitesmoke;border: 1px solid black;" required>
			            <option>-- Select --</option>
			            <option>Only for Boys</option>
			            <option>Only for Girls</option>
			            <option>Only for Family</option>
			            <option>For girls and family</option>
			            <option>For boys and family</option>
			            <option>For boys,girls and family</option>
			            
            </select>					
				</div>

				<div class="form-group">
					<label class="lab">Description</label>
					<textarea style="background-color: whitesmoke;border: 1px solid black;" rows="4" name="des" class="form-control"required ></textarea>
			</div>
			<div class="form-group">
             		<label>Rent</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="text" name="rent" class="form-control"required>					
			</div>
			<div class="form-group">
            <label>Google Map</label>
            <input  type="text" name="addlocation" class="form-control" style="background-color: whitesmoke;border: 1px solid black;"required>	
				</div>

			<div class="form-group">
             		<label>Image Upload</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="file" name="filename[]"  multiple class="form-control"required>					
			</div>
			<div class="form-group">
             		<label>Image Upload 2</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="file" name="filename[]"  multiple class="form-control"required>					
			</div>
			<div class="form-group">
             		<label>Image Upload 3</label>
            		<input style="background-color: whitesmoke;border: 1px solid black;" type="file" name="filename[]"  multiple class="form-control">					
			</div>

			<div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick=go(); value="Add My Hotel" class="form-control btn btn-success btn-lg">	
			</div>
				
		
		</div>
	</form>
</div>

</body>
</html>
<style type="text/css">
body{
	margin:0px;
	/*background-image:url("../images/l1.jpg"); */
	background-repeat: no-repeat;
	background-size: 100%;
	background-color:whitesmoke;
}

	.divsion{
	
		width:600px;
		margin-left:300px;
		 
		/*padding: 20px;*/
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 10px 20px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%

	}
	.lab{
		font-size: 15px;

	}
</style>

<?php

include('db.php');

if (isset($_POST['btn']))
{
  
	$upload="";

	for($i=0;$i<count($_FILES['filename']['name']); $i++) 
	{
	  
		$name=$_FILES['filename']['name'][$i];
 		$destination='images/'.rand().time().$name;
 		$upload.=$destination.","; 
 		$source=$_FILES['filename']['tmp_name'][$i];
 		move_uploaded_file($source, $destination);
    }

 $records=mysqli_query($con,"insert into pgdetails(pgname,pglocation,noofrooms,accomdation,description,rent,pgownerid,images,map) values('".$_POST['pgname']."','".$_POST['pglocation']."','".$_POST['noofrooms']."','".$_POST['acc']."', '".$_POST['des']."' , '".$_POST['rent']."', '".$_SESSION['pgid']."', '$upload','".$_POST['addlocation']."')");


// echo "insert into pgdetails(pgname,pglocation,noofrooms,accomdation,description,rent,pgownerid,images,map) values('".$_POST['pgname']."','".$_POST['pglocation']."','".$_POST['noofrooms']."','".$_POST['acc']."', '".$_POST['des']."' , '".$_POST['rent']."', '".$_SESSION['pgid']."', '$upload','".$_POST['addlocation']."')";


 }
?>
