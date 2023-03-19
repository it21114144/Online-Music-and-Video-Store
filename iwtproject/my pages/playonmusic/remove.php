<?php

	include 'config.php';
	
	$recordId = $_GET['UserID'];
	
	$sql = "DELETE FROM album WHERE UserID = '$userId'" ;
	
	if($con -> query($sql))
	{
		echo ("<script LANGUAGE='JavaScript'>
				window.alert('Record Delete Successfully!');
				window.location.href='add.php';
				</script>");
	}
	else
	{
		echo "<script>alert('Error Deleting')</script>";
	}
	
	$con -> close();

?>