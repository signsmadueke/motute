<?php
	require_once 'functions.php';
	include 'connect.php';
	
	$identity = isset($_COOKIE['motute_name']) ? mysqli_real_escape_string($database, $_COOKIE['motute_name']) : '';
	$secure = isset($_COOKIE['motute_secure']) ? mysqli_real_escape_string($database, $_COOKIE['motute_secure']) : '';
	
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	if (($identity !== "") && ($secure !== "")){
	
		$member_data = TableData('members', $identity);
		if (count($member_data) != 0){
			if (md5("Wayne".$member_data['email_address']."Cent") == $secure){
				header("Location: ".$url_path."profile.php");
			}
			else{
				header("Location: ".$url_path."logout.php");
			}
		}
	
	}
?>