<?php
 include '../process.php';
 	 if(isset($_POST['btn_esec'])){
        $esecname =  $_POST['esecname'];
        

        $images = $_FILES['esecimg']['name'];
        $tmp_dir = $_FILES['esecimg']['tmp_name'];
        $imageSize = $_FILES['esecimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['esecimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'Esec'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM esec WHERE esecimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['esecimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['esecimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  esec(esecname,esecimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $esecname);
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

            /*}else{
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
  
