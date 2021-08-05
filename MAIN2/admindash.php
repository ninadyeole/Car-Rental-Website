<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="assets/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Rent-A-Ride ADMIN</h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    
    
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <a href="admincars.php"><i class="fas fa-desktop"></i><span>Car Listing</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Users</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Employees</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Rent</span></a>
      
    </div>
    <!--sidebar end-->

    <div class="content">
      
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
                           