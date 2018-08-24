<?php
 include '../process.php';
     if(isset($_POST['pbtn'])){
        $ptext =  $_POST['ptext'];

        $images = $_FILES['pimg']['name'];
        $tmp_dir = $_FILES['pimg']['tmp_name'];
        $imageSize = $_FILES['pimg']['size'];


        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['pimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'chairman'.".".$ext;
        $upload_dir = '../_css/_images/pIMAGE/'.$namee;
        if(in_array($ext, $allowes_ext)){
            //if(in_array($imgExt, $allowes_extttt)){
                $stmt_select = $connect->prepare('SELECT * FROM pSpeech WHERE pimage=:upic');
                $stmt_select->execute(array(':upic'=>$namee));        
                $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
                if(($imgRow['pimage']) != ""){
                unlink("../_css/_images/pIMAGE/".$imgRow['pimage']);
                move_uploaded_file($tmp_dir, $upload_dir);

                $stmt=$connect->prepare('INSERT INTO pSpeech(pimage,ptexts) VALUES (:upic,:slider1hSV)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $ptext);           
               if($stmt->execute()){

                ?>
                <script>
                    alert("president speech and image uploaded successfully");
                    window.location.href=('index.php');
                </script>
            <?php

        }else{
            ?>
            <script>
                alert("ERROR OCCURED IN UPLOAD");
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