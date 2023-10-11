<!DOCTYPE html>
<html>
<head>
	<?php include('all.php'); ?>

	<title></title>
</head>
<body>
	
	<div class="main">

		<h1 class="title">Admin Login </h1>
	<form method="post">
		<i class="fa fa-envelope" style="margin-left:40px; font-size:20px; color:grey; "></i> <input class="input" type="email" name="email_id" placeholder="Email" required ><br>
	
		<i class="fa fa-key" style="margin-left:40px; font-size:20px; color:grey;"></i><input class="input" type="password" name="password" placeholder="Password" minlength="8" maxlength="10" required ><br><br>
		 
		<input  id="subm"  type="submit" value="Let me in" name="btn" class="btn-info btn btn-lg">
	 
	 
	</form>
</div>


</body>
</html>
<style type="text/css">

        body{
        	margin:0px;
        	background-image: url(../images/l7.jpg);
        	background-size: 100%;
        	background-repeat: no-repeat;

        }
   ::placeholder{
		color: rgba(255,255,255,0.9);
		font-size: 15px;
	}


        .title{
	padding:10px; 
	margin-top:50px;
	font-family: 'Lobster', cursive;
	text-align: center;
	font-weight:900;
	font-size: 40px;
	color: #f8f8ff;
}
      
	.main{
		/*padding:20px;*/
		margin-left: 500px;
		height:400px;
		width:380px;
		/*background-color: rosybrown;*/
		margin-top:140px;
		/*border: 1px solid black;*/
		/*border-radius:15px; */
		/*opacity:.9;*/

		box-shadow: 0px 8px 16px rgba(0,0,0,0.9);
		padding: 10px 20px;
		background: linear-gradient(top,#3c3c3c, 0%,#222222,100%);
		background-color: -webkit-linear-gradient(top,#3c3c3c, 0%,#222222,100%);

		 
}
	.input{
   height:35px;
   width:200px;
   text-indent: 10px;
   margin-top:15px; 
   border: none;
   outline: none;
   /*background-color: rosybrown;*/
   border-bottom: 2px solid black;
   background: transparent;
        box-sizing: border-box;

   }
   #subm{
   	margin-left: 80px; 
   	height:45px;
   	width:150px; 
   	margin-top:15px; 
   	font-family: 'Lobster', cursive;
   	font-weight:700;
   	font-size: 20px; 
   	color:#f8f8ff;
   }
</style> 
<?php 
if (isset($_POST['btn']))
{
 
 include('db.php');

$record=mysqli_query($con,"select * from admin where email_id ='".$_POST['email_id']."' and password = '".$_POST['password']."' ");
$r=mysqli_num_rows($record);
// echo $r;




	if($r==1)
	{
		session_start();
		$_SESSION['userloggedin']=$_POST['email_id'];
		header("location:dashboard.php");

	}
	else {
		echo ("invalid user");
	}
}
?>