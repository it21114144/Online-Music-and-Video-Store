<?php

				
		$target_dir = "profilepic/";
		$target_file = $target_dir . basename($_FILES["fd"]["name"]);
		if(file_exists($target_file)==1)
		{
			echo "file already exists";
		}
		else
		{
			if(isset($_FILES["fd"])) 
			{
				if (move_uploaded_file($_FILES["fd"]["tmp_name"],$target_file))
				{
				echo "The file ". basename( $_FILES["fd"]["name"]). " is uploaded.";
				}
				else {
				echo "Error while uploading your file.";
				}
			}
			else
				{
				echo "File not available";
				}
		}	//-----------------
?>