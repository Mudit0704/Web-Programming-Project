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
include 'config.php';
echo'
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
  <h3>Existing Complaints:</h3>';
    $ID=$_SESSION['wid'];
    $sql = "SELECT Name,Complaint FROM maidhired WHERE mid=$ID";
                  $result = mysqli_query($conn,$sql); 
                  $row = mysqli_fetch_array($result);
if($row['Complaint'])
{
echo'
<strong><p>'.$row['Name'].':</p></strong>
<textarea style="width:100%;" maxlength="250" name="Complaint" readonly>'.$row['Complaint'].'</textarea>

<strong><p>ADD NEW COMPLAINT:</p></strong>
<form action="mcompadded.php" method="post" id="compform">
</form>
<textarea form="compform" style="width:100%;border:none;" maxlength="250" placeholder="Max Length 250 Characters" name="Complaint"></textarea>
<button class="btn btn-primary btn-outline-dark" type="submit" form="compform" style="width: 100%;">SUBMIT</button>

';
echo'
  </div>
</div>
';}
else
{
    echo'
<strong><p>ADD NEW COMPLAINT:</p></strong>
<form action="mcompadded.php" method="post" id="compform">
</form>
<textarea form="compform" style="width:100%;border:none;" maxlength="250" placeholder="Max Length 250 Characters" name="Complaint"></textarea>
<button class="btn btn-primary btn-outline-dark" type="submit" form="compform" style="width: 100%;">SUBMIT</button>

';
echo'
  </div>
</div>
';
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>