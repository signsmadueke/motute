<?php
	if (!($database = mysqli_connect("localhost", "entrepre_admin", "EntormMotute2019"))){
		echo('Connection Error');
		die();
	}
	if (!(mysqli_select_db($database, "entrepre_motute"))){
		echo('Database Selection Error');
		die();
	}
	mysqli_autocommit($database, FALSE);
?>