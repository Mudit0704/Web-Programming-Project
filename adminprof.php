 <?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
   <?php include 'head.php'; ?>
</head>
<body>

<br>
<?php
            include 'config.php';
            if(!isset($_SESSION['email']))
            {

                  extract($_POST);
                  $sql = "SELECT * FROM admin WHERE Email='$email' AND Password='$pass'";
                  $result = mysqli_query($conn,$sql); 
                  $row = mysqli_fetch_array($result);
                  
              if ($row) {

                      $name=$_SESSION['fname']=$row['First_name'];
                      $lname=$_SESSION['lname']=$row['Last_name'];
                      $email=$_SESSION['email']=$row['Email'];
                      $_SESSION['pass']=$row['Password'];
                      $_SESSION['id']=$row['id'];

                      include 'D:\Xampp\htdocs\Web\navs\adminloginnav.php';
                  echo '
                      <div class="container" style="margin: 3em auto 3em auto;">
                          <div class="row">
                        <div class="col-lg-4">
                          
                      <div class="card">
                        <img class="card-img-top" src="./images.png" alt="Card image cap">
                        <div class="card-body">';
                          echo'<h5 class="card-title">Welcome '.$name.'</h5>';
                         echo' <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card`s content.</p>
                          <a href="./adminedit.php" class="btn btn-primary">Edit Details</a>
                        </div>
                      </div>  
                        </div>
                        <div class="col-lg-8">
                            
                      <div class="card">
                        <div class="card-body">';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">First Name: '.$name.'</p><br>';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">Last Name: '.$lname.'</p><br>';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">Email: '.$email.'</p><br>';'
                        </div>
                      </div>
                        </div>
                        
                      </div>
                      </div>';
            }
            else {
                echo '
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Sochelp</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="./admin.php">Login<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                 </div>
                </nav>
                <div class="container" style="margin: 15em auto 15em auto;">
                          <div class="jumbotron" style="background-color:transparent;border: 2px solid black;">
                              <p style="color:white;">ERROR USER NOT FOUND!</p><br>
                <a class="btn btn-primary btn-outline-dark" href="./admin.php" style="width: 100%;background: transparent;">Login</a>

                          </div>
                      </div>';
            }
            }
            else

            {
                    include 'D:\Xampp\htdocs\Web\navs\adminloginnav.php';
                  echo '
                      <div class="container" style="margin: 3em auto 3em auto;">
                          <div class="row">
                        <div class="col-lg-4">
                          
                      <div class="card">
                        <img class="card-img-top" src="./images.png" alt="Card image cap">
                        <div class="card-body">';
                          echo'<h5 class="card-title">Welcome '.$_SESSION['fname'].'</h5>';
                         echo' <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card`s content.</p>
                          <a href="./adminedit.php" class="btn btn-primary">Edit Details</a>
                        </div>
                      </div>  
                        </div>
                        <div class="col-lg-8">
                            
                      <div class="card">
                        <div class="card-body">';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">First Name: '.$_SESSION['fname'].'</p><br>';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">Last Name: '.$_SESSION['lname'].'</p><br>';
                            echo '<p style="background-color:#f4f6f9;border-radius:20px;padding-left:10px;">Email: '.$_SESSION['email'].'</p><br>';'
                        </div>
                      </div>
                        </div>
                        
                      </div>
                      </div>';
            }
            

            $conn->close();



?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>