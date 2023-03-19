<?php

	include 'config.php';
	
	$recordId = $_GET['UserID'];
	
	$sql = "DELETE FROM userdetails WHERE UserID = '$recordId'" ;
	
	if($con -> query($sql))
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Record Delete Successfully!');
				window.location.href='SignUp.html';
				</script>");
	}
	else
	{
		echo "<script>alert('Error Deleting')</script>";
	}
	
	$con -> close();

?>