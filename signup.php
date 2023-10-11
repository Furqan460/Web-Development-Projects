<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script>
		function fun()
		{
			alert("signed up");
		}
	</script>
</head>
<body>
<?php include('header.php');?>

<div  class="best">
		<form method="post">
		<h1 class="hint">Sign up</h1>

<input class="inp" type="text" name="username" placeholder="Username" required ><br><br>
<input class="inp" type="email" name="email" placeholder="Email" required ><br><br>
<input class="inp" type="password" name="password" minlength="6" maxlength="12" placeholder="Password" required ><br><br>
<input class="inp" type="text" name="mobileno" minlength="10" maxlength="12" placeholder="Mobile No." required ><br><br>


<textarea class="inp" rows="3" name="address" placeholder="Address" required></textarea><br><br>
<select name="gender" class="gen">
	<option style="color: black;">Gender</option>
	<option style="color: black;">male</option> 
	<option style="color: black;">female</option> 

</select><br><br>

<button id="sin" type="submit"  name="btn"   class="btn-primary btn btn-sm" >Sign up </button> <br> <br>
<!-- <div> -->
<!-- <div style="display: inline-block;">	 -->
<label style="color:white;font-size: 15px;">Existing member?</label>
<!-- </div> -->
<!-- <div style="float:right;"> -->
<a style="margin-left:25px; font-size:15px; font-family: sans-serif;" href="login.php">Login</a>
<!-- </div> -->
<!-- </div> -->
</form>
</div>
</body>
</html>
<style type="text/css">
	body{
		margin:0px;
		
	background-image: url(./images/h7.jpg);
	background-size: cover;
	background-repeat: no-repeat;

}
	.best{
		height: 520px;
		width: 350px;
		margin-left: 450px;
		margin-top:50px;
		margin-bottom: 50px;
		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 15px 50px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);

	}

	.inp{
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
	#sin{

		margin-left: 60px;
		height:40px;
		font-family: 'Rubik', sans-serif;
		font-size: 20px;
		font-weight: 600;
		background-color:blue;
		border: none;
		outline: none;
		color: white;
	}
	.hint{
		text-align: center;
		font-weight: 700;
		font-size: 40px;
		color:white;
		font-family: cursive;

	}
	.gen{

		background: transparent;
        box-sizing: border-box;
        color: rgba(255,255,255,0.8);
        height:25px;
        width:250px; 
        border: none;
        outline: none;
        border-bottom: solid black 1px;
        border-color: black; 
        
	}

	::placeholder{
		color: rgba(255,255,255,0.8);
		font-size: 15px;
	}

</style>
<?php include('footer.php');?>

<?php  
if (isset($_POST['btn']))
{
	error_reporting(0);
 $con=mysqli_connect("localhost","root","","uCritic");
 $res=mysqli_query($con,"select * from signup where email = '".$_POST['email']."' ");

			$t=mysqli_num_rows($res);
			echo $t;
			if($t==0)
			{
			    $records=mysqli_query($con,"insert into signup(username,email,password,mobileno,address,gender) values('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobileno']."','".$_POST['address']."', '".$_POST['gender']."')");


					if($records)
					{

					     echo '<script language="javascript">';
					 echo 'alert("Thanks for Registering with us .Please Login now to give your uCritic")';
					    echo '</script>';
					}
			}

 
		else 
		{
			  echo '<script language="javascript">';
		 echo 'alert("Email Already exists")';
		    echo '</script>';
		}



	
	
               
}


?>