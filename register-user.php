<?php
	date_default_timezone_set("Africa/Lagos");
	$e = time();
	include 'api/v0/php/connectx.php';
	
	$name = isset($_GET['name']) ? mysqli_real_escape_string($database, $_GET['name']) : '';
	$email = isset($_GET['email']) ? strtolower(mysqli_real_escape_string($database, $_GET['email'])) : '';
	$phone = isset($_GET['phone']) ? mysqli_real_escape_string($database, $_GET['phone']) : '';
	$password = isset($_GET['password']) ? mysqli_real_escape_string($database, $_GET['password']) : '';
	
	if (($name == "") || ($email == "") || ($phone == "") || ($password == "")){
		include '403.php';
		die();
	}
	
	$is_email = IsIdentity('members', 'EmailAddress', $email);
	
	
	
	if (!($is_email)){
        $queryA = "INSERT INTO members (FirstName, LastName, EmailAddress, Phone, Password, Active, TimeNumber) VALUES (\"$name\", \"\", \"$email\", \"$phone\", \"$password\", \"1\", \"$e\")";
        if (!($resultA = mysqli_query($database, $queryA))){
            include '403.php';
            die();
        }
    }
    else{
        $queryA = "UPDATE members SET Active = \"1\" WHERE EmailAddress = \"$email\"";
        if (!($resultA = mysqli_query($database, $queryA))){
            include '403.php';
            die();
        }
    }
	
    $identity = $email;
    $member_data = array();
    $member_data['email_address'] = $identity;
    $no_days = 10;

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
	
	header('Location: profile.php');
?>