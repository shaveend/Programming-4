
<?php include"Elements/header.php" ?>


    <blockquote class="blockquote text-center m-3">
    <h1>Book service</h1>
</blockquote>


    <!-- Page Content -->
    <div class="container m-3 mx-auto" >

<?php echo form_open('ServiceReq/confirmBookService');?>
<?php echo validation_errors();?>

<div class="form-row">
    <div class="col">
    <label for="nameinput">Name</label>
      <input type="text" class="form-control" placeholder="Name" name = "name" value = "<?php echo $this->session->name;?>">
    </div>
    <div class="col">
         <label for="phoneNumber">Phone Number</label>
      <input type="text" class="form-control" placeholder="Phone Number" name = "tp" value = "<?php echo $this->session->phonenumber;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "email" value = "<?php echo $this->session->email;?>">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Service type</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name = "servicetype" >
  </div>
    <div class="form-group">
    <label for="Date">Date required</label>
    <input type="date" class="form-control" id="Date" placeholder="DD/MM/YY" name = "date" >
  </div>


<!--
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
-->

  <button type="submit" class="btn btn-primary btn-lg  m-3 mx-auto">Confirm</button>
  <?php echo form_close();?>
    </div>

<?php include"Elements/footer.php" ?>
