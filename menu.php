<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<div class="menu">
		<ul id="ulist">
			<li class="list"><a class="link" href="dashboard.php">DASHBOARD</a></li>



			<li class="list"><a class="link" href="allpg.php">VIEW ALL HOTELS</a></li>
			<li class="list"><a class="link"  href="viewpg.php">NEW HOTEL REQUESTS </a></li>
			<li class="list"><a class="link"  href="registeredpg.php">REGISTERED HOTELS</a></li>
			<li class="list"><a class="link"  href="pgblock.php">BLOCKED HOTELS</a></li>

			<li class="list"><a class="link" href="allowners.php">VIEW ALL HOTEL OWNERS</a></li>
			<li class="list"><a class="link" href="ownerrequest.php">NEW OWNER REQUEST</a></li>
			<li class="list"><a class="link" href="registeredowner.php">REGISTERED OWNERS</a></li>
			<li class="list"><a class="link" href="blockedowners.php">BLOCKED OWNERS</a></li>
			
			<li class="list"><a class="link" href="userapprove.php">USERS</a></li>
			<li class="list"><a class="link" href="blockuser.php">BLOCKED USERS</a></li>
				<li class="list"><a class="link" href="logout.php">LOGOUT</a></li>
			
		</ul>
	</div>

</body>
</html>


<style type="text/css">
	body {
		margin: 0px;
	}
	.menu {
		background-color: #333;
		width: 200px;
		/*height: auto;*/
		position: fixed;
		top: 87px;
		left: 0;
		bottom: 0;
		/*margin-top: 10px;*/
		
	}

	#ulist {
		margin: 0px;
		padding: 0px;
		/*height: auto;*/
	}

	.list {
		/*list-style: none;*/
		border-bottom: 1px solid white;
		padding: 10px;
		/*height:57px;*/
		}
	.link {
		text-decoration: none;
		color: white;
		font-size:11px; 
		text-transform: capitalize;


	}
	ul>li>a:hover{
		color:black; 
	}
</style>