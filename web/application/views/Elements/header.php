<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ajith Moters</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">

</head>

<body>

	<!-- Navbar Code comes Here -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/Showcase');?>">Showroom</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/Service');?>">Service Center</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
        if (isset($_SESSION['cid']) == FALSE){
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="'.base_url('index.php/Auth/login').'" role="button">Log In</a>';
        }else{
          echo '<a class="btn btn-outline-success my-2 my-sm-0" href="'.base_url('index.php/Auth/logout').'" role="button">Log Out</a>';
        }
      ?>
    </form>
  </div>
</nav>
<!-- Navbar code ends here -->

<!-- reading flash data massagers -->
<?php
if ($this->session->flashdata('msg')){
  echo '<h4>'.$this->session->flashdata('msg').'</h4>';
}
?>
