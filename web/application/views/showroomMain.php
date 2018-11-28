<?php include('Elements/header.php')?>


 <div class=p-4>
   <h1>New Arrivals</h1>
</div>


<!--   Card items-->
<div class="card-deck m-2">

<?php

 for ($i = 0; $i < $results->num_rows(); $i++){
   $bike = $results->row($i);
   echo '<div class="card">';
   echo '<img style="width: 200px; height: 150px;" class="card-img-top" src='.$bike->photo.'>';
   echo '<div class="card-body">';
   echo '<h5 class="card-title">This is a '.$bike->name.'</h5>';
   echo '<p class="card-text">Type of '.$bike->type.' brand is '.$bike->brand.' and its made in '.$bike->country.' and aslo '.$bike->rear_tire.'</p>';
   // echo '<p class="card-text">'.$bike->brand.'</p>';
   // echo '<p class="card-text">'.$bike->price.'</p>';
   // echo '<p class="card-text">'.$bike->country.'</p>';
   // echo '<p class="card-text">'.$bike->rear_tire.'</p>';

     echo '</div>';
     echo '<div class="card-footer">';
     echo  '<a href="#" class="btn btn-primary">Rs. '.$bike->price.'</a>';
     echo  '<div class="float-right"><small class="text-muted">Visit Ajith Showcase for more info...</small></div><br>';

     echo '</div>';

   echo '</div>';

 }

?>

</div>

<!--   Card items-->
<!-- <div class="card-deck m-2">
  <div class="card">
    <img class="card-img-top" src=https://www.setaswall.com/wp-content/uploads/2017/06/Honda-Bike-Wallpapers-12-3200-x-2400-768x576.jpg alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
     <a href="#" class="btn btn-primary">Go somewhere</a>
     <div class="float-right"><small class="text-muted">Last updated 3 mins ago</small></div><br>

    </div>
  </div>
    <div class="card">
    <img class="card-img-top" src=https://www.setaswall.com/wp-content/uploads/2017/06/Honda-Bike-Wallpapers-12-3200-x-2400-768x576.jpg alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
     <a href="#" class="btn btn-primary">Go somewhere</a>
     <div class="float-right"><small class="text-muted">Last updated 3 mins ago</small></div><br>

    </div>
  </div>
    <div class="card">
    <img class="card-img-top" src=https://www.setaswall.com/wp-content/uploads/2017/06/Honda-Bike-Wallpapers-12-3200-x-2400-768x576.jpg alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
     <a href="#" class="btn btn-primary">Go somewhere</a>
     <div class="float-right"><small class="text-muted">Last updated 3 mins ago</small></div><br>

    </div>
    </div>
  </div> -->



<?php include('Elements/footer.php')?>
