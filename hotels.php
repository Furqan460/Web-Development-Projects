<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php include ('header.php');?>
  <?php  
$con=mysqli_connect("localhost","root","","ucritic");


    $res=mysqli_query($con,"select * from pgdetails where status='Approved'"); ?>

   <div  style='margin-top: 30px; margin-bottom: 30px;'> 
      <br/>
      <h1 style="text-align: center;font-family: 'Lobster', cursive; color:#c60;font-weight:900;">All Hotels</h1>
         <div class="container-fluid">
            <div style="height:auto; margin-left:50px; margin-top:30px; ">               
              <div class="row div_products">
                <?php
                   while($r=mysqli_fetch_array($res))
                   { 
                    echo "<a class='all_details' style='width:30%; display:inline-block: vertical-align:top ; text-decoration:none; ' href='all-details.php?pid=".$r[0]."' >";       
                    $arr=explode(",", $r[10]);
                     $img='owner/'.$arr[0];
                     
                      
                      echo "<img src='$img' class='img_product'>";
                     
//                       echo "<img src='owner/$r[10]' class='img_product'>";
                      echo "<span class='s_name'>" . $r[1]." </span>";

                      
   
                      echo "<span class='deal'>"." &#8377;".($r[6])." Only"."</span>";                          
                     echo "</a>";
                                           
                   }?>
              </div> <!-- row     -->  
            </div>              
           </div> <!--  container -->
    </div>
  <?php include ('footer.php');?>

</body>
</html>



<style >

  .img_product
  {
    transition: all 1s;
    cursor: crosshair;
    z-index: 99;
  }

  .img_product:hover
  {
    transform: scale(1.4);
  }
  body
  {
  margin: 0;  
  font-family:'Helvetica Neue',Helvetica,Arial,Sans-Serif;
  color: #464646;
  font-size: 15px;

}

#div_products
{
  height:auto;  
  margin-left:35px;
  margin-top:30px;
  border-top: 5px solid #eaeaea ;

}


.all_details
{

display: inline-block;
height: 170px;
width:250px;
vertical-align: top;
margin-right:25px;
margin-top: 15px;
margin-bottom: 50px;
border: solid #eeeded 2px;
background: #fff;
padding: 5px;
    
}

.img_product
{
  height:160px;
  width:200px;
  cursor: pointer;
  margin-right: 15px;
}

.s_name
{
  
  text-transform: capitalize;
  position: absolute;
   margin-top: 25px;
font-size: 17px;
    word-break: break-word;
    width: 170px;
color: #e80a89;
font-size: 18px;
letter-spacing: 1px;
  height: 80px;
  cursor: pointer;
   z-index: 1;
   transition:all 1s;
}

.deal
{
display: block;

margin-top: -60px;
position: absolute;

margin-left: 240px;

font-size: 15px;
font-weight: 600;
color: #666;

}
</style>

