<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>edit</title>
<?php include 'head.php';
?>
</head>
<body>
  <?php
      include 'D:\Xampp\htdocs\Web\navs\userprofilenav.php'
  ?>
<?php
echo'
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
      <form action="update.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01" style="color: white;">First name</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="First name" name="firstname" value="'.$_SESSION['fname'].'" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02" style="color: white;">Last name</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Last name" name="lastname" value="'.$_SESSION['lname'].'" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername" style="color: white;">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="email" class="form-control " id="email" placeholder="Email" name="Email" value="'.$_SESSION['email'].'" aria-describedby="inputGroupPrepend3" required>
        <p id="test"></p>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer03" style="color: white;">Building</label>
      <input type="text" class="form-control " id="validationServer03" name="Building" value="'.$_SESSION['build'].'" placeholder="Building" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer04" style="color: white;">Flat No</label>
      <input type="text" class="form-control " id="validationServer04" name="Flat" placeholder="Flat No" value="'.$_SESSION['flat'].'" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer05" style="color: white;">Password</label>
      <input type="Password" class="form-control " id="pass" name="Password" placeholder="Password" value="'.$_SESSION['pass'].'" required>
    </div>
  </div>
  <button class="btn btn-primary btn-outline-dark" type="submit" onclick="validate()" style="width: 100%;">Edit</button>
</form>
  </div>
</div>
'
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
function validate() {

    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var pass =  document.getElementById('pass');
    var fil = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 if (!fil.test(pass.value)) {
   alert("Password must contain one upper case, one lower case, one special character and must be of minimum 8 letters")
   return false;
 }
}
</script>
</body>
</html>