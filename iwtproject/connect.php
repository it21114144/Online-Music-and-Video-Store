<?php

require 'config.php';
	if (isset($_post['submit']))
	{	
		$fileName = $_POST['fileName'];
		$fileType = $_POST['fileType'];
		$releaseDate = $_POST['releaseDate'];
		$UserID = $_POST['UserID'];
		$albumID = $_POST['albumID'];
		$price = $_POST['price'];
		 
		#to insert the file
		#temporary file name to store file
		
		$tname = $_FILES["files"]["tmp_name"];
		
		#upload directory path
		 
		$uploads_dir = '/FILES';
		
		#to move the file to specific location
		
		move_uploaded_file($tname, $uploads_dir.'/'.$mainFile);
		
		
		#insert into database
		 
		$sql = "insert into 'files' (fileName, fileType, releaseDate, UserID, albumID, price, mainFile)
		values ('$fileName', '$fileType','$releaseDate','$UserID','$albumID','$price',$mainFile)";
		
		#upload status
		
		if(mysqli_query($conn,$sql))
		{
			echo "File Uploaded Successfully!!!";
		}
		else
		{
			echo "ERROR!!! Please Try Again";
		}
	}
		
?>