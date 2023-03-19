<?php


	require'config.php';

	
		$id=$_POST["id"];	
		$nme=$_POST["title"];
		$typ=$_POST["status"];
		$dte=$_POST["admid"];
		
	
	


	$sql="UPDATE advertisment SET status='$typ',ad_Manager='$dte'	WHERE adID='$id'";
	
	
	if($con->query($sql))
	{
		header("location:avertadmin.php");
	}
	else
	{
		echo"<script>alert('update unsuccessful')</script>";
	}
	$con->close();
?>

