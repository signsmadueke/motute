<?php
	date_default_timezone_set("Africa/Lagos");
	$e = time();
	include 'connectx.php';
	
	$fname = isset($_POST['fname']) ? mysqli_real_escape_string($database, $_POST['fname']) : '';
	$lname = isset($_POST['lname']) ? mysqli_real_escape_string($database, $_POST['lname']) : '';
	$email = isset($_POST['email']) ? strtolower(mysqli_real_escape_string($database, $_POST['email'])) : '';
	$phone = isset($_POST['phone']) ? mysqli_real_escape_string($database, $_POST['phone']) : '';
	$password = isset($_POST['password']) ? mysqli_real_escape_string($database, $_POST['password']) : '';
	
	if (($fname == "") || ($lname == "") || ($email == "") || ($phone == "") || ($password == "")){
		$obj->status = "301";
		$obj->message = "Your information is incomplete!";
		echo(json_encode($obj));
		die();
	}
	
	$is_email = IsIdentity('members', 'EmailAddress', $email);
	
	if ($is_email){
		$obj->status = "302";
		$obj->message = "".$email." already exists in our database";
		echo(json_encode($obj));
		die();
	}
	
	$is_phone = IsIdentity('members', 'Phone', $phone);
	
	if ($is_phone){
		$obj->status = "303";
		$obj->message = "".$phone." already exists in our database";
		echo(json_encode($obj));
		die();
	}
	
	$password = md5($password);
	
	$queryA = "INSERT INTO members (FirstName, LastName, EmailAddress, Phone, Password, Active, TimeNumber) VALUES (\"$fname\", \"$lname\", \"$email\", \"$phone\", \"$password\", \"0\", \"$e\")";
	if (!($resultA = mysqli_query($database, $queryA))){
		$obj->status = "304";
		$obj->message = "Your information was not saved!";
		echo(json_encode($obj));
		die();
	}
	
	$queryB = "SELECT ID FROM members WHERE EmailAddress = \"$email\"";
	if (!($resultB = mysqli_query($database, $queryB))){
		$obj->status = "304";
		$obj->message = "Operational Error!";
		echo(json_encode($obj));
		die();
	}
	
	$boxB = array();
	while ($row = mysqli_fetch_row($resultB)){
		foreach ($row as $key => $value){
			$boxB[] = $value;
		}
	}
	
	if (count($boxB) != 1){
		$obj->status = "304";
		$obj->message = "Your information was not saved!";
		echo(json_encode($obj));
		die();
	}
	
	$member_data = array();
	$member_data['id'] = $boxB[0];
	$member_data['full_name'] = $fname." ".$lname;
	
	if (!(isLocalhost())){
		$user_id = $member_data['id'];
		$passport = md5("Heaven".$email."TUPAC");
		$recipient = $email;
		$senderEmail = "no-reply@entorm.com";
		$sender = "Motute | Entorm";
		$subject = "Your Account Verification";
		$message = "Dear ".$member_data['full_name'].",<br><br>Thank you for taking this bold step to start learning new skills alongside with other thousands of people who have already registered on Motute.<br>Kindly click on this link Here to confirm your account.<br><br><a href = 'https://motute.entorm.com/api/v0/call/verify.php?x=".$user_id."&y=".$passport."' style = 'text-decoration: none; color: #ffffff; background-color: #008800; display: table-cell; width: 200px; padding-top: 15px; padding-bottom: 15px; text-align: center; font-weight: bold; vertical-align: middle; border: none; outline: 0;'>Verify Account</a><br><br>If the link does not work, copy this url - https://motute.entorm.com/api/v0/call/verify.php?x=".$user_id."&y=".$passport." and paste into your browser address bar manually to complete your registration.";
		$is_sent = MotuteMailv2($subject, $recipient, $senderEmail, $message, $member_data['full_name']);
		
		if ($is_sent != true){
			$obj->status = "305";
			$obj->message = "Your verification link was not sent successfully to your email address - ".$is_sent."";
			echo(json_encode($obj));
			die();
		}
	}
	
	mysqli_commit($database);
	mysqli_rollback($database);
	mysqli_close($database);
	
	
	$obj->status = "200";
	$obj->message = "You have successfully registered at Motute.<br>A verification link has been sent to your inbox.<br>Do verify and login to the platform.";
	echo(json_encode($obj));
?>