<?php
@session_start();
$server="localhost";
$user="nccfcros_user";
$passw="Rugged_2018";
$db="nccfcros_data";

$con=mysqli_connect($server,$user,$passw,$db);
if(!$con){
	die(mysql_errno($con));
}
?>