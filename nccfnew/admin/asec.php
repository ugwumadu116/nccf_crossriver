<?php
 include '../process.php';
 	 if(isset($_POST['btn_asec'])){
        $asecname =  $_POST['asecname'];
        $group3 =  $_POST['group3'];
        

        $images = $_FILES['asecimg']['name'];
        $tmp_dir = $_FILES['asecimg']['tmp_name'];
        $imageSize = $_FILES['asecimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['asecimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'asecc'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM asec WHERE asecimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['asecimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['asecimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  asec(asecname,asecimg,group3) VALUES (:slider1hSV,:upic,:group33)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $asecname);
                $stmt->bindParam(':group33', $group3);
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