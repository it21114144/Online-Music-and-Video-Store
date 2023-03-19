<?php

	require 'config.php';
	
	
	
	
	
	
	$Star = $_POST["txtstar"];
	$des = $_POST["txtnamedes"];
	
	$mail= $_POST["txtmail"];
	$name= $_POST["txtname"];
	$id= $_POST["txtid"];
	
	$sql = "INSERT INTO feedback ( fbDesc , rating , Email, Name, FeedbackID  ) VALUES('$des', '$Star','$mail','$name','')";
	
	if($con -> query ($sql))
	{
		header("Location: feedback.php");
		echo "<script> alert ('successfully') </script>";
		
	}

    else
	{
		echo "Error: " . $sql . "<br> <br>" . $con->error;
	}
	$con-> close();
?>