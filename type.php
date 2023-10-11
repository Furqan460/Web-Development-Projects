<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<?php include('allowner.php');?>
	<?php include('header.php');?>
	<?php include('menu1.php');?>  
		<title></title>
</head>
<body>
	<div class="container" style="margin-top:90px;opacity:.9;">
		
	<form method="POST" enctype="multipart/form-data"><br>

		<div class= "divsion" style="border: 1px solid black;">
		<h1 class="text-center" style="font-size:40px; font-weight:900; font-family: cursive; ">Details</h1>
	
		<div class="form-group">
			
			<label><input type="radio" value="Flat" name="fv">Flat</label>
		
			
			<label><input  type="radio" value="Villa" name="fv">Villa</label><br><br>
		
            <!-- <label class="lab">Name</label> -->
            <input type="text" name="tname" placeholder="Name" class="form-control" style="background-color: whitesmoke;border: 1px solid black;" >	
				</div>
				<div class="form-group">
            <!-- <label class="lab">Flat Location</label> -->
            <input  type="text" name="tlocation" placeholder="Flat Location" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
				</div>
			<div class="form-group">
                <!-- <label class="lab">No Of Rooms</label> -->
                <input type="text" name="nofrooms" placeholder="No Of Rooms" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
			</div>
			 <!-- <label class="lab">Storey</label> -->
			  <select name="storey" class="form-control" style="background-color: whitesmoke;border: 1px solid black;"><br>
			            <option style="color:#000;">-- Storey --</option>
			            <option>3</option>
			            <option>4</option>
			            <option>5</option>
			            <option>8</option>
			            <option>10</option>
			             </select><br><br>
				<div class="form-group" >
			            <!-- <label class="lab">Set</label> -->
			            <select name="opt" placeholder="Set" class="form-control" style="background-color: whitesmoke;border: 1px solid black;" ><br>
			            <option>-- Set --</option>
			            <option>1BHK</option>
			            <option>2BHK</option>
			            <option>3BHK</option>
			             </select><br><br>
			            <!-- <input  type="text" name="accomdation" class="form-control" style="background-color: whitesmoke;border: 1px solid black;"><br> -->				
            <!-- <label class="lab">Facility</label> -->
            <select name="fac" placeholder="Facility" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">
			            <option>-- Facility --</option>
			            <option>Ac rooms</option>
			            <option>Non Ac rooms</option>
			            </select>		
				</div>
			<div class="form-group">
					<!-- <label class="lab">Description</label> -->
					<textarea rows="4" name="des" placeholder="Description" class="form-control" style="background-color: whitesmoke;border: 1px solid black;" ></textarea>
			</div>
			<div class="form-group">
             		<!-- <label class="lab">Rent</label> -->
            		<input type="text" name="rent" placeholder="Rent" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
			</div>
			<div class="form-group">
            <!-- <label class="lab">Google Map</label> -->
            <input  type="text" name="map" placeholder="Google Map" class="form-control" style="background-color: whitesmoke;border: 1px solid black;">	
				</div>

			<div class="form-group">
             		<!-- <label class="lab" >Image Upload</label> -->
            		<input type="file" placeholder="Image Upload" name="files[]"   multiple class="form-control" style="background-color: whitesmoke;border: 1px solid black;">					
			</div>

			<div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Add Details" class="form-control btn btn-success btn-lg">	
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
		color:black;

	}
	.inns{

		       
       /*box-sizing: border-box; */
       /*background: transparent; */
       /*background-color: whitesmoke;
       border: 1px solid black;*/
       /*background: transparent;*/
	}
	
	::placeholder{
		color:black;
		/*color: rgba(255,255,255,0.8);*/
		font-size: 15px;
	}
</style>



<?php

include('db.php');

if (isset($_POST['btn']))
{
  
	$upload="";

	for($i=0;$i<count($_FILES['files']['name']); $i++) 
	{
	  
		$name=$_FILES['files']['name'][$i];
 		$destination='images/'.rand().time().$name;
 		$upload.=$destination.","; 
 		$source=$_FILES['files']['tmp_name'][$i];
 		move_uploaded_file($source, $destination);
    }

 $records=mysqli_query($con,"insert into details(type,name,location,noofrooms,storey,sets,facility,description,pgownerid,rent,images,map) values('".$_POST['fv']."','".$_POST['tname']."','".$_POST['tlocation']."','".$_POST['nofrooms']."', '".$_POST['storey']."' , '".$_POST['opt']."', '".$_POST['fac']."','".$_POST['des']."','".$_SESSION['pgid']."','".$_POST['rent']."', '$upload','".$_POST['map']."')");

// echo "insert into details(type,name,location,noofrooms,storey,sets,facility,description,pgownerid,rent,images,map) values('".$_POST['fv']."','".$_POST['tname']."','".$_POST['tlocation']."','".$_POST['nofrooms']."', '".$_POST['storey']."' , '".$_POST['opt']."', '".$_POST['fac']."','".$_POST['des']."','".$_SESSION['pgid']."','".$_POST['rent']."', '$upload','".$_POST['map']."')";
 }
?>
