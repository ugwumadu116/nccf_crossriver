<?php
 include '../process.php';
 	 if(isset($_POST['btn_dd'])){
        $ddname =  $_POST['ddname'];
        

        $images = $_FILES['ddimg']['name'];
        $tmp_dir = $_FILES['ddimg']['tmp_name'];
        $imageSize = $_FILES['ddimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['ddimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'ddd'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM dd WHERE ddimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['ddimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['ddimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  dd(ddname,ddimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $ddname);
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
  
