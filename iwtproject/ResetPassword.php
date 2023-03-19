<?php

	require 'config.php';
		
	$Uname = $_POST["uname"];
	$Email = $_POST["email"];
	$password = $_POST["newpwd"];
	$confirmpassword = $_POST["cnewpwd"];
	
	if($password == $confirmpassword)
	{
		echo "<script> alert('Password Reset Successfully')</script>" ;
		
		$sql = "UPDATE userdetails 
				SET password = '$password'						
				WHERE UserName= '$Uname' and Email = '$Email'" ;
					
		if ($con -> query($sql))
		{

			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Record updated Successfully...');
			window.location.href='Login.html';
			</script>");
		}
		else
		{
			echo "error".$con->error; //show the error
			echo ("alert('Invalid User Name or Email!' .<br>. 'Error updating record...')");
		}
	}	
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Password Mismatch');
			window.location.href='ResetPassword.html';
			</script>");
	}					
	
	$con -> close();

?>