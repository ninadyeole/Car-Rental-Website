<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <title>Admin Car Edit</title>
    </head>
    <body>
<?php require_once 'process.php'?>
<div class="container">
<?php 
$mysqli = new mysqli('localhost', 'root', '', 'rentalcar') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM cars") or die($mysqli->error);

?>

<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>Car Name</th>
<th>Car Image</th>
<th>Car Price</th>
<th>Discount</th>
<th colspan="2">Action</th>
</tr>
</thead>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['car_name']; ?> </td>
<td><?php echo $row['image']; ?> </td>
<td><?php echo $row['price']; ?> </td>
<td><?php echo $row['discount']; ?> </td>
<td></td>
</tr>
<?php endwhile; ?>
</table>
</div>
<?php 
function pre_r($array) 
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<div class="row justify-content-center">
<form action="process.php" method="POST">
<div class="form-group">
<label>Car Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Name">
</div>
<div class="form-group">
<label>Car Image</label>
<input type="text" name="image" class="form-control" value="<?php echo $image; ?>" placeholder="Image Path">
</div>
<div class="form-group">
<label>Car Price</label>
<input type="text" name="price" class="form-control" value="<?php echo $price; ?>" placeholder="Price">
</div>
<div class="form-group">
<label>Discount</label>
<input type="text" name="discount" class=form-control value="<?php echo $discount; ?>" placeholder="discount">
</div>
<div class="form-group">
<button type="submit" name="save" class="btn btn-primary">Save</button>
</div>
</form>
</div>

</div>












    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
    </body>
    
</html>
