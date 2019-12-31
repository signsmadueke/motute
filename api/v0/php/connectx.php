<?php
	require_once 'functions.php';
	date_default_timezone_set("Africa/Lagos");
	$obj = new stdClass();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	if (!($database = mysqli_connect("localhost", "entrepre_admin", "EntormMotute2019"))){
		$obj->status = "300";
		$obj->message = "Database Connection Error";
		echo(json_encode($obj));
		die();
	}
	if (!(mysqli_select_db($database, "entrepre_motute"))){
		$obj->status = "301";
		$obj->message = "Database Selection Error";
		echo(json_encode($obj));
		die();
	}
	mysqli_autocommit($database, FALSE);
?>