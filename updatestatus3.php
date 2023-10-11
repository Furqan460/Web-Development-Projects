<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('allowner.php');?>
	<?php include('header.php');?>
	<?php include('menu1.php');?>
	
	<title></title>
</head>
<body>
	<div style="margin-top:200px; width:50%;margin-left:300px;">
		<h1>Update Flat/Villa Booking Status</h1>
<form>
	<div class="form-group" >
			            <!-- <label>Accomodation</label> -->
			            <select name="acc" class="form-control" style="background-color:whitesmoke;border: 1px solid black;">
			            <option>-- Select --</option>
			            <option>Approved</option>
			            <option>Currently occupied</option>
			            <option>Cancel</option>
			            <option>Departured</option>
			          
            </select><br><br>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            <div class="form-group">
				<input style="height: 40px; color:black; font-weight: 700;" type="submit" name="btn" onclick="return confirm ('Do you want to add details?')"; value="Update" class="form-control btn btn-success btn-lg">	
			</div>
								
				</div>
</form>
</div>
</body>
</html>
<?php
 include('db.php');
 if (isset($_GET['btn']))
 {
 	$records=mysqli_query($con,"update flatvillabooking set status='".$_GET['acc']."' where id='".$_GET['id']."'");
 	header("location:requestbooking.php");
 }

?>