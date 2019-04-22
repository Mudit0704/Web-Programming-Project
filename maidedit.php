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
 include 'D:\Xampp\htdocs\Web\navs\adminhelpersnav.php';
 ?>
<?php

extract($_POST);
echo'
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
      <form action="maidsuccess.php" method="post">
  <div class="form-row">
    <div class="col-md-3 mb-2">
      <label for="validationServer01" style="color: white;">Name</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="Name" name="Name" value="'.$Name.'" required>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationServer02" style="color: white;">Sex</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Sex" name="Sex" value="'.$Sex.'" required>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationServer02" style="color: white;">Rating</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Rating" name="Rating" value="'.$Rating.'" required>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationServer01" style="color: white;">ID</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="ID" name="ID" value="'.$id.'" readonly>
    </div>
  </div>
  <button class="btn btn-primary btn-outline-dark" type="submit" onclick="validate()" style="width: 100%;">EDIT</button>
</form>';
$_SESSION['wid']=$id;
echo'
<a href="./adminmdelete.php"><button class=" btn btn-outline-dark" style="width: 100%;">DELETE</button></a>
  </div>
</div>
';
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