<?php
   require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessUser.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="../HOME/multimedia/logo.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="container-fluid">
				<div class="row">
					<a href="../HOME/lordstride.php">LORDSTRIDE</a>
				</div>
			</div>
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<img src="../HOME/multimedia/logo.png" alt="" class="logo">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<!-- <form action="../USERS/index.php"> -->
						<!-- onclick="window.location.href='../USERS/index.php'" -->
							<button type="submit" class="login100-form-btn" name="btnsignin">
								Login
							</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../LOGIN/index.php">
							New? Create account
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['pass'];

	if(isset($_POST["btnsignin"])& isset($_POST["username"]) & isset($_POST["pass"])){
		
		$User = new User();
		
		$usuarioExist = $User->signinUser($_SESSION['username'], $_SESSION['password']);

		if($usuarioExist){
			echo "DENTRO ";
			header("Location: ../USERS/index.php");
		}
		else{
			echo "USERNAME/PASSWORD MAL INTRODUCIDOS ";
		}
	}
?>