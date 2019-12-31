<?php
	include 'connectx.php';
	
	$identity = isset($_POST['identity']) ? strtolower(mysqli_real_escape_string($database, $_POST['identity'])) : '';
	$password = isset($_POST['password']) ? mysqli_real_escape_string($database, $_POST['password']) : '';
	$no_days = isset($_POST['no_days']) ? mysqli_real_escape_string($database, $_POST['no_days']) : '';
	
	$member_data = TableData('members', $identity);
	
	if (count($member_data) == 0){
		$obj->status = "301";
		$obj->message = "Invalid Credentials!";
		echo(json_encode($obj));
		die();
	}
	
	if (md5($password) != $member_data['password']){
		$obj->status = "302";
		$obj->message = "Invalid Credentials!";
		echo(json_encode($obj));
		die();
	}
	
	if ($member_data['active'] == '0'){
		$obj->status = "303";
		$obj->message = "Please, activate your account";
		echo(json_encode($obj));
		die();
	}
	
	$lock = md5("Wayne".$member_data['email_address']."Cent");
	define("TIME_BASE", intval($no_days) * 60 * 60);
	if (isLocalhost()){
		setcookie("motute_name", $member_data['email_address'], time() + TIME_BASE, "/");
		setcookie("motute_secure", $lock, time() + TIME_BASE, "/");
	}
	else if (!(isLocalhost())){
		setcookie("motute_name", $member_data['email_address'], time() + TIME_BASE, "/", "entorm.com");
		setcookie("motute_secure", $lock, time() + TIME_BASE, "/", "entorm.com");
	}
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	$obj->status = "200";
	$obj->message = "success";
	echo(json_encode($obj));
?>