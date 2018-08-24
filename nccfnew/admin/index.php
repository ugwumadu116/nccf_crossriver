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
		<li class="link-item"><a class="active" href="index.php" class="waves-effect waves-light">Homepage</a></li>
		<li class="link-item"><a href="gallery.php" class="waves-effect waves-light">Gallery</a></li>
		<li class="link-item"><a href="zones.php" class="waves-effect waves-light">Zones</a></li>
		<li class="link-item"><a href="members.php" class="waves-effect waves-light">Registered Members</a></li>
		<footer>
			<p>Hello, <b><?php echo $userprofile; ?></b></p>
			<a href="logout.php">Logout</a>
		</footer>
	</ul>
	<main>
		<header id="main-header">
			<h3>Admin Dashboard - Home</h3>
		</header>
		<section id="admin-panel">
			<section id="slider-wrapper" class="update-section">
				<h5>Slider 1</h5>
				<div class="row">
					<form method="post" action="slider1.php" enctype="multipart/form-data">
					<p class="element-title">Slider Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="slider1img">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
		        <div class="row">
					<p class="element-title">Slider Header (Small)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" name="slider1hS" type="text" placeholder="Not more than 15 characters" data-length="15">
		        	</div>
		        </div>
		        <div class="row">
					<p class="element-title">Slider Header (Large)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" name="slider1hL" type="text" placeholder="Not more than 30 characters" data-length="30">
		        	</div>
		        </div>
				<button class="btn waves-effect waves-light" type="submit" name="loginS1">Update</button>						
			</form>
			</div>
				
		    </section>
			<section id="slider-wrapper" class="update-section">
				<h5>Slider 2</h5>
				<div class="row">
				<form method="post" action="slider2.php" enctype="multipart/form-data">
					<p class="element-title">Slider Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="slider1img2">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
		        <div class="row">
				<p class="element-title">Slider Header (Small)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" name="slider1hS2" type="text" placeholder="Not more than 15 characters" data-length="15">
		        	</div>
		        </div>
		        <div class="row">
					<p class="element-title">Slider Header (Large)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" name="slider1hL2" type="text" placeholder="Not more than 30 characters" data-length="30">
		        	</div>
		        </div>
				<button class="btn waves-effect waves-light" type="submit" name="loginS2">Update</button>
				</form>
		    </section>
			<section id="slider-wrapper" class="update-section">
				<h5>Slider 3</h5>
				<div class="row">
				<form method="post" action="slider3.php" enctype="multipart/form-data">
					<p class="element-title">Slider Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="slider1img3">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
		        <div class="row">
				<p class="element-title">Slider Header (Small)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" name="slider1hS3" type="text" placeholder="Not more than 15 characters" data-length="15">
		        	</div>
		        </div>
		        <div class="row">
					<p class="element-title">Slider Header (Large)</p>
		        	<div class="input-field col s10">
		        		<input id="input_text" type="text"  name="slider1hL3" placeholder="Not more than 30 characters" data-length="30">
		        	</div>
		        </div>
				<button class="btn waves-effect waves-light" type="submit" name="loginS3">Update</button>
			</form>
		    </section>
		    <section id="welcome-speech" class="update-section">
				<h5>Welcome Speech</h5>
		    	<div class="row">
		    	<form method="post" action="pSpeech.php" enctype="multipart/form-data">
					<p class="element-title">President's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="pimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">President's Speech</p>
					<div class="input-field col s10">
						<textarea id="textarea2" class="materialize-textarea" name="ptext"></textarea>
					</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="pbtn">Update</button>
				</form>
		    </section>
		    <section id="executives" class="update-section">
				<h5>Executives - President/Chairman</h5>
		    	<div class="row">
		    	<form method="post" action="chairman.php" enctype="multipart/form-data">
					<p class="element-title">President's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="chairmanimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">President's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="chairmanname">
		        	</div>
				</div>
				<div class="row">
			      <label>
			        <input name="group1" type="radio" value="President" />
			        <span>President</span>
			      </label>
				</div>
				<div class="row">
			      <label>
			        <input name="group1" type="radio" value="Chairman" />
			        <span>Chairman</span>
			      </label>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_chairman">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - General Secretary/Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="gsec.php" enctype="multipart/form-data">
					<p class="element-title">General Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="gsecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">General Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="gsecname">
		        	</div>
				</div>
				<div class="row">
			      <label>
			        <input name="group2" type="radio" value="General Secretary"/>
			        <span>General Secretary</span>
			      </label>
				</div>
				<div class="row">
			      <label>
			        <input name="group2" type="radio" value="Secretary"/>
			        <span>Secretary</span>
			      </label>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_gsec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Assistant General Secretary/Assistant Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="asec.php" enctype="multipart/form-data">
					<p class="element-title">Assistant General Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="asecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Assistant General Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="asecname">
		        	</div>
				</div>
				<div class="row">
			      <label>
			        <input name="group3" type="radio" value="Assistant General Secretary" />
			        <span>Assistant General Secretary</span>
			      </label>
				</div>
				<div class="row">
			      <label>
			        <input name="group3" type="radio" value="Assistant Secretary" />
			        <span>Assistant Secretary</span>
			      </label>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_asec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Financial Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="finsec.php" enctype="multipart/form-data">
					<p class="element-title">Financial Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="finsecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Financial Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="finsecname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_finsec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Prayer Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="psec.php" enctype="multipart/form-data">
					<p class="element-title">Prayer Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="psecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Prayer Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="psecname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_psec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Evangelism Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="esec.php" enctype="multipart/form-data">
					<p class="element-title">Evangelism Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="esecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Evangelism Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="esecname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_esec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Bible Study Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="bsec.php" enctype="multipart/form-data">
					<p class="element-title">Bible Study Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="bsecimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Bible Study Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="bsecname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_bsec">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Publicity Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="ps.php" enctype="multipart/form-data">
					<p class="element-title">Publicity Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="psimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Publicity Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="psname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_ps">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Transport And Organizing Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="tos.php" enctype="multipart/form-data">
					<p class="element-title">TOS's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="tosimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">TOS's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="tosname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_tos">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Sister's Cordinator/Welfare Secretary</h5>
		    	<div class="row">
		    	<form method="post" action="sisCORD.php" enctype="multipart/form-data">
					<p class="element-title">Sister's Cord/Welfare Secretary's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="sis_img">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Sister's Cord/Welfare Secretary's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="sis_name">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_sisCORD">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Drama Director</h5>
		    	<div class="row">
		    	<form method="post" action="dd.php" enctype="multipart/form-data">
					<p class="element-title">Drama Director's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="ddimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Drama Director's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="ddname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_dd">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Music Director</h5>
		    	<div class="row">
		    	<form method="post" action="md.php" enctype="multipart/form-data">
					<p class="element-title">Music Director's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="mdimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Music Director's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="mdname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_md">Update</button>
				</form>
			</section>
			<section id="executives" class="update-section">
				<h5>Executives - Treasurer</h5>
		    	<div class="row">
		    	<form method="post" action="tres.php" enctype="multipart/form-data">
					<p class="element-title">Treasurer's Image</p>
					<div class="file-field input-field col s10">
						<div class="btn">
							<span>Select Image</span>
							<input type="file" name="tresimg">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>
				<div class="row">
					<p class="element-title">Treasurer's Name</p>
		        	<div class="input-field col s10">
		        		<input type="text" name="tresname">
		        	</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="btn_tres">Update</button>
				</form>
		    </section>
		</section>
	</main>
	<!-- jQuery -->
	<script src="_js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="_js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
			$('input#input_text').characterCounter();
		});

	</script>
</body>
</html>
<?php 
}if(time() - $_SESSION["user_admin"] > 1800){
	session_unset();
	header("location:login.php");

}

 ?>