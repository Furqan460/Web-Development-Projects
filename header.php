<?php
session_start();
if(!(isset($_SESSION['userloggedin'])))
{
	header("location:login.php");
}

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="head"> 
	
		Admin Dashboard 
	</div>

		

	</body>
</html>


<style type="text/css">

	body {
		margin: 0;
	}
	.head 
	{
		background-color: black;
		padding: 20px;
		font-size: 35px;
		color: white;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		z-index: 8799;
	}
	/*.header{
		font-family: 'Lobster', cursive;
		width:215px; 
		padding:0px 10px;
		margin-left:5px;
		z-index: 500;
		display: inline-block;
		
	}*/
/*.heading{
	  display: inline-block;
	   float: left;
	   font-weight:900;
	   font-size: 30px;

	  }*/


	/*.anchor{
		
		float: right;
		font-size: 30px; 
		margin-top:20px;  
	}*/

</style>