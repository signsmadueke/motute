<?php
	require_once 'functions.php';
	include 'connect.php';
	
	$identity = isset($_COOKIE['motute_name']) ? mysqli_real_escape_string($database, $_COOKIE['motute_name']) : '';
	$secure = isset($_COOKIE['motute_secure']) ? mysqli_real_escape_string($database, $_COOKIE['motute_secure']) : '';
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
?>