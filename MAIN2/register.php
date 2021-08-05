
<?php include('server.php')?>
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
        .wrapper{ width: 400px; padding: 30px; }

        body {
  background-image: url('index.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
  }
    </style>
    <title>Register</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">Rent-A-Ride</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>
  <div class="wrapper">
  <form action="register.php" method="post">
  <?php include('errors.php') ?>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $username ?>" >
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email ?> ">  
   </div>
   <div class="form-group">
    <label>Phone Number</label>
    <input type="number" class="form-control" name="number" value="<?php echo $number?> ">
   </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="reg_user">Sign Up</button>
  <div> 
<p>Already have an account? <a href="login.php">Login here</a>.</p>
</div>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>