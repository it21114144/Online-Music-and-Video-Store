<?php
	require'config.php';


	$recordID=$_GET['id'];//since it uses the url parameter
	$sql="DELETE FROM images WHERE id='$recordID'";


	if($con->query($sql))
	{
		echo"<script>alert('deleted successfully')</script>";
		header("location:profile.php");
	}
	else
	{
		echo"<script>alert('delete unsuccessful')</script>";
	}


	$con->close();










?>