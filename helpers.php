<!DOCTYPE html>
<html>
<head>
	<title>Helpers</title>
	 <?php include 'head.php';
      session_start();

    ?>

</head>

<style type="text/css">
  

#maid{

  cursor: default;
  background: transparent;
  border: none;
  color: black;
}
</style>
<body>
<?php
  include 'D:\Xampp\htdocs\Web\navs\userhelpersnav.php'
?>
<br>
<?php 
  include 'config.php';

echo '
<div class="container" style="margin: 3em auto 3em auto;">
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="btn btn-outline-dark active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Maids</a>
      <a class="btn btn-outline-dark" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-electricians" role="tab" aria-controls="v-pills-electricians" aria-selected="false">Electricians</a>
      <a class="btn btn-outline-dark" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-plumbers" role="tab" aria-controls="v-pills-plumbers" aria-selected="false">Plumbers</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">';
echo'
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  <div class="container">
<div class="row">';
$sql = "SELECT * FROM maids";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-lg-3">
      <form action="maidupdate.php" method="post">
  <div class="card">
    <img class="card-img-top" src="./images.png" alt="Card image cap" >
    <div class="card-body">';
      echo'
      <strong>Maid ID:</strong><input type="text" class="form-control" id="maid" name="id" value="'.$row['id'].'" readonly>
      <strong>Maid Name:</strong><input type="text" class="form-control card-title" id="maid" name="Name" value="'.$row['Name'].'" readonly>
      <strong>Maid Sex:</strong><input type="text" class="form-control" id="maid" name="Sex" value="'.$row['Sex'].'" readonly>
      <strong>Maid Rating:</strong><input type="text" class="form-control card-text" id="maid" name="Rating" value="'.$row['Rating'].'" readonly>
<button type="submit" class="btn btn-primary" style="width:100%;">
  HIRE
</button>
    </div>
  </div>
  </form>
  </div>
';
    }
}
  
echo'
</div>
</div>
</div>';
echo'
<div class="tab-pane fade" id="v-pills-electricians" role="tabpanel" aria-labelledby="v-pills-electricians-tab">
  <div class="container">
<div class="row">';
$sql = "SELECT * FROM electrician";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-lg-3">
      <form action="electupdate.php" method="post">
  <div class="card">
    <img class="card-img-top" src="./images.png" alt="Card image cap" >
    <div class="card-body">';
      echo'
            <strong>Electrician ID:</strong><input type="text" class="form-control" id="maid" name="id" value="'.$row['id'].'" readonly>

      <strong>Electrician Name:</strong><input type="text" class="form-control card-title" id="maid" name="Name" value="'.$row['Name'].'" readonly>
      <strong>Electrician Rating:</strong><input type="text" class="form-control card-text" id="maid" name="Rating" value="'.$row['Rating'].'" readonly>
<button type="submit" class="btn btn-primary" style="width:100%;">
  HIRE
</button>
    </div>
  </div>
  </form>
  </div>
';
    }
}
  
echo'
</div>
</div>
</div>';
echo'
<div class="tab-pane fade" id="v-pills-plumbers" role="tabpanel" aria-labelledby="v-pills-plumbers-tab">
<div class="container">
<div class="row">';
$sql = "SELECT * FROM plumber";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-lg-3">
  <form action="plumbupdate.php" method="post">
  <div class="card">
    <img class="card-img-top" src="./images.png" alt="Card image cap" >
    <div class="card-body">';
      echo'
            <strong>Plumber ID:</strong><input type="text" class="form-control" id="maid" name="id" value="'.$row['id'].'" readonly>

      <strong>Plumber Name:</strong><input type="text" class="form-control card-title" id="maid" name="Name" value="'.$row['Name'].'" readonly>
      <strong>Plumber Rating:</strong><input type="text" class="form-control card-text" id="maid" name="Rating" value="'.$row['Rating'].'" readonly>
<button type="submit" class="btn btn-primary" style="width:100%;">
  HIRE
</button>
    </div>
  </div>
  </form>
  </div>
';
    }
}
  
echo'
</div>
</div>
</div>';
echo '</div>
  </div>
    </div>
</div>';
$conn->close();
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>