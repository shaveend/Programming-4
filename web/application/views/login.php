
<?php include"Elements/header.php" ?>


    <blockquote class="blockquote text-center m-3">
    <h1>Login</h1>
</blockquote>


    <!-- Page Content -->
    <div class="container m-3 mx-auto" >

<?php echo form_open('Auth/userLogin');?>

<?php echo validation_errors();?>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

<!--
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
-->

  <button type="submit" class="btn btn-primary btn-lg m-3 mx-auto">Login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
<?php echo form_close();?>
    </div>

<?php include"Elements/footer.php" ?>
