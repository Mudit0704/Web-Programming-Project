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
include 'config.php';
include 'D:\Xampp\htdocs\Web\navs\admincomplainnav.php';
echo'
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
  <div class="row">
  <h3>Existing Plumber Complaints:</h3>';
    $sql = "SELECT Name,Complaint FROM plumbhired WHERE Complaint!='NULL'";
                 $result = $conn->query($sql);
if($result->num_rows>0)
{
  while($row = $result->fetch_assoc()) {

echo'
<div class="col-lg-12">
<strong><p>'.$row['Name'].':</p></strong>
<textarea style="width:100%;" maxlength="250" name="Complaint" readonly>'.$row['Complaint'].'</textarea>
';
echo'
</div>
';
}
}
else
{
echo'<div class="col-lg-12">
<strong style="text-align:center;"><p>NO COMPLAINT</p></strong>
</div>
';
}

echo'
</div>
  </div>
</div>
';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>