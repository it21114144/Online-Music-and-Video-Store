<?php


	require'config.php';

	
		$id=$_POST["id"];	
		$nme=$_POST["title"];
		$typ=$_POST["type"];
		$dte=$_POST["date"];
		
		$price=$_POST["prc"];
	


	$sql="UPDATE files SET fileName='$nme',fileType='$typ',releaseDate='$dte',price='$price'	WHERE fileID='$id'";
	
	
	if($con->query($sql))
	{
		header("location:profile.php");
	}
	else
	{
		echo"<script>alert('update unsuccessful')</script>";
	}
	$con->close();
?>

