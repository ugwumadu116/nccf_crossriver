<?php
	$stmt = $connect->prepare('select * from slider1 order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

?> 