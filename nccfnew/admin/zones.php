<?php
include '../process.php';
    if(isset($_GET['delete_id'])){

        $stmt_select = $connect->prepare('SELECT * FROM zones WHERE id=:uid');
        $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
        $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
        $upload_dir = '../_css/_images/zone/';
        unlink($upload_dir.$imgRow['imgCOR']);
        unlink($upload_dir.$imgRow['imgSEC']);
        $stmt_delete = $connect->prepare('DELETE FROM zones WHERE id = :uid');
        $stmt_delete->bindParam(':uid', $_GET['delete_id']);
        if($stmt_delete->execute()){
            ?>
            <script>
                alert('Are you SURE you want to Delete this');
                window.location.href=('zones.php');
            </script>
            <?php
        }else{
             ?>
            <script>
                alert('Cant Delete Item');
                window.location.href=('zones.php');
            </script>
            <?php
        }
    }


?>
<?php
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
		<li class="link-item"><a class="active" href="zones.php" class="waves-effect waves-light">Zones</a></li>
		<li class="link-item"><a href="members.php" class="waves-effect waves-light">Registered Members</a></li>
		<footer>
			<p>Hello, <b><?php echo $userprofile; ?></b></p>
			<a href="logout.php">Logout</a>
		</footer>
	</ul>
	<main>
		<header id="main-header">
			<h3>Admin Dashboard - Zones</h3>
		</header>
		<section id="admin-panel">
		    <section id="zones">
		    	<?php
					
					$stmt = $connect->prepare('select * from zones order by id ASC');
					$stmt -> execute();
					if($stmt->rowCount()>0){
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					extract($row);
					?>
				<div class="zone">
					<h5 class="zone-name"><?php echo $name ?></h5>
					<div class="action">
						<a href="update_zone.php?edit_id=<?php echo $row['id']?>" class="btn btn-small waves-effect waves-light update-zone">Update</a>
						<a href="?delete_id=<?php echo $row['id']?>" class="btn btn-small waves-effect waves-light delete-zone" onclick="return confirm('Sure to delete this record?')">Delete</a>
						</div>
				</div>
				  <?php

						}
					}
		

				?> 
		    </section>
			<div class="zone">
				<h5 class="zone-name">Add New Zone</h5>
				<div class="action">
					<a class="btn btn-small waves-effect waves-light add-zone" href="add_zone.php">Add</a>
				</div>
			</div>
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