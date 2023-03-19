<?php
  require 'config.php';
      if($_SERVER["REQUEST_METHOD"] == "POST") 
		  
	  $UserId=$_POST['UserId'];
	  $albumId=$_POST['albumId'];
	  
	  //insert into database
	  
	  $sql="insert into purchase_album(UserId,albumId)
	  values('$UserId','$albumId');"
	  
	  if($con->query($sql))
	  {
		  echo"<script>alert('inserted successfully')</script>";
		  
		  header("Location:play.php");
	  }
	  else
	  {
		  echo("<script>window.alert('Incorrect data');
		  window.location.href='purchase.html';
		  </script>");
		  
	  }
	  $con->close();
	  ?>
	  