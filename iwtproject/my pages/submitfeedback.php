<?php

	require 'config.php';
	
	
	
	
	$fid = $_POST["txtfd"];
	$uid = $_POST["txtuid"];
	$Star = $_POST["txtstar"];
	$des = $_POST["txtnamedes"];
	$mid = $_POST["txtmid"];
	
	
	$sql = "INSERT INTO feedback (feedbackID , fbDesc , rating , UserID , fb_Manager) VALUES('','$des', '$Star','$uid','mid')";
	
	if($con -> query ($sql))
	{
		header("Location:rate.html");
		echo "<script> alert ('successfully') </script>";
		
	}

    else
	{
		echo "Error: " . $sql . "<br> <br>" . $con->error;

	}
	$con-> close();
	
	
?>