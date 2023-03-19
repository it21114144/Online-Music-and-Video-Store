<?php
	session_start();
	
	//destroy session
	session_destroy();
	header("location:Login.html");
	exit();

?>