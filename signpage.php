<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
<?php include 'head.php';
?>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="./index.html">Sochelp</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="./index.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Sign Up<span class="sr-only">(current)</span></a>
      </li>
    </ul>
   </div>
</nav>


<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
	<div class="jumbotron" style="background-color: #44a08d;">
			<form action="success.php" method="post" onsubmit=" return validate()">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01" style="color: white;">First name</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="First name" name="firstname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02" style="color: white;">Last name</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Last name" name="lastname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername" style="color: white;">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="email" class="form-control " id="email" placeholder="Email" name="Email" aria-describedby="inputGroupPrepend3" required>
        <p id="test"></p>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer03" style="color: white;">Building</label>
      <input type="text" class="form-control " id="validationServer03" name="Building" placeholder="Building" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer04" style="color: white;">Flat No</label>
      <input type="text" class="form-control " id="validationServer04" name="Flat" placeholder="Flat No" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer05" style="color: white;">Password</label>
      <input type="Password" class="form-control " id="pass" name="Password" placeholder="Password" required>
    </div>
  </div>
  <button class="btn btn-primary btn-outline-dark" type="submit" style="width: 100%;">SignUp</button>
</form>
	</div>
</div>

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
 else if (!fil.test(pass.value)) {
   alert("Password must contain one upper case, one lower case, one special character and must be of minimum 8 letters")
   return false;
 }
 else
 {
  return true;
 }
 
}
</script>
</body>
</html>