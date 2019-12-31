<?php
	
	if (!session_id()) {
		session_start();
	}
	
	$control_key = '0';
	$url_path = (isLocalhost()) ? '/academy/' : '/';
	require 'php-mailer/PHPMailerAutoload.php';
	
	function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
		return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
	}
	function TableData($table, $id){
		include 'connect.php';
		$response = array();
		
		$queryA = "";
		if ($table == "members"){
			$queryA = "SELECT ID, FirstName, LastName, EmailAddress, Phone, Password, Active, TimeNumber FROM ".$table." WHERE (ID = \"$id\" OR EmailAddress = \"$id\" OR Phone = \"$id\")";
		}
		if (!($resultA = mysqli_query($database, $queryA))){
			echo('Selection Error'); die();
		}
		$boxA = array();
		while ($row = mysqli_fetch_row($resultA)){
			foreach ($row as $key => $value){
				$boxA[] = $value;
			}
		}
		if ((count($boxA) == 8) && ($table == "members")){
			$response['id'] = $boxA[0];
			$response['first_name'] = $boxA[1];
			$response['last_name'] = $boxA[2];
			$response['email_address'] = $boxA[3];
			$response['phone'] = $boxA[4];
			$response['password'] = $boxA[5];
			$response['active'] = $boxA[6];
			$response['time_number'] = $boxA[7];
			$response['full_name'] = $response['first_name']." ".$response['last_name'];
		}
		
		mysqli_commit($database);
		mysqli_rollback($database);
		mysqli_close($database);
		
		return $response;
	}
	function IsIdentity($table, $col, $val){
		include 'connect.php';
		$response = false;
		
		$queryA = "SELECT ID FROM ".$table." WHERE ".$col." = \"$val\" LIMIT 1";
		if (!($resultA = mysqli_query($database, $queryA))){
			echo("Selection Error"); die();
		}
		$boxA = array();
		while ($row = mysqli_fetch_row($resultA)){
			foreach ($row as $key => $value){
				$boxA[] = $value;
			}
		}
		
		if (count($boxA) != 0){
			$response = true;
		}
		
		mysqli_commit($database);
		mysqli_rollback($database);
		mysqli_close($database);
		
		return $response;
	}
	function MotuteMailv2($title, $recipient, $senderEmail, $message, $fullname){
		$subject = $title;
		$headers = "From: " . strip_tags($senderEmail) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($senderEmail) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = "".$message."<br><br><br>Regards,<br><a href = 'http://motute.entorm.com/' style = 'text-decoration: none;'>Motute, Entorm Inc</a><br><br><br><img src = 'https://motute.entorm.com/logos/1.png' width = '230' height = '230' alt = 'logo'/><br>Our mailing address is: contact@entorm.com<br>Copyright &copy; ".date("Y")." Entorm, All rights reserved.<br><br><b>Address:</b><br>Suite 3F4, Katukoma Plaze, Off Oladipo Diya Way, Gudu, Abuja, Federal Capital Territory.";
		
		$email = $recipient;
		$s = 1;
		
		$email_accounts = array('contact@entorm.com', 'no-reply@entorm.com');
		$email_passwords = array('MotuteEntorm2019', 'MotuteEntorm2019');
		
		if (in_array(strtolower(trim($senderEmail)), $email_accounts)){
			$s = array_search(strtolower(trim($senderEmail)), $email_accounts);
		}



		$mail = new PHPMailer;
		
		$mail->isSMTP();                              // Tell PHPMailer to use SMTP    
		
		$mail->Host = 'mail.entorm.com';				  // Specify main and backup server
		$mail->SMTPAuth = true;                       // Enable SMTP authentication
		$mail->Username = $email_accounts[$s];             	  // SMTP username
		$mail->Password = $email_passwords[$s];                   // SMTP password
		$mail->SMTPSecure = 'ssl';                    // Enable encryption, 'ssl' also accepted
		$mail->Port = 465;                             // Set the SMTP port number - likely to be 25, 465 or 587

		
		$mail->setFrom($email_accounts[$s], 'entorm.com'); //**Write here sender email. For example, emails will be sent to you from your website, so write email of your website (if you don't have it, write any email, which you want) and the name of your website. Example ('email@your-website.com', 'your-website.com')) Send from a fixed, valid address in your own domain, perhaps one that allows you to easily identify that it originated on your contact form**
		
		//Send the message to yourself, or whoever should receive contact for submissions
		
		$mail->addAddress($email); //**WRITE HERE RECIPIENT EMAIL ADDRESS (AT THIS ADDRESS EMAILS WILL BE COME)**
		
		//Put the submitter's address in a reply-to header
		//This will fail if the address provided is invalid,
		//in which case we should ignore the whole request
		
		if ($mail->addReplyTo($email_accounts[$s], 'Motute')) {
			$mail->Subject = $title;
			//Keep it simple - don't use HTML
			$mail->isHTML(true);
			$mail->CharSet = 'UTF-8';
			//Build a simple message body
			$mail->Body = $message;
			//Send the message, check for errors
			if(!$mail->Send()) {
			  //$arrResult = array ('response'=>'error');
			  return false;
			}

			//$arrResult = array ('response'=>'success');
	
			//echo json_encode($arrResult);
		  
		}
		else {
		
			//$arrResult = array ('response'=>'error');
			//echo json_encode($arrResult);
			return false;

		}
		return true;
	}
	function MotuteMailv4($title, $recipient, $senderEmail, $message, $fullname){
		$headers = "From: " . strip_tags($senderEmail) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($senderEmail) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = "".$message."<br><br><br>Regards,<br><a href = 'http://motute.entorm.com/' style = 'text-decoration: none;'>Motute, Entorm Inc</a><br><br><br><img src = 'https://motute.entorm.com/logos/1.png' width = '230' height = '230' alt = 'logo'/><br>Our mailing address is: contact@entorm.com<br>Copyright &copy; ".date("Y")." Entorm, All rights reserved.<br><br><b>Address:</b><br>Suite 3F4, Katukoma Plaze, Off Oladipo Diya Way, Gudu, Abuja, Federal Capital Territory.";
		
		$mailBody = "<br>$message";
		$mailSend = mail($recipient, $title, $mailBody, $headers);
		
		return $mailSend;
	}
	function MotuteMailv3($title, $recipient, $senderEmail, $message, $fullname){
		$message = "".$message."<br><br><br>Regards,<br><a href = 'http://motute.entorm.com/' style = 'text-decoration: none;'>Motute, Entorm Inc</a><br><br><br><img src = 'https://motute.entorm.com/logos/1.png' width = '230' height = '230' alt = 'logo'/><br>Our mailing address is: contact@entorm.com<br>Copyright &copy; ".date("Y")." Entorm, All rights reserved.<br><br><b>Address:</b><br>Suite 3F4, Katukoma Plaze, Off Oladipo Diya Way, Gudu, Abuja, Federal Capital Territory.";
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{  \n   \"sender\":{  \n      \"name\":\"Motute\",\n      \"email\":\"".$senderEmail."\"\n   },\n   \"to\":[  \n      {  \n         \"email\":\"".$recipient."\",\n         \"name\":\"".$fullname."\"\n      }\n   ],\n   \"subject\":\"".$title." | Motute\",\n   \"htmlContent\":\"".$message."\",\n   \"headers\":{  \n      \"X-Mailin-custom\":\"\",\n      \"charset\":\"iso-8859-1\"\n   }\n}");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Api-Key: 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';
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			//echo 'Error:' . curl_error($ch);
			return false;
		}
		curl_close($ch);
		return true;
	}
?>