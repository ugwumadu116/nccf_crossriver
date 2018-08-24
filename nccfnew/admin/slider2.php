<!-- SLIDER2 PHP START HERE-->
 <?php
 include '../process.php';
 	 if(isset($_POST['loginS2'])){
    	$slider1hS2 =  $_POST['slider1hS2'];
    	$slider1hL2 =  $_POST['slider1hL2'];

    	$images = $_FILES['slider1img2']['name'];
    	$tmp_dir = $_FILES['slider1img2']['tmp_name'];
    	$imageSize = $_FILES['slider1img2']['size'];


    	$allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
    	$allowes_extttt = array('zzz','jpg');
    	$extt = explode('.', $_FILES['slider1img2']['name']);
    	$ext = end($extt);
    	$imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
    	$namee = 'slider2'.".".$ext;
    	$upload_dir = '../_css/_images/slider2/'.$namee;
    	if(in_array($ext, $allowes_ext)){
    		//if($imageSize<500000){  //50000 = 500kb, 500000 = 5mb
    			if(in_array($imgExt, $allowes_extttt)){
    			$stmt_select = $connect->prepare('SELECT * FROM slider2 WHERE Simg2=:upic');
		        $stmt_select->execute(array(':upic'=>$namee));        
		        $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
		        if(($imgRow['Simg2']) != ""){
            	unlink("../_css/_images/slider2/".$imgRow['Simg2']);
                 move_uploaded_file($tmp_dir, $upload_dir);

            	$stmt=$connect->prepare('INSERT INTO  slider2(Simg2,SHsmall2,SHlarge2) VALUES (:upic,:slider1hSV,:slider1hLV)');
		    	$stmt->bindParam(':upic', $namee);
		    	$stmt->bindParam(':slider1hSV', $slider1hS2);
		    	$stmt->bindParam(':slider1hLV', $slider1hL2);
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
    			
   /* 	}else{
    		?>
    		<script>
    			alert("Big Image Size must be less than 500kb");
    			window.location.href=('index.php');
    		</script>
    	<?php

    		}
*/

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
  <!-- SLIDER2 PHP ENDS HERE -->
