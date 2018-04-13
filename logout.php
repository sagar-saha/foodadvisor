<?php
	session_start();
	
	unset($_SESSION['SESS_MEMBER_ID']);
	session_destroy();
	
	header("Location: login.php");
	exit();
?>