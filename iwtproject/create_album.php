<?php

	require 'config.php';

		$albumName = $_POST['albumName'];
		$album_releaseDate = $_POST['album_releaseDate'];
		$UserID = $_POST['UserID'];
		$albumPrice = $_POST['albumPrice'];
		
		 
		
		
		#insert into database
		 
		$sql = "insert into album (albumID,albumName, album_releaseDate, UserID, albumPrice)
		values ('', '$albumName','$album_releaseDate','$UserID','$albumPrice')";
		
		#upload status
		
		if($con-> query ($sql))
	{
		echo"<script> alert('inserted successfully')</script>";
		
		//after submitting the data come to  the same page  ie additm.html
		header("Location:Uploads Page.html");
		
	}
	else
	{
		echo"<script> alert('Error in inserting')</script>";
	}


	$con->close();
	  
		
?>