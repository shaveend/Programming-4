<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>AJITH MOTORS</title>

	<!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor_components/c3/c3.min.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.css">

	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/master_style.css">


	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/design.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>





  </head>

<body onload="renderTime();" class="hold-transition skin-info dark-sidebar light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index-2.html" class="logo">


      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="<?php echo base_url();?>assets/images/yamaha.jpg" alt="logo" style="width:75px ;height:75px"></span>

	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		  </a>
		  <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view" href="javascript:void(0);"><i class="mdi mdi-magnify"></i></a>
		  <form id="search_form" role="search" class="top-nav-search pull-left collapse ml-20">
			<div class="input-group">
				<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
				<span class="input-group-btn">
				<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="mdi mdi-magnify"></i></button>
				</span>
			</div>
		  </form>
	  </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="<?php echo base_url();?>assets/images/yamaha2.jpg"  alt="User Image" style="width:250px; height:100px">
        </div>
        <div class="info">

            <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
        </div>
      </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<div class="sideup">
        	<li class="header nav-small-cap">AJITH MOTORS</li>
		</div>
		<li class="treeview active">

         </li>
          </ul>
        </li>
        <div class="side">
		  <br>
      <li ><a href="<?php echo base_url('index.php/home/index');?>"><i class="header nav-small-cap"></i>MAIN(WEB)</a></li> <br>

	    <li><a href="<?php echo base_url('index.php/home/serv');?>"><i class="header nav-small-cap"></i>SERVICE CENTER</a></li> <br>

	    <li class="active"><a href="<?php echo base_url('index.php/home/show');?>"><i class="header nav-small-cap"></i>SHOWROOM</a></li> <br>

	     <li><a href="<?php echo base_url('index.php/home/con');?>"><i class="header nav-small-cap"></i>CONTACT</a></li> <br>

			<li><a href="<?php echo base_url('index.php/home/admin');?>"><i class="header nav-small-cap"></i>MAKE AN ADMIN</a></li> <br>
		</div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Dashboard</h3>
</div>
        <div id="clock" class="date">  </div>
      </div>
      </div>

<br>
<br>
        <form class="" action="index.html" method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputname">Name</label>
              <input type="email" class="form-control" name="nme" id="inputname" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputtype">Type</label>
              <input type="text" class="form-control" name="typ" id="inputtype" placeholder="Type">
            </div>
          </div>
          <div class="form-group">
            <label for="inputBrand">Brand</label>
            <input type="text" class="form-control" name="brnd" id="inputBrand" >
          </div>
          <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control" name="price" id="inputPrice" >
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputContry">Country</label>
            <select id="inputCountry" name="country" class="form-control">
              <option selected>India</option>
              <option>Japan</option>
              <option>Thaiwan</option>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTyre">Tyre-Size</label>
            <input type="text" class="form-control" name="tyre" id="inputTyre" >


            </div>
            <div class="form-group col-md-2">
              <label for="addimage">Add image</label>
              <input type="file" class="form-control-file" name="img" id="addimage">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        </div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- popper -->
<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- date-range-picker -->
<script src="<?php echo base_url();?>assets/vendor_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>




<script src="<?php echo base_url();?>assets/js/template.js"></script>


<script src="<?php echo base_url();?>assets/js/pages/dashboard.js"></script>

<script src="<?php echo base_url();?>assets/js/demo.js"></script>
</body>

</html>
