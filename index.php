<?php
session_start();
?>

<html>

  <head>
 
    <title>Title</title>

    <title> UniEat </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
 <div class="nav">
<img src="Images/Food.jpg" width="4800" height="4000" style="position:fixed">
</div>

  <body >
  

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">UniEat</a>
        </div>

       
         
      

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myshop.php">Manage Items</a></li>
            <li><a href="logout_t.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span ></span> Food List</a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> 
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User SignUp</a></li>
              <li> <a href="tenantsignup.php"> Tenant SignUp</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="tenantlogin.php"> Tenant Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>
      </div>
    </nav>
        <div class="tagline">Selamat Datang di UniEat</div>
    </div>
    <br>
        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>


</html>