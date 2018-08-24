<?php
include '../process.php';
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
            $id= $_GET['edit_id'];
            $stmt_edit = $connect->prepare('SELECT * FROM register WHERE id=:uid');
            $stmt_edit->execute(array(':uid' => $id));
            $edit_row=$stmt_edit->fetch(PDO::FETCH_ASSOC);
            extract($edit_row);
        }else{
            echo "AN ERROR OCCURED";
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
    		<section class="user-details-wrapper update-section">
    			
    			<section class="user-profile-img">
    				<img src="../_css/_images/register/<?php echo $regimg ?>" alt="Profile Image">
    			</section>
    			<section class="user-details"> 
    				<h3 class="user-name"><?php echo $name ?></h3>
    				<p class="user-state-code"><span class="user-details-header">State Code: </span><?php echo $stateCode ?></p>
    				<p class="user-phone-number"><span class="user-details-header">Phone Number: </span><?php echo $phone ?></p>

    				<p class="user-email-address"><span class="user-details-header">Email: </span><?php echo $email ?></p>
    				<p class="user-dob"><span class="user-details-header">D.O.B: </span><?php echo '28/04/2018' ?></p>
    				<p class="user-date-of-registration"><span class="user-details-header">Date of Reg.: </span><?php echo $dob ?></p>
    				<p class="user-home-address"><span class="user-details-header">Home Address: </span><?php echo $address ?></p>
    				<p class="user-state-of-origin"><span class="user-details-header">State of Origin: </span><?php echo $stateOfOrigin ?></p>
    				<p class="user-institution-attended"><span class="user-details-header">Institution Attended: </span><?php echo $institution ?></p>
    				<p class="user-course-of-study"><span class="user-details-header">Course of Study: </span><?php echo $course ?></p>
    			</section>
    		</section>
	    	<section class="user-questions-wrapper update-section">
				<h5>Questions and Answers</h5>
	    		<p class="user-QnA"><span class="user-questions-header">When Were You Born Again And How?</span><br><?php echo $salvation ?></p>

	    		<p class="user-QnA"><span class="user-questions-header">How Have You Been Finding the Christian Life Since? (BE PRECISE)</span><br><?php echo $christianWalk ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Which Fellowship Did You Attend On Campus?</span><br><?php echo $fellowship ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Mention The Post(s) You Held In The Fellowship</span><br><?php echo $fellowshipPost ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Supposing You Die Today, Will You Make Heaven?</span><br><?php echo $heaven ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What's The Basis Of Your Answer In The Previous Question?</span><br><?php echo $heavenAnswerBasis ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Relationship Status</span><br><?php echo $relationshipStatus ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Are You A Member Of Any Club, Secular Society Or Organization? If Yes, Which One?</span><br><?php echo $orgMembership ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What Do You Understand By Tithe?</span><br><?php echo $tithe ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">How Often Do You Pay Your Tithe?</span><br><?php echo $titheFreq ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Will You Be Willing To Pay Your Tithe To This Fellowship?</span><br><?php echo $tithePayment ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What Is Your Hobby?</span><br><?php echo $hobby ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What Is Your Church Denomination?</span><br><?php echo $denomination ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Which Unit Will You Be Willing To Serve in NCCF?</span><br><?php echo $serviceUnit ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Would You Like To Serve In NCCF As a Leader If Called Upon?</span><br><?php echo $leadershipCall ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Mention The Office You May Like To Serve In</span><br><?php echo $office ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Have You Received The Baptism Of The Holy Spirit?</span><br><?php echo $baptism ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What About Water Baptism?</span><br><?php echo $waterBaptism ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">Do You Have a Certified Driving License?</span><br><?php echo $drivingLicense ?></p>
	    		
	    		<p class="user-QnA"><span class="user-questions-header">What Do You Think About the Fellowship?</span><br><?php echo $thoughts ?></p>
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