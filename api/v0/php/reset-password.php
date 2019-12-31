<?php
	include 'connectx.php';
	
	$identity = isset($_POST['identity']) ? mysqli_real_escape_string($database, $_POST['identity']) : '';
	
	if ($identity == ''){
		$obj->status = "301";
		$obj->message = "You have to enter your email address or phone number";
		echo(json_encode($obj));
		die();
	}
	
	$member_data = TableData('members', $identity);
	if (count($member_data) == 0){
		$obj->status = "302";
		$obj->message = "Invalid Access!";
		echo(json_encode($obj));
		die();
	}
	
	
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	$obj->status = "200";
	$obj->message = "We have sent a confirmation email to your registered email address. Please follow the instructions in the email to continue.<br><br>If you haven't received the email, please try the following:<ul><li>Check your spam or junk mail folders.</li><li>Add Motute to your email address whitelist.</li><li>Make sure your email client is functioning normally.</li>";
	echo(json_encode($obj));
	
	if (!(isLocalhost())){
		$passport = "BULLY".$member_data['email_address']."EMINEM";
		$passport = md5($passport);
		$recipient = $member_data['email_address'];
		$senderEmail = "no-reply@entorm.com";
		$sender = "Motute | Entorm";
		$subject = "Reset Your Password";
		$message = "Dear ".$member_data['full_name'].",<br><br>You recently requested for a password reset. Please follow the <a href = 'https://motute.entorm.com/password-reset.php?x=".$member_data['id']."&y=".$passport."' style = 'text-decoration: none;'><b>LINK HERE</b></a> to reset your password.<br><br>If you did not make this request, please ignore this email.<br><br><a href = 'https://motute.entorm.com/password-reset.php?x=".$member_data['id']."&y=".$passport."' style = 'text-decoration: none; color: #ffffff; background-color: #008800; display: block; width: 200px; padding-top: 15px; padding-bottom: 15px; text-align: center; vertical-align: middle; font-weight: bold; border: none; outline: 0;'>Reset Password</a><br><br>If you can't confirm by clicking the Link above, please copy the address below to the browser address bar to confirm.<br>https://motute.entorm.com/password-reset.php?x=".$member_data['id']."&y=".$passport."";
		$response = MotuteMailv2($subject, $recipient, $senderEmail, $message, $member_data['full_name']);
	}
	
?>