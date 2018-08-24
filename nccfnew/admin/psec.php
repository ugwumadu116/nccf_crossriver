<?php
 include '../process.php';
 	 if(isset($_POST['btn_psec'])){
        $psecname =  $_POST['psecname'];
        

        $images = $_FILES['psecimg']['name'];
        $tmp_dir = $_FILES['psecimg']['tmp_name'];
        $imageSize = $_FILES['psecimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['psecimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'psecc'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
             $stmt_select = $connect->prepare('SELECT * FROM psec WHERE psecimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['psecimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['psecimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  psec(psecname,psecimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $psecname);
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
                alert("please Select The Correct file extension jpg,png,jpeg etc");
                window.location.href=('index.php');
            </script>
        <?php
            
            }
     }
    	




 ?>
  
