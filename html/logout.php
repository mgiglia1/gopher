<?php

	session_start();
	session_unset();
	session_destroy();
	session_start();
	$_SESSION['success']= 1;
	Header('Location:loginpage.php');
?>
