<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<script>
		function fun()
		{
			alert("Your Have been Logged-in Successfully !");
		}
		
	</script>
</head>
<body>
<?php include "header.php"; ?>
<div  class="west">
		<form method="post">
		<h1 class="mint">User Login</h1>


<input class="inn" type="email" name="email" placeholder="Email" required ><br><br>
<input class="inn" type="password" name="password" minlength="6" maxlength="12" placeholder="Password" required ><br><br>
<button id="min" type="submit" name="btn" class="btn-primary btn btn-sm"  > Login  </button><br><br>

<label style="color:white;font-size: 17px; color: black;">New to To-Let?</label>

<a style="margin-left:25px; font-size:15px; font-family: sans-serif; color: darkblue;" href="Signup.php"  >Signup</a>
</form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>

</body>
</html>
<style type="text/css">
	body{
		margin=0;
	background-image: url(./images/h2.jpg);
	background-size:cover;
	background-repeat: no-repeat;

}
	.west{
		height: 320px;
		width: 350px;
		margin-left: 450px;
		margin-top:50px;
		margin-bottom: 50px;
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 15px 50px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);

	}

	.inn{
		color: white;
		height:35px;
		width: 250px;
		border:none;
		outline: none;
        border-bottom: 1px solid black;
        font-size:15px;
		background: transparent;
        box-sizing: border-box;
        

	}
	#min{

		margin-left: 5px;
		height:40px;
		width:250px;
		font-family: 'Rubik', sans-serif;
		font-size: 20px;
		font-weight: 600;
		background-color:blue;
		border: none;
		outline: none;
		color: white;
		
	}
	.mint{
		text-align: center;
		font-weight: 700;
		font-size: 40px;
		color:black;
		font-family: cursive;

	}
	::placeholder{
		color: rgba(255,255,255,0.8);
		font-size: 15px;
	}
	
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include "footer.php"; ?>
</body>
</html>
<script type="text/javascript">
	x=0;
	function showit()
	{
	  if(x==0)
	  {
	  	document.getElementById('btnsignin').style.visibility='hidden';
	  	x=1;

	  }
	  else{
	  	document.getElementById('btnsignin').style.visibility='visible';
	  	x=0;
	  }	
	}
</script>

<?php  
if (isset($_POST['btn']))
{
	$con=mysqli_connect("localhost","root","","ucritic");
 // include('db.php');
$records=mysqli_query($con,"select * from signup where  email ='".$_POST['email']."' and password = '".$_POST['password']."' and status='Approved'");
		$r=mysqli_num_rows($records);
		$data=mysqli_fetch_array($records);

		






		if($r==1)
	{
		
	
		//wellcome msg
		
		
		// session_start();
		$_SESSION['customerloggedin']=$_POST['email'];
	     $_SESSION['name']=$data['username'];
		

		// $_SESSION['id']=$_POST['pid'];
		header("location:index.php");
	
		  

	}
	else{
        
		
		 echo '<script> alert("Invalid Email or Password !")</script>';
		  
	}

}
?>
