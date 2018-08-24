<?php

	/*THE CHAIRMAN STARTS*/
	$stmt = $connect->prepare('select * from chairman order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE CHAIRMAN ENDS*/


	/*THE gsec STARTS*/
	$stmt = $connect->prepare('select * from gsec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE gsec ENDS*/


	/*THE asec STARTS*/
	$stmt = $connect->prepare('select * from asec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE asec ENDS*/

	
	/*THE finsec STARTS*/
	$stmt = $connect->prepare('select * from finsec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE finsec ENDS*/


	/*THE psec STARTS*/
	$stmt = $connect->prepare('select * from psec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE psec ENDS*/

	/*THE esec STARTS*/
	$stmt = $connect->prepare('select * from esec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE esec ENDS*/


	/*THE bsec STARTS*/
	$stmt = $connect->prepare('select * from bsec order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE bsec ENDS*/


	/*THE ps STARTS*/
	$stmt = $connect->prepare('select * from ps order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE ps ENDS*/


	/*THE tos STARTS*/
	$stmt = $connect->prepare('select * from tos order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE tos ENDS*/


	/*THE sis_name STARTS*/
	$stmt = $connect->prepare('select * from sis_name order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE sis_name ENDS*/


	/*THE dd STARTS*/
	$stmt = $connect->prepare('select * from dd order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE dd ENDS*/

	/*THE md STARTS*/
	$stmt = $connect->prepare('select * from md order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE md ENDS*/

	/*THE tres STARTS*/
	$stmt = $connect->prepare('select * from tres order by id ASC');
	$stmt -> execute();
	if($stmt->rowCount()>0){
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row); 
		}
	}

	/*THE tres ENDS*/



?> 