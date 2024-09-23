<html>

  <head>
    <title> Customer Login </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/tenant_registered_success.css">
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
            <li><a href="#"> Sign Up </a></li>
            <li><a href="#"> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$email = $conn->real_escape_string($_POST['email']);
$username = $conn->real_escape_string($_POST['username']);
$phone_number = $conn->real_escape_string(ISSET($_POST['phone_number']));
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into CUSTOMER(email,username,phone_number,password) VALUES('" . $email . "','" . $username . "','" . $phone_number . "','" . $password . "')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $username!" ?> </h2>
		<h1>Selamat Berbelanja</h1>
		<p>Login <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>
</html>