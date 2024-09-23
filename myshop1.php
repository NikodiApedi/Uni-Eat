<?php

include('session_t.php');

if(!isset($login_session)){
header('Location: tenantlogin.php'); // Redirecting To Home Page
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);

$query = "INSERT INTO shop(name,email,M_ID) VALUES('" . $name . "','" . $email . "','" . $_SESSION['login_user1'] ."')";
$success = $conn->query($query);

if (!$success){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>change</title>
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		 
   
  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">UniEat</a>
        </div>
       

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Sign Up </a></li>
            <li><a href="#"> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Your already have one Shop.</h1>
		<p>Kembali ke <a href="view_food_items.php">Shop</a></p>
	</div>
</div>
	
	</body>
	</html>

	<?php
}

else {
	header('Location: myshop.php');
}

$conn->close();


?>