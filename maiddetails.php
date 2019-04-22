<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
   <?php include 'head.php'; 
   session_start();?>
   <style type="text/css">
     #maid{
      cursor: default;
     }
   </style>
</head>
<body>

<br>
<?php
            include 'config.php';
                  extract($_POST);
                  $sql = "SELECT * FROM maidhired WHERE mid=$id";
                  $result = mysqli_query($conn,$sql); 
                  $row = mysqli_fetch_array($result);
                  
              if ($row) {
  include 'D:\Xampp\htdocs\Web\navs\userhiredhelpersnav.php';
                  echo '
                      <div class="container" style="margin: 3em auto 3em auto;">
                          <div class="row">
                        <div class="col-lg-4">
                          
                      <div class="card">
                        <img class="card-img-top" src="./images.png" alt="Card image cap">
                        <div class="card-body">';
                          echo'<h5 class="card-title">'.$row['Name'].'</h5>';
                         echo' <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card`s content.</p>
                         <a href="./mcomplain.php"><button class="btn btn-outline-dark" style="width:100%;">COMLPLAIN</button></a>
                        </div>
                      </div>  
                        </div>
                        <div class="col-lg-8">
                            <form action="firemaid.php" method="post">
                      <div class="card">
                        <div class="card-body">';
                        $_SESSION['wid']=$row['mid'];
                      $_SESSION['oldrating']=$row['Rating'];
                            echo '
                                  <strong>Maid ID:</strong><input type="text" class="form-control" id="maid" name="id" value="'.$row['mid'].'" readonly>
                                  <strong>Maid Name:</strong><input type="text" class="form-control" id="maid" name="Name" value="'.$row['Name'].'" readonly>
                                  <strong>Maid Sex:</strong><input type="text" class="form-control" id="maid" name="Sex" value="'.$row['Sex'].'" readonly>
                                  
                      <strong>Maid Rating:</strong><input type="text" class="form-control" id="maid" name="Rating" value="'.$row['Rating'].'" readonly>
                                  <strong>Building in which maid is working:</strong><input type="text" class="form-control" id="maid" name="Building" value="'.$row['Building'].'" readonly>
                                  <strong>Flat in which maid is working:</strong><input type="text" class="form-control" id="maid" name="Flat" value="'.$row['Flat_no'].'" readonly>
                                 
                        </div>
                      </div>
                      <button type="submit" class="btn btn-outline-dark" style="width:100%;">
                      FIRE 
                      </button>
                      </form>
                      <a href="./mrate.php"><button class="btn btn-outline-dark" style="width:100%;">RATE</button></a>
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