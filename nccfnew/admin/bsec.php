<?php
 include '../process.php';
 	 if(isset($_POST['btn_bsec'])){
        $bsecname =  $_POST['bsecname'];
        

        $images = $_FILES['bsecimg']['name'];
        $tmp_dir = $_FILES['bsecimg']['tmp_name'];
        $imageSize = $_FILES['bsecimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['bsecimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'bsecc'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM bsec WHERE bsecimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['bsecimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['bsecimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  bsec(bsecname,bsecimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $bsecname);
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
  
