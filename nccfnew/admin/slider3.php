<!-- SLIDER3 PHP START HERE-->
 <?php
 include '../process.php';
 	 if(isset($_POST['loginS3'])){
    	$slider1hS3 =  $_POST['slider1hS3'];
    	$slider1hL3 =  $_POST['slider1hL3'];

    	$images = $_FILES['slider1img3']['name'];
    	$tmp_dir = $_FILES['slider1img3']['tmp_name'];
    	$imageSize = $_FILES['slider1img3']['size'];


    	$allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
    	$allowes_extttt = array('zzz','jpg');
    	$extt = explode('.', $_FILES['slider1img3']['name']);
    	$ext = end($extt);
    	$imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
    	$namee = 'slider3'.".".$ext;
    	$upload_dir = '../_css/_images/slider3/'.$namee;
    	if(in_array($ext, $allowes_ext)){
    		//if($imageSize<500000){  //50000 = 500kb, 500000 = 5mb
    			if(in_array($imgExt, $allowes_extttt)){
    			$stmt_select = $connect->prepare('SELECT * FROM slider3 WHERE Simg3=:upic');
		        $stmt_select->execute(array(':upic'=>$namee));        
		        $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
		        if(($imgRow['Simg3']) != ""){
            	unlink("../_css/_images/slider3/".$imgRow['Simg3']);
                 move_uploaded_file($tmp_dir, $upload_dir);

            	$stmt=$connect->prepare('INSERT INTO  slider3(Simg3,SHsmall3,SHlarge3) VALUES (:upic,:slider1hSV,:slider1hLV)');
		    	$stmt->bindParam(':upic', $namee);
		    	$stmt->bindParam(':slider1hSV', $slider1hS3);
		    	$stmt->bindParam(':slider1hLV', $slider1hL3);
		    	if($stmt->execute()){
    		?>
    		<script>
    			alert("new record successful");
    			window.location.href=('index.php');
    		</script>
    	<?php

    	}else{
    		?>
    		<script>
    			alert("ERROR OCCURED");
    			window.location.href=('index.php');
    		</script>

    	<?php


            }

            	}

    	}else{
    		?>
    		<script>
    			alert("it must be an image file with .jpg extension");
    			window.location.href=('index.php');
    		</script>
    	<?php
            }
 /*   			
    	}else{
    		?>
    		<script>
    			alert("Big Image Size must be less than 500kb");
    			window.location.href=('index.php');
    		</script>
    	<?php

    		}*/


        }else{
        	?>
        	<script>
    			alert("please Select The Correct file extension jpg,png,jpeg etc");
    			window.location.href=('index.php');
    		</script>
    	<?php
        	
    		}


    }


 ?>
  <!-- SLIDER3 PHP ENDS HERE -->
