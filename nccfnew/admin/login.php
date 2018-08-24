<?php
session_start();
include('../process.php');

try {
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(isset($_POST["submit"])){
		$user = $_POST["username"];
		$pwd =  $_POST["password"];
		if(empty($_POST["username"]) || empty($_POST["password"])){
			$message = 'Please enter a correct username/password';
		}else{
		$query = "SELECT * FROM adminlogin WHERE username = :username AND password = :password"; 
		$statement = $connect->prepare($query);
		$statement->execute(
				array(
					':username' => $user,
					':password' => $pwd

				));

		$count = $statement->rowCount();
		if($count == 1){
			$_SESSION["user_name"] = $user;
			$_SESSION["user_admin"] = time();
			header("location:index.php");
		}else{
				$message = 'Please enter a correct username/password';
			}

		}

	}


}
 catch(PDOException $error){
	echo $error->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Admin Login | NCCF Cross River</title>
	<!--Favicon Setup-->
	<link rel="shortcut icon" href="_css/favicon.ico" type="image/x-icon">
	<link rel="icon" href="_css/favicon.ico" type="image/x-icon">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="_css/materialize.min.css"  media="screen,projection"/>
	<!-- Fonts declaration -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins:700,800,900" rel="stylesheet">
    <!-- Admin Dashboard Styles -->
	<link rel="stylesheet" type="text/css" href="_css/main.css">
</head>
<body>
	<main id="login-wrapper" class="container">
		<center>
			<img src="_css/logo.jpg" alt="nccf crs logo" width="350">

			<section class="form-wrapper">
				<h3>Admin Login</h3>
				<?php 
  				if(isset($message)){
  				echo '<h6 class="red-text text-lighten-1">'.$message.'</h6>';
  				}
				?>
				
				<form class="formValidate" id="formValidate" method="post" action="">
				<div class="row">
					<div class="input-field col s12">
						<input id="username" name="username" type="text">
						<label for="username">Username</label>
						<span class="helper-text" data-error="Please enter a valid username"></span>
					</div>
					<div class="input-field col s12">
						<input id="password" name="password" type="password">
						<label for="password">Password</label>
						<span class="helper-text" data-error="Please enter a valid password"></span>
					</div>
					<button class="col s8 btn btn-large waves-effect waves-light" type="submit" name="submit">Login</button>

				</div>
				</form>
			</section>
		</center>
	</main>
	<!-- jQuery -->
	<script src="_js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="_js/materialize.min.js"></script>
</body>
</html>