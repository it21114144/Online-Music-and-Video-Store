<?php
	session_start();
	require 'config.php';
?>

<!DOCTYPE html>
<html>
<style>
h2 {
color:black;
}
</style>
	<head>
	
	<title> PlayOn Music and Video Store </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "Stylesheet" href = "Style/style1.css">
	<script src = "JS/myscripts.js"> </script>
    </head>
	
	<body>
	<hr id = "hr1">
	<div class = "head">
	<img src = "Image\PlayOn.jpeg" class = "logo1">
	<input type = "text2" class = "search" placeholder = "Search" align = "center">
	<style>	
	.fa-search{
		padding:10px 15px;
		position:absolute;	
		right:100px;
		top:96px;
	}
	</style>
	<i class="fa fa-search"></i>
	<br> <br> <br>
	<div class="dropdown">
	  <a href = "#">Home</a>
	  <div class="dropdown-content">
	  <p class = "home1"> <b> Home </b> <img class = "homelogo" src = "Image\home.jpg" align = "right"> </p>
		<a href="#">PlayOn Videos</a>
		<a href = ""> PlayOn Music </a> 
		<a href="#">Appstore for Android</a>
		<a href="#">Your Uploads</a>
		<a href = "#"> Movies and Musics </a>
		<a href = "#"> New Releases </a> 
		<hr>
		<a href = "MyProfile.html"> My Profile </a> 
		<a href = "LogOut.php"> Log Out </a> 
	  </div>
	</div>
	<a href = "advertising.php" > | Advertisement</a>

	<a href = "#" > | Purchases </a> 
	<a href = "	Download App.html" > | Download App </a> 
		<a href = "feedback.php" > | Feedback </a>
	<br> <br>
	</div>
	<hr id = "hr1">
	<br> <br> <br> 
	<div class = "profile">
	<h2 align = "center"> <u> My Profile </u> </h2> <br>
	<center>
	<img src = "Image/profile.jpg" style = "border-radius:50%;"> 
	<br>	
	
	<div id="details">
		<?php
		
			$sql = "SELECT UserName , UserID , first_Name , last_name , Address , Date_Of_Birth , Email , Phone_Number FROM userdetails WHERE UserID = '$_SESSION[logged_user]' and password = '$_SESSION[pwd]'";		
				
			$result =$con->query($sql);	

			if($result -> num_rows > 0 )
					{
						while($row = $result -> fetch_assoc())
						{
						 
							$uid = $row["UserID"];

								echo "<h2 style = 'color:black;'>" , $row["UserName"] , "</h2>";
								echo "<b style = 'float:left; color:black;'> User ID : </b> " , "<b style = 'float:right; color:black;'>", $row["UserID"]. "</b><br><br>";
								echo "<b style = 'float:left; color:black;'> First Name :</b> " , "<b style = 'float:right; color:black;'>", $row["first_Name"]. "</b><br><br>";
								echo "<b style = 'float:left; color:black;'> Last Name : </b> ", "<b style = 'float:right; color:black;'>", $row["last_name"]. "</b><br><br>";
								echo "<b style = 'float:left; color:black;'> Date Of Birth :</b> " , "<b style = 'float:right; color:black;'>" , $row["Date_Of_Birth"]. "</b><br><br>";
								echo "<b style = 'float:left; color:black;'> E-mail :</b> ", "<b style = 'float:right; color:black;'>", $row["Email"]. "</b><br><br>";
								echo "<b style = 'float:left; color:black;'> Mobile Number :</b> ", "<b style = 'float:right; color:black;'>", $row["Phone_Number"]. "</b><br><br><br>";
							
							echo "<button id='editbtn'style = 'background-color:#04AA6D; color: white;padding: 8px 10px; border:none;width:40%;'><a href='EditProfile.php?UserID=$uid'> Edit Profile</a></button>";
							
						}
					}
					else
					{
						echo "0 Results"; 
					}	
				
		?>
	</div>
	<style>
	#details{
		font-size:18px;
	}
	</style>
	<br>
		<?php 
				
			$sql = "SELECT UserID
					From userdetails where UserID='$_SESSION[logged_user]' and password='$_SESSION[pwd]'";
						
			$result =$con->query($sql);	

			if($result -> num_rows > 0 )
			{
				while($row = $result -> fetch_assoc())
				{
					$uid = $row["UserID"]; 
	
				}
			}
			else
			{
				echo "0 Results"; 
			}
				
			echo "<button id='deletebtn' style = 'background-color:#04AA6D; color: white;padding: 8px 10px; border:none;width:40%;'><a href='DeleteUser.php?UserID=$uid'> Delete Account </a></button>";
			
			$con->close();
				
		?>	
	<br> <br> 
	</center>
	</div>
	<br> <br> <br> <br>
	<footer>
	<br> <br>
	<div class ="contact">
	<h3> Contact Us !</h3>
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-youtube"></a>
	<a href="#" class="fa fa-instagram"></a>
	<br>
	</div>
	<h4> Copyright &copy; 2021 Play On. All right reserved </h4> <br>
	</footer>
	</body>
	
	<style>
	.profile{
		background-color:#d3d3d3;
		position: relative;
		width: 30%;
		left: 25%;
		padding-top: 50px;
		padding-right: 100px;
		padding-bottom: 50px;
		padding-left: 100px;
	}
	</style>
	
</html>