<?php 
include '../process.php';
session_start();

$userprofile = $_SESSION["user_name"]; 
$tm = time();
if($userprofile == TRUE){

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Dashboard | NCCF Cross River</title>
	<!--Favicon Setup-->
	<link rel="shortcut icon" href="_css/favicon.ico" type="image/x-icon">
	<link rel="icon" href="_css/favicon.ico" type="image/x-icon">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="_css/materialize.min.css"  media="screen,projection"/>
	<!-- Fonts declaration -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins:500,600" rel="stylesheet">
    <!-- Admin Dashboard Styles -->
	<link rel="stylesheet" type="text/css" href="_css/main.css">
</head>
<body>
	<ul id="main-nav" class="sidenav sidenav-fixed">
		<li class="logo">
			<a target="_blank" href="../index.php" id="logo-container">
				<img src="_css/logo.jpg" alt="nccf logo">
			</a>
		</li>
		<li class="link-item"><a href="index.php" class="waves-effect waves-light">Homepage</a></li>
		<li class="link-item"><a href="gallery.php" class="waves-effect waves-light">Gallery</a></li>
		<li class="link-item"><a href="zones.php" class="waves-effect waves-light">Zones</a></li>
		<li class="link-item"><a class="active" href="members.php" class="waves-effect waves-light">Registered Members</a></li>
		<footer>
			<p>Hello, <b><?php echo $userprofile; ?></b></p>
			<a href="logout.php">Logout</a>
		</footer>
	</ul>
	<main>
		<header id="main-header">
			<h3>Admin Dashboard - Registered Members</h3>
		</header>
		<section id="admin-panel">
	    	<section id="registered-users-wrapper" class="update-section table">
	    		<table class="highlight">
					<thead>
						<tr>
							<th>Fullname</th>
							<th>State Code</th>
							<th>D.O.B</th>
							<th>Phone Number</th>
							<th>Email Address</th>
							<th>Action</th>
						</tr>
				</thead>
	    		<?php
					include '../process.php';
					$stmt = $connect->prepare('select * from register order by id desc');
					$stmt -> execute();
					if($stmt->rowCount()>0){
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					extract($row);
					?>
					

			        <tbody>
						<tr>
							<td><?php echo $name ?></td>
							<td><?php echo $stateCode ?></td>
							<td><?php echo $dob ?></td>
							<td><?php echo $phone ?></td>
							<td><?php echo $email ?></td>
							<td><a href="member_details.php?edit_id=<?php echo $row['id']?>">View Details</a></td>
						</tr>
        			</tbody>
        			<?php

						}
					}
		

				?> 
        		</table>
        		
	    		
			</section>
		</section>
	</main>
	<!-- jQuery -->
	<script src="_js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="_js/materialize.min.js"></script>
</body>
</html>
<?php 
}if(time() - $_SESSION["user_admin"] > 1800){
	session_unset();
	header("location:login.php");

}

 ?>