<?php
 include '../process.php';
 	 if(isset($_POST['btn_chairman'])){
        $chairmanname =  $_POST['chairmanname'];
        $group1 =  $_POST['group1'];
       
        

        $images = $_FILES['chairmanimg']['name'];
        $tmp_dir = $_FILES['chairmanimg']['tmp_name'];
        $imageSize = $_FILES['chairmanimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['chairmanimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'presido'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM chairman WHERE chairmanimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['chairmanimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['chairmanimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO chairman(chairmanname,chairmanimg,group1) VALUES (:slider1hSV,:upic,:presik)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $chairmanname);
                $stmt->bindParam(':presik', $group1);
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
  
