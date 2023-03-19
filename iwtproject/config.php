<?php


	$con=new mysqli("localhost","root","","PlayOn_Music_and_Video_Store");
	
	
	if($con->connect_error)
	{
		die("connection failled".connect_error);
	}
	else
	{
		//echo"<script>alert('connected succesfully')</script>";
	}

?>