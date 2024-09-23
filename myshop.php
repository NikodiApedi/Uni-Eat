<?php
include('session_t.php');

if(!isset($login_session)){
header('Location: tenantlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Tenant </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/myshop.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">UniEat</a>
        </div>
       

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="tenantlogin.php">Manage Items</a></li>
            <li><a href="logout_t.php">Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Tenant! </h1>
    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myshop.php" class="list-group-item active">My Shop</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
    


    
      
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="myshop1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Shop (Hanya 1 Shop)</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Toko" required="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder=" Email" required="">
          </div>     

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Tambah Toko </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>

</html>