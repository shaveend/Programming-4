<?php include('Elements/header.php')?>

<?php include('main.php')?>
<style>
    .carousel-inner{
        
    }

</style>

	<!-- Welcome page corosal  -->

	<div id="carouselExampleControls" class="carousel slide m-2" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('Images/moterbike_all.jpg');?>"" alt="Ajith Motors">
			<div class="carousel-caption d-none d-md-block">
		    <h3>Ajith Motors</h3>
		    <h5>Moterbike Solution</h5>
		  </div>
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="<?php echo base_url('Images/moterbike_showcase.jpg');?>" alt="Moterbike Showcase">
		  <div class="carousel-caption d-none d-md-block">
		    <h3>Ajith Showcase</h3>
		    <h5>Dream Wheels come true here</h5>
		  </div>
		</div>

		<div class="carousel-item">
		  <img class="d-block w-100" src="<?php echo base_url('Images/moterbike_service.jpg');?>" alt="Moterbike Service">
		  <div class="carousel-caption d-none d-md-block">
		    <h3>Ajith Services</h3>
		    <h5>You ride it, We take care of it!</h5>
		  </div>
		</div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Corosal ends here -->

<?php include('Elements/footer.php')?>
