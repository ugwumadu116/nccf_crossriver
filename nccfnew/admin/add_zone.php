<?php
 include '../process.php';
 	 if(isset($_POST['add_zone'])){
        $Zname =  $_POST['Zname'];
        $CORname =  $_POST['CORname'];
        $SECname =  $_POST['SECname'];
        $Faddress =  $_POST['Faddress'];
        $phone =  $_POST['phone'];
        

        $images = $_FILES['CORimg']['name'];
        $tmp_dir = $_FILES['CORimg']['tmp_name'];
        $imageSize = $_FILES['CORimg']['size'];

        $images2 = $_FILES['SECimg']['name'];
        $tmp_dir2 = $_FILES['SECimg']['tmp_name'];

        $imgExt2 = strtolower(pathinfo($images2,PATHINFO_EXTENSION));
        $picProfile2 = rand(1000, 1000000).".".$imgExt2;

       

        $upload_dir = '../_css/_images/zone/';
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['CORimg']['name']);
        $ext = end($extt);
        $picProfile = rand(1000, 1000000).".".$imgExt;

        if(in_array($ext, $allowes_ext)){
                move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
                move_uploaded_file($tmp_dir2, $upload_dir.$picProfile2);
                
                $stmt=$connect->prepare('INSERT INTO  zones(name,address,phone,nameCOR,nameSEC,imgCOR,imgSEC) VALUES (:uname,:uaddress,:uphone,:unameCOR,:unameSEC,:uimgCOR,:uimgSEC)');
                $stmt->bindParam(':uname', $Zname);
                $stmt->bindParam(':uaddress', $Faddress);
                $stmt->bindParam(':uphone', $phone);
                $stmt->bindParam(':unameCOR', $CORname);
                $stmt->bindParam(':unameSEC', $SECname);
                $stmt->bindParam(':uimgCOR', $picProfile);
                $stmt->bindParam(':uimgSEC', $picProfile2);
                if($stmt->execute()){
                    ?>
            <script>
                alert("New Zone Added successfully");
                window.location.href=('zones.php');
            </script>
        <?php


                }else{
            ?>
            <script>
                alert("ERROR OCCURED");
                window.location.href=('zones.php');
            </script>

        <?php

            }

        }else{
            ?>
            <script>
                alert("please Select The Correct image extension jpg,png,jpeg etc for COR_IMAGE and SEC_IMAGE");
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
	    	<section id="add-zone-wrapper" class="update-section">
				<h5>Add Zone</h5>
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<p class="element-title">Zone Name</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text" name="Zname">
		        	</div>
				</div>
		    	<div class="row">
					<p class="element-title">Co-ordinator's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="CORimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Co-ordinator's Name</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text" name="CORname">
		        	</div>
				</div>
		    	<div class="row">
					<p class="element-title">Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="SECimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text" name="SECname">
		        	</div>
				</div>
				<div class="row">
					<p class="element-title">Family House Address</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text" name="Faddress">
		        	</div>
				</div>
				<div class="row">
					<p class="element-title">Official Lines</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text" placeholder="Use a comma to seperate numbers" name="phone">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="add_zone">Add Zone</button>
			</form>
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