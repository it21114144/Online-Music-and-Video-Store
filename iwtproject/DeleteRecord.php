<?php

	require 'config.php';

	$recordId =$_GET ['id'];
	
	$sql = "DELETE FROM feedback WHERE FeedbackID = '$recordId'";
	
	
	if ($con -> query ($sql))
		
		{
			echo "<script> alert ('Deleted successfully!') </script>" ;
				header ("Location: admin.php");
		}

else
	{
		echo "<script> alert ('Deleted Unsuccessful')</script>" ;
	}

	$con -> close();

?>