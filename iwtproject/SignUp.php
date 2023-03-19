<?php

	require 'config.php';
	
	//store data in separate variables
	$uName = $_POST["uname"];
	$fName = $_POST["fname"];
	$lName = $_POST["lname"];
	$dob = $_POST["dob"];
	$mobile = $_POST["mobile"];
	$utype = $_POST["type"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$password = $_POST["password"];
	
	$code = rand(1,999);
	if($utype == "customer")
	{
		$userid = "cu" .$code;
	}
	else if($utype == "admin")
	{
		$userid = "ad" .$code;
	}
	else
	{
		$userid = "art" .$code;
	}
	//insert data
	$sql = "INSERT INTO userdetails(UserName, UserID, first_Name, last_name, Address, Date_Of_Birth, UType, password , Email, Phone_Number) 
	VALUES('$uName', '$userid', '$fName', '$lName', '$address', '$dob', '$utype', '$password' , '$email' , '$mobile');";
	
	//execute insert query
	if ($con->query($sql)) 
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Your have Successfully Signed Up! Welcome To PlayOn');
			window.alert('New records created Successfully');
			window.location.href='Login.html';
			</script>");
	}
	
	else
	{
		echo "Error: " . $sql . "<br>" . $con->error;
	}
	
	//close the cnnection
	$con->close();

?>