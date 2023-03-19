<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
	label , h2 {
	color:black;
}
</style>
	<title> PlayOn Music and Video Store </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "Stylesheet" href = "Style/style1.css">
	<script src = "JS/myscript1.js"> </script>
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
	  <a href = "artist homepage.php">Home</a>
	  <div class="dropdown-content">
	  <p class = "home1"> <b> Home </b> <img class = "homelogo" src = "Image\home.jpg" align = "right"> </p>
		<a href="#">PlayOn Videos</a>
		<a href = "#"> PlayOn Music </a> 
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
	<a href = "Download App.html" > | Download App </a> 
	<a href = "feedback.php" > | feedback </a>
	<br> <br>
	</div>
	<hr id = "hr1">
	<br> <br> <br> 
	<center>
	<div class = "profile">
	<?php 
		
		session_start();

		$sql = "SELECT * FROM userdetails Where UserID = '$_SESSION[logged_user]' and password = '$_SESSION[pwd]'";
			
		$result = $con->query($sql);
			
		if($result -> num_rows > 0)
		{	
			while($row = $result -> fetch_assoc())
			{
				$UName = $row["UserName"];
				$FName = $row["first_Name"];
				$Lname = $row["last_name"];
				$DOB = $row["Date_Of_Birth"];
				$Mobile = $row["Phone_Number"];
				$Email = $row["Email"];
				$Pwd = $row["password"];
				$userId = $row["UserID"];
			}
		}
		else
		{
			echo "0 Records" ;
		}
		
	?>
	<form action = "UpdateEditProfile.php" method = "POST" onsubmit = "return checkPassword()">
	<h2 align = "center"> <u> Edit My Profile </u> </h2> 
		<img src = "Image/login.jpg"> <br>
		<br><br>
		<label>User ID</label>
		<input class="editInput" type="text" name="uid" value="<?php echo $userId ?>" readonly><br><br>
			
		<label>First Name</label>
		<input class="editInput" type="text" name="fname" value="<?php echo $FName ?>" readonly><br><br>
			
		<label>Last Name</label>
		<input class="editInput" type="text" name="lname" value="<?php echo $Lname ?>" readonly><br><br>
		
		<label>User Name</label>
		<input class="editInput" type="text" name="uname" value="<?php echo $UName ?>"><br><br>
			
		<label>Date of Birth</label>
		<input class="editInput" type="date" name="dob" value="<?php echo $DOB ?>" readonly ><br><br><br>
		
		<label> Address </label>
		<textarea id = "address" name = "address" rows = "5" cols = "50" value = "<?php echo $Address ?>"> </textarea> <br><br><br><br><br><br>
		
		<label>Mobile Number</label>
		<input class="editInput" type="text" name="mobile" value="<?php echo $Mobile ?>"><br><br><br>
		
		<label>Email</label>
		<input class="editInput" type="text" name="email"  pattern="[a-z0-9._%+-]+@+[a-z0-9]+\.[a-z0-9]{2,3}" value="<?php echo $Email ?>" ><br><br> 
			
		<label>Password</label>
		<input class="editInput" type="password" id="npwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title=""  value="<?php echo $Pwd ?>" > <br>
		&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
			
		<label>Re-enter Password</label>
		<input class="editInput" type="password" name="password" id="cnfrmpwd" value="<?php echo $Pwd ?>" ><br><br>
		<input type="hidden" name="uid" value=<?php echo $userId ?>>
		<br><br><br>	
		
		<input type="submit" id="btnsubmit" value="UPDATE">
	
		<input type="button" id="btncancel" value = "CANCEL" onclick = "if(confirm('Are you Sure you wish to Cancel ?'))history.back();"> </form> 
		<style> label{ font-size:20px; font-weight:bold; float:left; } input[type = "submit"] ,[type = "button"]{ padding: 8px 10px; } </style>
	</div>
	</center>
	<style>
	.profile{
		background-color:#d3d3d3;
		width:50%;
		padding-top: 50px;
		padding-right: 100px;
		padding-bottom: 50px;
		padding-left: 50px;
	}
	</style>
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
	
</html>