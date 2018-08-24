<?php
 include '../process.php';
 	 if(isset($_POST['btn_tres'])){
        $tresname =  $_POST['tresname'];
        

        $images = $_FILES['tresimg']['name'];
        $tmp_dir = $_FILES['tresimg']['tmp_name'];
        $imageSize = $_FILES['tresimg']['size'];

        $allowes_ext = array('jpeg', 'jpg', 'gif', 'png');
        $extt = explode('.', $_FILES['tresimg']['name']);
        $ext = end($extt);
        $imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
        $namee = 'treu'.".".$ext;
        $upload_dir = '../_css/_images/exco/'.$namee;        
       
        
        //$picProfile = rand(1000, 1000000).".".$imgExt;
        if(in_array($ext, $allowes_ext)){
            $stmt_select = $connect->prepare('SELECT * FROM tres WHERE tresimg=:upic');
            $stmt_select->execute(array(':upic'=>$namee));
            $imgRow= $stmt_select->fetch(PDO::FETCH_ASSOC);
            if(($imgRow['tresimg']) != ""){
                unlink("../_css/_images/exco/".$imgRow['tresimg']);
                move_uploaded_file($tmp_dir, $upload_dir);
                
                $stmt=$connect->prepare('INSERT INTO  tres(tresname,tresimg) VALUES (:slider1hSV,:upic)');
                $stmt->bindParam(':upic', $namee);
                $stmt->bindParam(':slider1hSV', $tresname);
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
  
