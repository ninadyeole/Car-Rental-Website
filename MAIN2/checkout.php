<?php 

$mysqli = new mysqli('localhost', 'root', '', 'rentalcar') or die(mysqli_error($mysqli));
$fname = "";
$lname = "";
$handle = "";
$email = "";
$pickloc = "";
$droploc = "";
$from = "";
$to = "";


if (isset($_POST['save']))
{
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $handle = $_POST['handle'];
      $email = $_POST['email'];
      $pickloc = $_POST['loc1'];
      $droploc = $_POST['loc2'];
      $from = $_POST['date1'];
      $to = $_POST['date2'];
      
 
    $mysqli->query ("INSERT INTO rent_table (fname, lname, handle, email, pickup, dropoff, from_date, to_date) 
    VALUES('$fname', '$lname', '$handle', '$email', '$pickloc', '$droploc', '$from', '$to')") or
    die(mysqli_error($mysqli));


}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 500px; padding: 30px; }

    </style>
    <title>Booking</title>
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">Rent-A-Ride</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>

  <div class="wrapper">
  <form class="form-control justify-content-center" action="checkout.php" method="post" >
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $fname ?>" >
   </div>
   <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $lname ?>">
   </div>
   <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="handle" value="<?php echo $handle ?>">  
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
   </div>
  <div class="form-group">
    <label>Pickup Location</label>
    <input type="text" class="form-control" name="loc1" value="<?php echo $pickloc ?>" >
  </div>
  <div class="form-group">
    <label>Dropoff Location</label>
    <input type="text" class="form-control" name="loc2" value="<?php echo $droploc ?>" >
   </div>
   <div class="form-group">
   <label>Pick up Date:</label>
  <input type="date" class="form-control" name="date1"  value="<?php echo $from ?>">
</div>
<div class="form-group">
  <label>Drop off Date:</label>
  <input type="date" class="form-control" name="date2" value="<?php echo $to ?>">
</div>
<div>
  <button type="submit" class="btn btn-success" name="save">Book My ride</button>
  </div>
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>