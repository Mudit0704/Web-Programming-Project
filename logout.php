<?php
session_start();
if(isset($_SESSION['fname']))
unset($_SESSION['fname']); 
if(isset($_SESSION['pass']))
unset($_SESSION['pass']); 
if(isset($_SESSION['lname']))
unset($_SESSION['lname']); 
if(isset($_SESSION['email']))
unset($_SESSION['email']); 
if(isset($_SESSION['build']))
unset($_SESSION['build']); 
if(isset($_SESSION['flat']))
unset($_SESSION['flat']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<?php
					include 'head.php';

				?>
</head>
<body>


<div class="container">
	<div class="jumbotron" style="margin: 8em auto 8em auto;text-align: center;">
		<p>Sign In again?</p><br>
		<a class="btn btn-outline-dark" href="index.php">SIGN IN</a>
	</div>
	
</div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>