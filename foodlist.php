<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>

  <head>
    <title> Explore </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/foodlist.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <div class="nav">
    <div class="jumbotron">
  <div class="container text-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>

<img src="Food.jpg" width="7800" height="7000" style="position:fixed">
</div>

  <body>
  <div class="tagline">Selamat Datang di UniEat</div>
  <img src="Images/Food.jpg" width="4800" height="4000" style="position:fixed">
</div>
  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">UniEat</a>
        </div>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myshop.php">Manage Items</a></li>
            <li><a href="logout_t.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="foodlist.php"><span ></span> FoodList </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php">Log Out </a></li>
          </ul>
  <?php        
}
else {
  ?>
<?php
}
?>
    </nav>





<?php

require 'connection.php';
$conn = Connect();



$sql = "SELECT * FROM FOOD ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{

  while($row = mysqli_fetch_assoc($result)){

?>
<div class="col-md-2">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h5 class="text-info"><?php echo $row["name"]; ?></h5>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">Rp.<?php echo $row["price"]; ?></h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
}
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Error</h1> </label>
      </center>
       
    </div>
  </div>

  <?php

}

?>

</div>
   
</body>

</html>