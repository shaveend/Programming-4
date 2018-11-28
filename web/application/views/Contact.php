<?php include('Elements/header.php')?>

    <blockquote class="blockquote text-center m-3">
    <h1>Contact Us!</h1>
</blockquote>


    <!-- Page Content -->
    <div class="container m-3 mx-auto" >

<?php echo form_open('Auth/userRegister');?>

  <div class="form-row">
    <div class="col">
    <label for="firstnameinput">Name</label>
      <input type="text" class="form-control" placeholder="Name" name = "name">
    </div>
    <div class="col">
         <label for="lastname input">Phone Number</label>
      <input type="text" class="form-control" placeholder="Phone Number" name = "tp">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "email" ondragover="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter a title for your inquiry" name = "Title">
  </div>
     <div class="form-group">
    <label for="Descrition">Descrition</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
<!--
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
-->
 <div class="mx-auto" style="width: 200px;">
  <button type="submit" class="btn btn-primary btn-lg btn-block m-3">Submit</button>
</div>
<?php echo form_close();?>
    </div>
<?php include('Elements/footer.php')?>
