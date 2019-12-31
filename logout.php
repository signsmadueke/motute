<?php
	require_once('api/v0/php/functions.php');
	
	session_start();
	session_unset();
	session_destroy(); 
	$identity = isset($_COOKIE['motute_name']) ? ($_COOKIE['motute_name']) : '';
	$secure = isset($_COOKIE['motute_secure']) ? ($_COOKIE['motute_name']) : '';
	
	if (isLocalhost()){
		setcookie("motute_name", "", time() - (24 * 60 * 60), "/");
		setcookie("motute_secure", "", time() - (24 * 60 * 60), "/");
	}
	else if (!(isLocalhost())){
		setcookie("motute_name", "", time() - (24 * 60 * 60), "/", "entorm.com");
		setcookie("motute_secure", "", time() - (24 * 60 * 60), "/", "entorm.com");
	}
	header("Location: ".$url_path."");
?>