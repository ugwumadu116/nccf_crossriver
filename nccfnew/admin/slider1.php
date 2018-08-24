<!-- SLIDER1 PHP START HERE-->
 <?php
 include '../process.php';
 	 if(isset($_POST['loginS1'])){
    	$slider1hS =  $_POST['slider1hS'];
    	$slider1hL =  $_POST['slider1hL'];

    	$images = $_FILES['slider1img']['name'];
    	$tmp_dir = $_FILES['slider1img']['tmp_name'];
    	$imageSize = $_FILES['slider1img']['size'];


    	$allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
    	$allowes_extttt = array('zzz','jpg');
    	$extt = explode('.', $_FILES['slider1img']['name']);
    	$ext = end($extt);
    	$imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
    	$namee = 'slider1'.".".$ext;
    	$upload_dir = '../_css/_images/slider1/'.$namee;
    	if(in_array($ext, $allowes_ext)){
    		//if($imageSize<500000){  //50000 = 50kb, 500000 = 5mb
    			if(in_array($imgExt, $allowes_extttt)){
    			$stmt_select = $connect->prepare('SELECT * FROM slider1 WHERE Simg=:upic');
		        $stmt_select->execute(array(':upic'=>$namee));        
		        $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
		        if(($imgRow['Simg']) != ""){
            	unlink("../_css/_images/slider1/".$imgRow['Simg']);
                move_uploaded_file($tmp_dir, $upload_dir);

            	$stmt=$connect->prepare('INSERT INTO  slider1(Simg,SHsmall,SHlarge) VALUES (:upic,:slider1hSV,:slider1hLV)');
		    	$stmt->bindParam(':upic', $namee);
		    	$stmt->bindParam(':slider1hSV', $slider1hS);
		    	$stmt->bindParam(':slider1hLV', $slider1hL);
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
  <!-- SLIDER1 PHP ENDS HERE -->
