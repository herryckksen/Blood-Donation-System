<?php
	include('../connection.php');
	session_start();

	
	$help_name = $_POST['help_name'];
	$help_phone = $_POST['help_phone'];
	$help_email = $_POST['help_email'];
	$help_mesage = $_POST['help_mesage'];
	// echo "<pre>";
// 	print_r($_POST);
// 	exit();

	$insert = $connection->query("INSERT INTO help(`help_name`,`help_phone`,`help_email`,`help_mesage`) 
    VALUES ('$help_name', '$help_phone', '$help_email', '$help_mesage')");

	
	if($insert){
		header('location:help.php?message=success');
	}else {
		header('location:help.php?message=failed');
	}
?>