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
      include 'D:\Xampp\htdocs\Web\navs\userhelpersnav.php'
  ?>


<div class="container" style="margin: 0 auto;margin-top: 8em;max-width: 60%">
  <div class="jumbotron" style="background-color: #44a08d;">
    <?php
        extract($_POST);
            $name=$Name;
            $building=$_SESSION['build'];
            $flat=$_SESSION['flat'];
            $uid=$_SESSION['id'];
            $rating=$Rating;
            $eid=$id;
            include 'config.php';

             $sql="SELECT Name FROM electhired WHERE eid=$id";
            $result =$conn->query($sql);


            if ($result->num_rows >0) {


                  echo'


                  <p>Already Hired!</p><br>
                <a href="./helpers.php"><button class="btn btn-primary btn-outline-dark" style="width:100%;">Go Back</button></a>

                ';
              
            }
            else {


            $sql1 = "INSERT INTO electhired (uid,eid,Name,Rating,Building,Flat_no) VALUES ($uid,$eid,'$name',$rating,'$building',$flat)";
            if($conn->query($sql1)===TRUE)
               {
                    echo'


                  <p>Hired!</p><br>
                <a href="./helpers.php"><button class="btn btn-primary btn-outline-dark" style="width:100%;">Go Back</button></a>

                ';
               }
               else
               {
                  echo'
                      <p>Something Went Wrong!</p>
                  ';  
               

                  
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