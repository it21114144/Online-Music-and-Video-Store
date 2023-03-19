<?php

	require 'config.php';
	
	$uname = $_POST["uname"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$password = $_POST["password"]; 
	$address= $_POST["address"]; 
	$uid = $_POST["uid"];
	
	$sql = "UPDATE userdetails SET UserName = '$uname' , password = '$password' , Address = '$address' , Email = '$email' , Phone_Number = '$mobile'
			WHERE UserID = '$uid'" ;
	
	if ($con -> query($sql))
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Record Updated Successfully!');
				window.location.href='MyProfile.php';
				</script>");
	}
	else
	{
		echo "error".$con->error; //show the error
		echo "<script> alert('Error Updating!!!')</script>";
	}
	
	$con -> close();
	
	$_SESSION['pwd'] = $password ;
	
	

?>
