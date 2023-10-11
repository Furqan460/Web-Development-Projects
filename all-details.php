<!DOCTYPE >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Property</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<?php 
      include('header.php');?>
   <div style='height: 40px;'></div>
        <div class="div_left_side" style='margin-bottom: 20px; margin-left: 30px;'>
          
            <?php 
            $con=mysqli_connect("localhost","root","","ucritic");
           $records=mysqli_query($con,"select * from pgdetails where id='".$_GET['pid']."'");

          $r=mysqli_fetch_array($records);
           
             
            $arr=explode(",", $r[10]);
             $img='owner/'.$arr[0];
            echo "<img id='bigimg' src='$img' style='height:300px; width:500px' class='img_product_big'>". '<br/>';


             echo "<div class='div_images'>";
               for($i=0;$i<count($arr)-1;$i++)
       	        {
       	        	 $img='owner/'.$arr[$i];

                 echo "<img src=' $img ' onclick='myfunc($i)' id='a".$i."' class='img_product_small'>";
                 }
             echo "</div>";
            ?>
          

           <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 10px 5px" >Hotel  description</div>
            <p id="prod_des"><?php echo  $r[5];?></p>

                  <div style='border-bottom:1px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>
<!-- 
            <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 10px 5px" >About Hotel</div>
            <p id="prod_des"><?php echo  $r[5]; ?> </p> -->

                  <div style='border-bottom:1px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>


            

</div>

 <div class ="div_right_side" style="margin-left: 30px;">
    <span style="font-size:22px; color:#111;"> <?php echo $r[1] ?> </span> <br/>

            <div  style='color:#bbb; font-size:14px;'>Id :  <?php echo $r[0] ?> </div>

            <div  style='margin-top:10px; color:#bbb; font-size:14px;'> Location:  <?php echo $r[2] ?> </div> <br/>


            <table id="table_one" cellspacing="10">

            <tr> <td>  Rent: </td> <td style=' letter-spacing:1px; line-height: 1.9'><?php echo "&#8377;" ,$r[6] ?>  </td></tr>
            
             <tr> <td>   No.of Rooms: </td> <td style="letter-spacing:1px;line-height: 1.9" > &nbsp; &nbsp; <?php echo  $r[3]; ?></td>
                    <tr><td><?php  include('avg.php'); ?></td></tr>


    	   	  <tr> <td>  For:</td> <td style='color:#b12704; font-size:19px; font-weight:600; line-height: 1.9 letter-spacing:1.2px;'> <?php echo $r[4] ?> </td> </tr>
          

                 </table>
    	   	
    	   	   	<br/>

         
                      <div style='border-bottom:1.5px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>
                  <br/>
  
               
              
                     <br/>   <br/>
               <div style='border-bottom:1.5px solid #f0f0f0; margin:20px 0px 20px 0px;'></div>
               <div style="color:#C60; font-size:17; font-weight:600; margin:10px 0px 15px 5px " > Handover Details</div>

             <span style='font-weight:500; color:#567; font-size: 15px;'> Estimated Handover:</span> <span style='font-weight:500; color:#567; font-size: 14px;'> <?php echo $d=date('D d M ',strtotime("+0 days")); echo ' - ';  echo $d=date('D d M ',strtotime("+3 days"));  ?></span>

            <br/>


 	</div>
  
 	<h1 style="text-align: center;">Location</h1>
 	<br/>

 	<?php echo $r[11]?>




 <?php include('review_slider.php') ?>  


 <?php  

  if(isset($_SESSION['customerloggedin']))
  {
    include('review.php');

    } 

    ?>  
     
 <?php include('footer.php') ?>  
</body>
</html>




  <script>
    lastimgid="a0";
    document.getElementById(lastimgid).style.border="1.5px solid #da1b60";
    	function myfunc(cal)
    	{
        document.getElementById(lastimgid).style.border="1.5px #ddd solid";
    		id= "a"+cal;
    		document.getElementById("bigimg").src= document.getElementById(id).src;

        document.getElementById(id).style.border="1.5px solid #da1b60";

          lastimgid=id;
    	}

    </script>
<style type="text/css">
	

body 
{
	/*margin: 0;*/
	background-color:#fff;
	color: #111;
	text-transform: capitalize;
}
iframe{
	width: 100% !important;
}



.div_left_side
{
	width:45%;
	margin: 5px;
	padding: 5px;
	padding-left:20px;
	height:auto;
	display: inline-block;
	vertical-align: top;

}

.div_right_side
{
	width:45%;
	height: auto;
    
     margin-top:30px;
     top:200px;
     padding: 10px;
 
  display: inline-block;
  vertical-align: top;
  	 /*border: 1px solid #f0f0f0;*/
}

.img_product_big
{
	margin: 25px;
	margin-left: 70px;
	transition: all .9s ;
	cursor: crosshair;
	 border: 1.5px solid #f0f0f0;
}

.img_product_big:hover
{
	transform:scale(1.3);
}
	


.div_images
{
	margin-left:100px; 
}

.img_product_small
{
	margin-left:7px;
	width: 45px;
	height: 45px;
   border: 1.5px #ddd solid;
   cursor: pointer;
   border-radius:5px;

}


.img_product_small:active
{
	
	 border:1.5px solid #fb760b;
}

#table_one
{
	font-size:15px;
	color:#555;
	
}
#table_one td 
{
	    /*display: table-cell;*/
	    text-align: left;

}





#buy_now:hover
{
	 background: #ff7f20;
	     box-shadow: 0 1px 2px 0 rgb(12,33,5);
}

#buy_now
{
	/*background-color: #ff9f00;
   text-decoration: none;
	font-weight: 500;
	height: 40px;
	width:160px;
	text-align: center;
	font-family: Roboto,Arial,sans-serif;
	padding: 10px;
	text-transform: uppercase;
    font-size: 17px;
	border-radius:8px;
    border: none;
    outline: none;*/
    cursor: pointer;
	margin-left: 70px;
   
    color: #fff;
    text-decoration: none;

    padding: 15px 30px;
    min-width: 250px;
    margin-right: 6px;
    text-transform: uppercase;
    border-radius: 2px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .1);
    font-size: 16px;
    font-weight: 570;
        /*background: #fb641b;*/
	background-color: #ff9f00;

            border: none;
    color: #fff;
}
}
#prod_des
{
	text-align: justify;
	
	margin-left: 13px;
	margin-right: 8px;
	margin-bottom: 10px
	font-weight: 500;
    color: #393939;
    font-size: 13px;
    line-height: 1.7;
  


}
</style>