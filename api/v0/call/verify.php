<?php
	include '../php/connect.php';
	include '../php/functions.php';
	
	$id = isset($_GET['x']) ? mysqli_real_escape_string($database, $_GET['x']) : '';
	$passport = isset($_GET['y']) ? mysqli_real_escape_string($database, $_GET['y']) : '';
	
	$member_data = TableData('members', $id);
	
	if (count($member_data) == 0){
		// INCLUDE AN ERROR PAGE
		header('Location: '.$url_path.'403.php');
		die();
	}
	
	if ($passport != md5("Heaven".$member_data['email_address']."TUPAC")){
		// INCLUDE AN ERROR PAGE
		header('Location: '.$url_path.'403.php');
		die();
	}
	
	if ($member_data['active'] != '0'){
		header('Location: '.$url_path.'');
		die();
	}
	
	$queryA = "UPDATE members SET Active = \"1\" WHERE ID = \"$id\"";
	if (!($resultA = mysqli_query($database, $queryA))){
		header('Location: '.$url_path.'403.php');
		die();
	}
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	header('Location: '.$url_path.'verified.php');
	die();
?>