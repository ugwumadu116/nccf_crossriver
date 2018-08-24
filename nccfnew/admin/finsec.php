<?php
 include '../process.php';
 	 if(isset($_POST['btn_finsec'])){
        $finsecname =  $_POST['finsecname'];
        

        $images = $_FILES['finsecimg']['name'];
        $tmp_dir = $_FILES['finsecimg']['tmp_name'];
        $imageSize = $_FILES['finsecimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['finsecimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'finsecc'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee; 
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM finsec WHERE finsecimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['finsecimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['finsecimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  finsec(finsecname,finsecimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $finsecname);
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
  
