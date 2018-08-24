<?php
 include 'process.php';
 	 if(isset($_POST['submit'])){

        $error = '';
		$name = trim($_POST["name"]);

		$images = $_FILES['regimg']['name'];
    	$tmp_dir = $_FILES['regimg']['tmp_name'];
    	$imageSize = $_FILES['regimg']['size'];

		$dob = trim($_POST["dob"]);
		$stateCode = trim($_POST["stateCode"]);
		$currentDate = trim($_POST["currentDate"]);
		$address = trim($_POST["address"]);
		$email = trim($_POST["email"]);
		$phone = trim($_POST["phone"]);
		$stateOfOrigin = trim($_POST["stateOfOrigin"]);
		$institution = trim($_POST["institution"]);
		$course = trim($_POST["course"]);
		$salvation = trim($_POST["salvation"]);
		$christianWalk = trim($_POST["christianWalk"]);
		$fellowship = trim($_POST["fellowship"]);
		$fellowshipPost = trim($_POST["fellowshipPost"]);
		$heaven = trim($_POST["heaven"]);
		$heavenAnswerBasis = trim($_POST["heavenAnswerBasis"]);
		$relationshipStatus = trim($_POST["relationshipStatus"]);
		$orgMembership = trim($_POST["orgMembership"]);
		$tithe = trim($_POST["tithe"]);
		$titheFreq = trim($_POST["titheFreq"]);
		$tithePayment = trim($_POST["tithePayment"]);
		$hobby = trim($_POST["hobby"]);
		$denomination = trim($_POST["denomination"]);
		$serviceUnit = trim($_POST["serviceUnit"]);
		$leadershipCall = trim($_POST["leadershipCall"]);
		$office = trim($_POST["office"]);	
		$baptism = trim($_POST["baptism"]);
		$waterBaptism = trim($_POST["waterBaptism"]);
		$drivingLicense = trim($_POST["drivingLicense"]);
		$thoughts = trim($_POST["thoughts"]);

        $upload_dir = '_css/_images/register/';
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['regimg']['name']);
        $ext = end($extt);
        $picProfile = rand(1000, 1000000).".".$imgExt;
        if(in_array($ext, $allowes_ext)){
            if($imageSize<500000){
                move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
                try{$sqlinsert = "INSERT INTO register (name, regimg, dob, stateCode, currentDate, address, email, phone, stateOfOrigin, institution, course, salvation, christianWalk, fellowship, fellowshipPost, 
				heaven, heavenAnswerBasis, relationshipStatus, orgMembership, tithe, titheFreq, tithePayment, hobby, denomination, serviceUnit, leadershipCall, office, baptism, waterBaptism, drivingLicense, thoughts) 
				VALUES(:name, :registerIMG, :dob, :stateCode, :currentDate, :address, :email, :phone, :stateOfOrigin, :institution, :course, :salvation, :christianWalk, :fellowship, :fellowshipPost, :heaven, :heavenAnswerBasis, :relationshipStatus, :orgMembership, :tithe, :titheFreq, :tithePayment, :hobby, :denomination, :serviceUnit, :leadershipCall, :office, :baptism, :waterBaptism, :drivingLicense, :thoughts )";
				$statement=$connect->prepare($sqlinsert);
				$statement->execute(array(':name' => $name, ':registerIMG'=>$picProfile, ':dob' => $dob, ':stateCode' => $stateCode, ':currentDate' => $currentDate, ':address' => $address, ':email' => $email, ':phone' => $phone, ':stateOfOrigin' => $stateOfOrigin, ':institution' => $institution, ':course' => $course, ':salvation' => $salvation, ':christianWalk' => $christianWalk, ':fellowship' => $fellowship, ':fellowshipPost' => $fellowshipPost, ':heaven' => $heaven, ':heavenAnswerBasis' => $heavenAnswerBasis, ':relationshipStatus' => $relationshipStatus, ':orgMembership' => $orgMembership, ':tithe' => $tithe, ':titheFreq' => $titheFreq, ':tithePayment' => $tithePayment, ':hobby' => $hobby, ':denomination' => $denomination, ':serviceUnit' => $serviceUnit, 
				':leadershipCall' => $leadershipCall, ':office' => $office, ':baptism' => $baptism, ':waterBaptism' => $waterBaptism, ':drivingLicense' => $drivingLicense, ':thoughts' => $thoughts ));

		}
		catch(PDOException $error){
		$result = "<p style='padding: 20px; color: red;'><h1>REGISTRATION FAILED ".$error->getMessage()."</h1> </p>";
		}
              }else{
            ?>
            <script>
                alert("Please upload a passport photo less than 500kb");
                window.location.href=('register.php');
            </script>
        <?php

            }

        }else{
            ?>
            <script>
                alert("Please use a correct image file extension (i.e jpg, png or jpeg)");
                window.location.href=('register.php');
            </script>
        <?php
            
            }
    }
    	
if (isset($_POST['submit'])) {


	?>
            <script>
                //alert("Please upload a passport photo less than 500kb");
                window.location.href=('success.php');
            </script>
        <?php



	//header("location: success.php");
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register — Nigeria Christian Corpers' Fellowship Cross River State Chapter</title>
	<meta name="title" content="Nigeria Christian Corpers' Fellowship Cross River State Chapter">
	<meta name="author" content="The Holy Ghost">
	<meta name="description" content="Nigeria Christian Corpers' Fellowship (NCCF), Cross River state Chapter was established after the National Youth Service Corps, and the State Secretariat is located in Calabar, the state's capital.">
	<link rel="shortcut icon" href="_css/_images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="_css/_images/favicon.ico" type="image/x-icon">
	<!-- Materialize Framework Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<!-- NCCF CRS Default Styles -->
	<link rel="stylesheet" type="text/css" href="_css/main.css">
	<!-- jQuery -->
	<script src="_scripts/jquery-3.3.1.js"></script>
	<!-- Materialize Framework Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<!-- jQuery Validation minified JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<style>
		nav ul {
			margin: 1em 0;
		}

		nav ul a {
			display: inline;
		}
		nav ul a:hover {
			background: none;
		}
		header {
			padding-top: 25em ;
		}

		h3 {
			margin-top: 3em;
			padding-bottom: .3em;
		}

		@media only screen and (max-width: 599px) {
			header {
				padding-top: 15em !important;
			}
			nav ul li {
				margin: 0;
			}
			nav ul li a {
				font-size: 1.2em;
			}
		}

		@media only screen and (min-width: 600px) and (max-width: 991px) {
			nav ul li a {
				font-size: 1.2em;
			}
		}
		div.error {
		  color: #ff5b5b;
		  margin-top: -15px;
		  padding: 0;
		  font-size: 0.9em;
		}

		.errorStyle {
		  padding-top: .8em;
    	  font-size: 1.5em;
		}
	</style>
</head>
<body>
	<header class="subHeading reg">
		<!-- Navigation Bar -->
		<nav id="pageNav">
			<section class="siteLogo">
				<a href="index.php"><img src="_css/_images/logo.jpg"></a>
			</section>

			<section id="hamBurger">
			    <span></span>
			    <span></span>
			    <span></span>
			</section>
			
			<section id="navMenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a class="current" href="register.php">Register</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="zones.php">Zones</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="forum.php">Forum</a></li>
				</ul>
			</section> 
		</nav>
		
		<!-- Slider Wrapper -->
		<article class="subSlider-wrapper">
			<h2 class="section-header">Registration</h2>
		</article>
	</header>
	<main>

		<article class="container ">
			<h3 class="subSection-header">Personal Bio Data Form</h3>
			<form class="formValidate"  id="formValidate" method="post" action="" enctype="multipart/form-data" novalidate="novalidate">
				<div class="row">
					<div class="input-field col s12">
						<label for="name">Fullname</label>
						<input id="name" name="name" type="text" data-error=".errorTxt1">
						<div class="errorStyle errorTxt1"></div>
					</div>
				</div>
				<div class="row">
					<div class="file-field input-field col s12 l6">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="regimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" placeholder="Upload Passport (Not more than 500kb)" type="text">
						</div>
					</div>
					<div class="input-field col s12 l6">
						<label class="active" for="stateCode">State Code</label>
						<input value="CR/" id="stateCode" type="text" name="stateCode" data-error=".errorTxt4">
						<div class="errorStyle errorTxt4"></div>
						
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
						<label>Date of Birth</label>
						<input id="dob" type="text" class="datepicker" name="dob" data-error=".errorTxt3">
						<div class="errorStyle errorTxt3"></div>
					</div>
					<div class="input-field col s12 l6">
						<label>Date of registration</label>
						<input id="currentDate" type="text" name="currentDate" data-error=".errorTxt5" class="datepicker">
						<div class="errorStyle errorTxt5"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="address">Home Address</label>
						<input id="address" type="text" name="address" data-error=".errorTxt6">
						<div class="errorStyle errorTxt6"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="email">Email Address</label>
						<input id="email" type="text" name="email" data-error=".errorTxt7">
						<div class="errorStyle errorTxt7"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
						<label for="phone">Phone Number</label>
						<input id="phone" type="number" name="phone" data-error=".errorTxt8">
						<div class="errorStyle errorTxt8"></div>
					</div>

					<div class="input-field col s12 l6">
						<label for="stateOfOrigin">State Of Origin</label>
						<input id="stateOfOrigin" type="text" name="stateOfOrigin" data-error=".errorTxt9">
						<div class="errorStyle errorTxt9"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="institution">Institution Attended</label>
						<input id="institution" type="text" name="institution" data-error=".errorTxt10">
						<div class="errorStyle errorTxt10"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="course">Course of Study</label>
						<input id="course" type="text" name="course" data-error=".errorTxt11">
						<div class="errorStyle errorTxt11"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="salvation">When Were You Born Again And How?</label>
						<textarea id="salvation" name="salvation" class="materialize-textarea validate" length="240"  data-error=".errorTxt12"></textarea>
						<div class="errorStyle errorTxt12"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="christianWalk">How Have You Been Finding the Christian Life Since? (BE PRECISE)</label>
						<textarea name="christianWalk" id="christianWalk" class="materialize-textarea validate" data-error=".errorTxt13" length="240"></textarea>
						<div class="errorStyle errorTxt13"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="fellowship">Which Fellowship Did You Attend On Campus?</label>
						<input id="fellowship" name="fellowship" type="text" data-error=".errorTxt14">
						<div class="errorStyle errorTxt14"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="fellowshipPost">Mention The Post(s) You Held In The Fellowship</label>
						<input id="fellowshipPost" name="fellowshipPost" type="text" data-error=".errorTxt15">
						<div class="errorStyle errorTxt15"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label class="active">Supposing You Die Today, Will You Make Heaven?</label>
						<select id="heaven" name="heaven" data-error=".errorTxt16">
							<option value="Yes" selected>Yes</option>
							<option value="No">No</option>
						</select>
						<div class="errorStyle errorTxt16"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="heavenAnswerBasis">What's The Basis Of Your Answer In The Previous Question?</label>
						<textarea name="heavenAnswerBasis" id="heavenAnswerBasis" class="materialize-textarea validate" length="240" data-error=".errorTxt17"></textarea>
						<div class="errorStyle errorTxt17"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label class="active">Relationship Status</label>
						<select name="relationshipStatus" id="relationshipStatus" data-error=".errorTxt18">
							<option value="Single" selected>Single</option>
							<option value="Courting">Courting</option>
							<option value="Married">Married</option>
						</select>
						<div class="errorStyle errorTxt18"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="orgMembership">Are You A Member Of Any Club, Secular Society Or Organization? If Yes, Which One?</label>
						<input name="orgMembership" id="orgMembership" type="text" data-error=".errorTxt19">
						<div class="errorStyle errorTxt19"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="tithe">What Do You Understand By Tithe?</label>
						<textarea id="tithe" name="tithe" class="materialize-textarea validate" data-error=".errorTxt20" length="240"></textarea>
						<div class="errorStyle errorTxt20"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label class="active">How Often Do You Pay Your Tithe?</label>
						<select id="titheFreq" name="titheFreq" data-error=".errorTxt21">
							<option value="Always" selected>Always</option>
							<option value="Sometimes">Sometimes</option>
							<option value="Regularly">Regularly</option>
							<option value="Not At All">Not At All</option>
						</select>
						<div class="errorStyle errorTxt21"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label class="active">Will You Be Willing To Pay Your Tithe To This Fellowship?</label>
						<select name="tithePayment" id="tithePayment" data-error=".errorTxt22">
							<option value="Yes" selected>Yes</option>
							<option value="No">No</option>
						</select>
						<div class="errorStyle errorTxt22"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="hobby">What Is Your Hobby?</label>
						<input id="hobby" name="hobby" type="text" data-error=".errorTxt23">
						<div class="errorStyle errorTxt23"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="denomination">What Is Your Church Denomination?</label>
						<input id="denomination" name="denomination" type="text" data-error=".errorTxt24">
						<div class="errorStyle errorTxt24"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
						<label class="active">Which Unit Will You Be Willing To Serve in NCCF?</label>
						<select name="serviceUnit" id="serviceUnit" data-error=".errorTxt25" multiple>
							<option value="Drama">Drama</option>
							<option value="Prayer and Evangelism">Prayer and Evangelism</option>
							<option value="Music">Music</option>
							<option value="Publicity">Publicity</option>
							<option value="Bible Study">Bible Study</option>
							<option value="Ushering and Organizing">Ushering and Organizing</option>
						</select>
						<div class="errorStyle errorTxt25"></div>
					</div>

					<div class="input-field col s12 l6">
						<label class="active">Would You Like To Serve In NCCF As a Leader If Called Upon?</label>
						<select name="leadershipCall" id="leadershipCall" data-error=".errorTxt26">
							<option value="Yes" selected>Yes</option>
							<option value="No">No</option>
						</select>
						<div class="errorStyle errorTxt26"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="office">Mention The Office You May Like To Serve In</label>
						<input id="office" name="office" type="text" data-error=".errorTxt27">
						<div class="errorStyle errorTxt27"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="baptism">Have You Received The Baptism Of The Holy Spirit?</label>
						<input id="baptism" name="baptism" type="text" data-error=".errorTxt28">
						<div class="errorStyle errorTxt28"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="waterBaptism">What About Water Baptism?</label>
						<input id="waterBaptism" name="waterBaptism" type="text" data-error=".errorTxt29">
						<div class="errorStyle errorTxt29"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label class="active">Do You Have a Certified Driving License?</label>
						<select name="drivingLicense" id="drivingLicense" data-error=".errorTxt30">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<div class="errorStyle errorTxt30"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea id="thoughts" name="thoughts" class="materialize-textarea validate" length="240" data-error=".errorTxt31"></textarea>
						<label for="thoughts">What Do You Think About the Fellowship?</label>
						<div class="errorStyle errorTxt31"></div>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button class="btn waves-effect waves-light submit" type="submit" name="submit">Submit</button>
					</div>
				</div>
			</form>
		</article>
	</main>

		<footer id="page-footer">
			<article id="footer-top">
					<section id="footer-social">
						<a href="#"><object type="image/svg+xml" data="_css/_images/facebook.svg">Facebook</object></a>
						<a href="#"><object type="image/svg+xml" data="_css/_images/twitter.svg">Twitter</object></a>
						<a href="#"><object type="image/svg+xml" data="_css/_images/instagram.svg">Instagram</object></a>
					</section>
					<h4 >Nigeria Christian Corpers' Fellowship Cross River State Chapter</h4>
					<p>23 Akiba Street, Off Old Odukpani Road Ikot Ansa, Calabar</p>
					<p>+234 </p>
					<p>nccfcrossriver@yahoo.com</p>
			</article>
			<article id="footer-bottom">
				<p>© 2018 NCCF CROSS RIVER STATE. ALL RIGHTS RESERVED.</p>
			</article>
		</footer>
		<script src="_scripts/nav.js"></script>
		<script src="_scripts/script.js"></script>
		<script>
			// Materialize Date Picker
			$('.datepicker').datepicker({
				format: 'dd/mm/yyyy',
				minDate: new Date(1970,1,1),
				maxDate: new Date(),
				firstDay: 0
			});

			$('select').formSelect();
			
			$("#formValidate").validate({
	        rules: {
	            name: {
	                required: true,
	                minlength: 5
	                
	            },
	            dob: "required",
	            stateCode: {
	                required: true,
	                minlength: 5
	            },
	            currentDate: "required",
	            address: {
	                required: true
	            },
	            email: {
	                required: true,
	                 email: true
	            },
	            phone: {
	                required: true,
	                minlength: 11
	            },
	            stateOfOrigin: {
	                required: true,
	                minlength: 3
	            },
	            institution: {
	                required: true,
	                minlength: 5
	            },
	            course: {
	                required: true,
	                minlength: 5
	            },
	            salvation: {
	                required: true
	            },
	            christianWalk: {
	                required: true
	            },
	            fellowship: {
	                required: true,
	                minlength: 5
	            },
	            fellowshipPost: {
	                required: true,
	                minlength: 5
	            },
	            heaven: "required",
	            heavenAnswerBasis: {
	                required: true,
	                minlength: 10
	            },
	            relationshipStatus: "required",
	            orgMembership: {
	                required: true,
	                minlength: 2
	            },
	            tithe: {
	                required: true,
	                minlength: 5
	            },
	            titheFreq: "required",
	            tithePayment: "required",
	            hobby: {
	                required: true
	            },
	            denomination: {
	                required: true,
	                minlength: 5
	            },
	            serviceUnit: "required",
	            leadershipCall: "required",
	            office: {
	                required: true
	            },
	            baptism: {
	                required: true
	            },
	            waterBaptism: {
	                required: true
	            },
	            drivingLicense: "required",
	            thoughts: {
	                required: true,
	                minlength: 5
	            }
	        },
	        errorElement : 'div',
	        errorPlacement: function(error, element) {
	          var placement = $(element).data('error');
	          if (placement) {
	            $(placement).append(error)
	          } else {
	            error.insertAfter(element);
	          }
	        }
	     });

		</script>
</body>
</html>