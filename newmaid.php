<!DOCTYPE html>
<html>
<head>
  <title>edit</title>
<?php include 'head.php';
  session_start();
?>
</head>
<body>
  <?php
 include 'D:\Xampp\htdocs\Web\navs\adminhelpersnav.php';
 ?>


<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
    <?php
            echo'<form action="newmaidsuccess.php" method="post">
  <div class="form-row">
    <div class="col-md-6 mb-5">
      <label for="validationServer01" style="color: white;">Name</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="Name" name="Name" required>
    </div>
    <div class="col-md-6 mb-5">
      <label for="validationServer02" style="color: white;">Sex</label>
      <input type="text" class="form-control " id="validationServer02" placeholder="Sex" name="Sex" required>
    </div>
  </div>
  <button class="btn btn-primary btn-outline-dark" type="submit"  style="width: 100%;">Add</button>
</form>';

    ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>