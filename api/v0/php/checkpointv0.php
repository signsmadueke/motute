<?php
	require_once 'functions.php';
	
	include 'connect.php';
	
	$x = isset($_GET['x']) ? mysqli_real_escape_string($database, $_GET['x']) : '';
	$y = isset($_GET['y']) ? mysqli_real_escape_string($database, $_GET['y']) : '';
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	$member_data = TableData('members', $x);
	if (count($member_data) == 0){
		header("Location: 403.php");
		die();
	}
	else{
		if (md5("BULLY".$member_data['email_address']."EMINEM") != $y){
			header("Location: 403.php");
			die();
		}
		else{
			$_SESSION['user_id'] = $x;
		}
	}
?>