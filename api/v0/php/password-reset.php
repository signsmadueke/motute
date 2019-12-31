<?php
	include 'connectx.php';
	
	$user_id = isset($_SESSION['user_id']) ? mysqli_real_escape_string($database, $_SESSION['user_id']) : 0;
	$password = isset($_POST['password']) ? md5(mysqli_real_escape_string($database, $_POST['password'])) : '';
	
	if (($user_id == 0) || ($password == '')){
		$obj->status = '301';
		$obj->message = 'Invalid Access!';
		echo(json_encode($obj));
		die();
	}
	
	$queryA = "UPDATE members SET Password = \"$password\" WHERE ID = \"$user_id\"";
	if (!($resultA = mysqli_query($database, $queryA))){
		$obj->status = '302';
		$obj->message = 'Functional Error!';
		echo(json_encode($obj));
		die();
	}
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	$member_data = TableData('members', $user_id);
	
	if (!(isLocalhost())){
		$recipient = $member_data['email_address'];
		$senderEmail = "no-reply@entorm.com";
		$sender = "Motute | Entorm";
		$subject = "Password Reset Successful!";
		$message = "Dear ".$member_data['full_name']."<br><br>You have successfully changed your password on Motute.";
		$response = MotuteMailv2($subject, $recipient, $senderEmail, $message, $member_data['full_name']);
	}
	
	$obj->status = "200";
	$obj->message = "Password Reset Successful";
	echo(json_encode($obj));
?>