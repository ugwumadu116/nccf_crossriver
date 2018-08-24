<?php
 include '../process.php';
 	 if(isset($_POST['btn_tos'])){
        $tosname =  $_POST['tosname'];
        

        $images = $_FILES['tosimg']['name'];
        $tmp_dir = $_FILES['tosimg']['tmp_name'];
        $imageSize = $_FILES['tosimg']['size'];


        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['tosimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'tosss'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;

        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM tos WHERE tosimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['tosimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['tosimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  tos(tosname,tosimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $tosname);
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
  
