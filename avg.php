<p>
								<i class="fa fa-star" aria-hidden="true" style="color: #f9c339; margin: 5px"></i>
                                
<?php

 
  
    $records=mysqli_query($con, "select avg(rating) as avg  from review where pgid='".$_GET['pid']."' ");
    $r1=mysqli_fetch_assoc($records);
                                   $rat=substr($r1['avg'],0,3);

							     echo $rat; ?>/ 5 positive reviews
</p>