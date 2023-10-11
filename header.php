<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <?php session_start();
  $db=mysqli_connect("localhost","root","","ucritic");
  ?>
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>


	

 <div style='background: linear-gradient(#323232,#425e66); position: sticky;top: 0; z-index: 878787'> 
  <nav class="navbar navbar-inverse"  style='padding-top: 10px; padding-bottom: 20px;background: linear-gradient(#323232,#425e66);'>
  <div class="container-fluid"> <br>
    <div class="navbar-header" style='border-radius: none; margin-left: 20px; margin-right: 40px;'>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="index.php" style="font-size: 39px; font-family: 'Lobster', cursive; color:#fff; ">  uCritic</a>
    </div>
    <div>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav" style='font-size: 16px;'>
        
        <li class=""><a href="index.php">Home</a></li>

   <li><a href="Hotels.php">Hotels</a></li>
    </ul>

      <form class="navbar-form navbar-right" action="search.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="txt">
          <div class="input-group-btn">
            <button class="btn btn-info" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">








        <?php if(isset($_SESSION["customerloggedin"])) 
 {





// echo "welcome, {$_SESSION['username']}";     
$user = $_SESSION['customerloggedin'];

//echo "$user";

?>
          
      
     





            
            <li> <a class="li_other1"   href='logout_user.php'> <span  class="glyphicon glyphicon-log-out"> </span> Logout </a>  </li>
            <li> <a class="li_other1"> <span  class="glyphicon glyphicon-user"> </span> <?php echo($user); ?> </a>  </li>
          <?php }
          else {?>
          
        <li><a  href= "login.php" id='btnsignin'><span  class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li><a  href="signup.php" id='btnsignup'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <?php }?>
      </ul>
    </div>
  </div>
</nav>
</div>


  
</div>


</body>
</html> 






<style>
.txt_login
{
  color: #9c9c9c;
  margin-top: 10px;
  font-size:14px;

}
.login_txt
{
  color: #222;
  font-size: 24px;
  font-weight:700;
  margin: 30px 30px 0px 30px;
  text-align: center;
  text-shadow: 1px 0 1px #777;

}

 .login-acc
{

 font-family: 'Open Sans', sans-serif;
font-weight:700;
color: #ffffff;
cursor: pointer;
font-size: 16px;
}

.mail-text
{
  color: #777;
  font-size:16px;
  margin-left: 10px;
  
}


#login
{

  top:25%;
  width: 450px;
  height:auto;
  padding: 5px;
  padding-bottom: 0px;
  margin-bottom: 0px;
  position: absolute;
  border-radius:0px 15px;
  background-color:#333333;
  z-index: 9999990;
  border: 2px solid #c60;
  font-size: 17pt;

}
.input_all_login
{
  font-size:16px;
  text-indent: 7px;
  margin-top: 3px;
  
}
.new
{
  text-align: center;
    color: #2874f0;
    margin-top: -10px;
    margin-bottom: 20px;
    font-size: 15px;
    cursor: pointer;
   
}

#signup
{ 
width: 550px;
height:auto;
padding: 5px;
padding-bottom: 0px;
margin-bottom: 0px;
position: absolute;
border-radius: 15px 0px;
background-color:#323233;
z-index: 9999990;
border: 3px solid #46b8da;
font-size: 17pt;
margin-top: 10px;
padding: 7px;


}

.join {
  color: #e80a89;
  font-size: 44px;
  font-weight:700;
  float: left;
  
  margin-left:60px;
  text-shadow: 1px 0 1px #777;
}

.input_all
{
  
  border: 1px solid #d9d9d9; 
  padding: 8px 0px 8px 30px;
  outline:none;
  margin-top: 20px;
  margin-bottom: 8px;
  color: #9c9c9c;
  font-size: 16px;

}

.input_all:hover,
.input_all:active

{
  border: 3px solid #46b8da;
}
 .top1
  {
    background: linear-gradient(to right,#ff8a00,#da1b60);
    color: #ffffff;
    height: 60px;
     width:100%;
    padding: 10px;
    text-align: center;
    font-size: 16px;
  }
</style>

