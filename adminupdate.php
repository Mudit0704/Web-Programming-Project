<!DOCTYPE html>
<html>
<head>
  <title>adminedit</title>
<?php include 'head.php';
  session_start();
?>
</head>
<body>
  <?php
      include 'D:\Xampp\htdocs\Web\navs\adminloginnav.php';
  ?>
<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
    <?php
        extract($_POST);
            $fname=$_SESSION['fname']=$firstname;
            $lname=$_SESSION['lname']=$lastname;
            $email=$_SESSION['email']=$Email;
            $pass=$_SESSION['pass']=$Password;
            $id=$_SESSION['id'];
            include 'config.php';

            $sql = "UPDATE admin SET First_name='$fname',Last_name='$lname',Email='$email',Password='$pass' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo'


                  <p>Updated Successfully!</p><br>
                <a href="./adminprof.php"><button class="btn btn-primary btn-outline-dark" style="width:100%;">Go Back To Profile</button></a>

                ';
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

    ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>