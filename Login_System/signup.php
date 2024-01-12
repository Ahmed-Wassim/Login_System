<?php include('header.php'); ?>

<?php 
  if(isset($_GET['error'])){
    if($_GET['error'] == "Empty Input"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        Please, Fill All Fields
      </div>
    <?php }
    elseif($_GET['error'] == "Invalid Uid"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        Choose a proper username
      </div>
    <?php }
    elseif($_GET['error'] == "Invalid Email"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        Choose a proper email
      </div>
    <?php }
    elseif($_GET['error'] == "This is not the same password"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        This is not the same password
      </div>
    <?php }
    elseif($_GET['error'] == "Username Taken"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        Username already taken!
      </div>
    <?php }
    elseif($_GET['error'] == "Failed"){
      ?>
      <div class="alert alert-warning text-center" role="alert">
        something went wrong , try again
      </div>
    <?php }
    elseif($_GET['error'] == "none"){
      ?>
      <div class="alert alert-success text-center" role="alert">
        you have signed up 
      </div>
    <?php }
  }
?>

<div class="container w-50">
        <form action="includes/signup.inc.php" method="POST">
          <div class="form-group">
              <label for="name">First Name</label>
              <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
                  <label for="uid">Username</label>
                  <input type="text" name="uid" class="form-control">
          </div>
          <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
                  <label for="uid">Repeat Password</label>
                  <input type="password" name="repeat_password" class="form-control">
          </div>
            <button class="btn btn-primary" type="submit" name="submit">Send</button>
          </form>
</div>

<?php include('footer.php'); ?>