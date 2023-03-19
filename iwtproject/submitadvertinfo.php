<?php



	require'config.php';


	$id=$_POST["id"];
	$title=$_POST["title"];
	$message=$_POST["msg"];
	
	$sql="INSERT INTO advertisment (adID,adTitle,adDesc,UserID,status,ad_Manager)  
	VALUES('','$title','$message','$id','','')";



if($con-> query ($sql))
	{
		echo"<script> alert('inserted successfully')</script>";
		
		//after submitting the data come to  the same page  
		header("Location:test select2.php");
		
	}
	else
	{
		echo"<script> alert('Error in inserting')</script>";
	}


	$con->close();
	  
?>