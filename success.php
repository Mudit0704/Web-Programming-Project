<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
<?php include 'head.php';
  session_start();
?>
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Sochelp</a>

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
    <?php
        extract($_POST);
            $fname=$firstname;
            $lname=$lastname;
            $email=$Email;
            $building=$Building;
            $flat=$Flat;
            $pass=$Password;
            include 'config.php';
            $sql1 = "SELECT * FROM users WHERE Email='$email'";
            $result = $conn->query($sql1);
            if($result->num_rows > 0)
            {
              echo 'User with this email already exists
                    <a href="./signpage.php"><button class="btn btn-outline-dark" style="width: 100%;" >Go Back</button></a>

              ';
            }
            else
            {
                  $sql = "INSERT INTO users(First_name,Last_name,Email,Building,Flat_no,Password) VALUES ('$fname','$lname','$email','$building',$flat,'$pass')";

                  if ($conn->query($sql) === TRUE) {
                      echo'


                        <p>Registered Successfully!</p><br>
                      <a href="./index.php"><button class="btn btn-outline-dark" style="width: 100%;" >Login</button></a>

                      ';
                  }
                  else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }  
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