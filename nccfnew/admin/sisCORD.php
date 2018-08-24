<?php
 include '../process.php';
 	 if(isset($_POST['btn_sisCORD'])){
        $sis_name =  $_POST['sis_name'];
        

        $images = $_FILES['sis_img']['name'];
        $tmp_dir = $_FILES['sis_img']['tmp_name'];
        $imageSize = $_FILES['sis_img']['size'];



        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['sis_img']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'sisCO'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM sis_name WHERE sis_img=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['sis_img']) != ""){
                unlink("../_css/_images/exco/".$imgRow['sis_img']);

                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  sis_name(sis_name,sis_img) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $sis_name);
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
  
