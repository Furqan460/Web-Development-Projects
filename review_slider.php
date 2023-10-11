

<div id="reviews">
    <h1 style="text-align: center; color:black">  <span style='font-weight: 900;'>Reviews</span></h1><br/>
    <?php
  $con=mysqli_connect("localhost","root","","uCritic");
          $records=mysqli_query($con,"select * from review where pgid='".$_GET['pid']."'");
        while($r=mysqli_fetch_array($records) )
            {
               
            ?>

            <div class="card">
              <div class="container1">
                <h5><b><?php echo $r['email'] ?> </b></h5> 

                <p class="text-justify"><?php echo $r['reviews'] ?></p> 
                
                <p> Rating: &nbsp; <?php echo $r['rating'] ?> /5 &nbsp;
                    <?php  $i=0; $rat=$r['rating'];

                    while($i<$rat)
                    {
                    echo '<span><i class="fa fa-star" style="color: #fb641b"></i></span>'; //red
                    $i++;
                    }

                    while($i<5)
                    {
                        echo '<span><i class="fa fa-star" style="color:"whitesmoke"></i></span>'; //black
                       $i++;
                    }
                    ?>


                    <p class="small text-center" style="color: #567">Reviewed On: &nbsp;<?php echo $r['datetime'] ?></p>
              </div>
            </div>
     <?php  }?>
</div><br><br>
     
<style type="text/css">
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  /*background-color: whitesmoke;*/
  
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
   font-family: Arial,Sans-Serif;
   text-transform: capitalize;
   border-radius: 10px;
   padding: 10px;


  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container1 {
  padding: 2px 16px;
  
}
.rating-img{
    margin-left:5%;
/*  width: 40%; 
    height: px;*/
}
#more {
    padding: 13px 60px;
    font-size: 16px;
    word-spacing: 7px;

}
</style>
