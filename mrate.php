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
  include 'D:\Xampp\htdocs\Web\navs\userhiredhelpersnav.php'
?>
<?php

extract($_POST);
echo'
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
      <form action="mrateupdate.php" method="post">
  <div class="form-row">
    <div class="col-md-12 mb-11">
      <label for="validationServer02" style="color: white;">Your Rating(out of 5)</label>
      <input type="number" class="form-control " id="validationServer02"  name="Rating" max=5  required>
    </div>
  </div>
  <button class="btn btn-primary btn-outline-dark" type="submit"  style="width: 100%;">SUBMIT RATING</button>
</form>
  </div>
</div>
'
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>