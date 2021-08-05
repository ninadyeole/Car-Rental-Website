
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Bookport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Car Listing</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="assets/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">#1 PLACE FOR ALL YOUR AUTOMOTIVE NEEDS</h4>
          <p class="text-muted">Rent-A-Ride is a leading digital automotive marketplace designed for you to rent. Our website lets you research and compare certified and used cars to rent.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="main.php" class="navbar-brand d-flex align-items-center">
        <strong>Rent-A-Ride</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>#1 PLACE FOR ALL YOUR AUTOMOTIVE NEEDS</h1>
      <p class="lead text-muted">MAKE YOUR TOUR MEMORABLE</p>
      
  
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row" >
        
        <?php 

        $con = mysqli_connect('localhost', 'root', '', 'rentalcar');
         $abc = "SELECT car_name, image, price, discount FROM cars ORDER BY car_id ASC";
         $result = mysqli_query($con, $abc);
         $num = mysqli_num_rows($result);
         if($num > 0)
         {
         while($product = mysqli_fetch_array($result)) {
         ?>
            <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <svg width="100%" height="225" xmlns="http://www.w3.org/2000/svg">       
            <image href="<?php echo $product['image']; ?> " width="100%" height="225" alt="carimg" /></svg>
            <div class="card-body">
            <h6 class="card-text"> <?php echo $product['car_name']; ?> </h6>
            <p class="card-text">Discount: <?php echo $product['discount']; ?>% off </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="checkout.php" class="btn btn-primary">Book</a>
                  </div>
                <small class="text-muted"> &#8377; <?php echo $product['price']; ?> </small>
              </div>
            </div>
          </div>
        </div> 
              <?php
             }
         }
         ?>

    </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/jquery.slim.min.js"><\/script>')</script><script src="assets/bootstrap.bundle.min.js"></script>
</html>


