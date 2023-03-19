<?php
	

if(isset($_POST['save'])&& $_POST['save']=="upload")
{
	$dir='uploads/';
	$audio_path=$dir.basename($_FILES['audio']['name']);
	
	if(move_uploaded_file($_FILES['audio']['tmp_name'],$audio_path))
	{
		echo'uploaded successfully';
		
		saveAudio($audio_path);
		displayaudio();
	}
	
}
function displayaudio()
{
	$con=new mysqli("localhost","root","","PlayOn_Music_and_Video_Store");
	
	
	if($con->connect_error)
	{
		die("connection failled".connect_error);
	}
	else
	{
		echo"<script>alert('connected succesfully')</script>";
	}
	$sql="select * from files";
	$r=mysqli_query($con,$sql);
	
	while($row=mysqli_fetch_array($r))
	{
		echo '<a href="play.php?name='.$row['songfile'].'">'.$row['songfile'].'</a>';
		echo"<br/>";
	}
	$con->close();
}
function saveAudio($file)
{
	
	$con=new mysqli("localhost","root","","PlayOn_Music_and_Video_Store");
	
	
	if($con->connect_error)
	{
		die("connection failled".connect_error);
	}
	else
	{
		echo"<script>alert('connected succesfully')</script>";
	}


	$sql="INSERT INTO files(fileID,filename,filetype,releaseDate,UserID,albumID,price,songfile)  
	VALUES('','','','','','','','$file')";
	
	mysqli_query($con,$sql);
	
	if(mysqli_affected_rows($con)>0)
	{
		echo"audio file path saved in database";
	}
	
	$con->close();



}


?>