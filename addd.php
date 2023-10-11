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
	<div class="container" style="margin-top:90px;">
		
	<form method="POST" enctype="multipart/form-data"><br>

		<div class= "divsion" style="border: 1px solid black;">
		<h1 class="text-center" style="font-size:40px; font-weight:900; font-family: cursive; "> PG Details</h1>
	
		<div class="form-group">
			
			
            <input  class="inns"  type="text" name="pgname" placeholder="PG Name" class="form-control">	
				</div>
				<div class="form-group">
            <!-- <label class="lab">Flat Location</label> -->
            <input style="width:350px;" class="inns" type="text" name="pglocation" placeholder="PG Location" class="form-control">					
				</div>
			<div class="form-group">
                <!-- <label class="lab">No Of Rooms</label> -->
                <input style="width:350px;" class="inns" type="text" name="noofrooms" placeholder="No Of Rooms" class="form-control">					
			</div>
			 <!-- <label class="lab">Storey</label> -->
			  <select class="inns" name="acc" class="form-control"><br>
			            <option style="color:#000;">-- Accomodation --</option>
			            <option>Only for Boys</option>
			            <option>Only for Girls</option>
			            <option>Only for Family</option>
			            <option>For girls and family</option>
			            <option>For boys and family</option>
			            <option>For boys,girls and family</option>
			             </select><br><br>
				<div class="form-group">
					<!-- <label class="lab">Description</label> -->
					<textarea class="inns" rows="4" name="des" placeholder="Description" class="form-control" ></textarea>
			</div>
			<div class="form-group">
             		<!-- <label class="lab">Rent</label> -->
            		<input class="inns"  type="text" name="rent" placeholder="Rent" class="form-control">					
			</div>
			<div class="form-group">
            <!-- <label class="lab">Google Map</label> -->
            <input class="inns" type="text" name="addlocation" placeholder="Google Map" class="form-control">	
				</div>

			<div class="form-group">
             		<!-- <label class="lab" >Image Upload</label> -->
            		<input class="inns"  type="file" placeholder="Image Upload" name="filename[]"   multiple class="form-control">					
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
	background-image:url("../images/52.jpg"); 
	background-repeat: no-repeat;
	/*background-color: #c0c0c0;*/
	background-size:cover;
}

	.divsion{
	
		width:500px;
		margin-left:300px;
		padding: 20px;
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		/*padding: 10px 20px;*/
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);


	}
	.lab{
		font-size: 15px;
		color:black;

	}
	.inns{

		background: transparent;
        box-sizing: border-box;
        border: none;
        outline: none;
        border-bottom: 1px solid black;
        width: 350px;
        text-indent:10px;
        margin-left:25px;  
        
        
	}
	::placeholder{
		color:black;
		/*color: rgba(255,255,255,0.8);*/
		font-size: 15px;
	}
</style>


