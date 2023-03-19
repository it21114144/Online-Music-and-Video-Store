<?php



	require'config.php';



	
	$name=$_POST["name"];
	$date=$_POST["dte"];
	$price=$_POST["price"];
	


	$sql="INSERT INTO files(fileID,filename,filetype,releaseDate,UserID,albumID,price)  
	VALUES('','$name','','$date','','','$price')";

	if($con-> query ($sql))
	{
		echo"<script> alert('inserted successfully')</script>";
		
		//after submitting the data come to  the same page  ie additm.html
		header("Location:profile.php");
		
	}
	else
	{
		echo"<script> alert('Error in inserting')</script>";
	}


	$con->close();
	  
?>