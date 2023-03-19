<?php
require 'Login.php';
?>
<html>
	<head>
	<title> PlayOn: File Upload Form </title>
	<link rel = "Stylesheet" href = "styles/stylesw.css">
	<script src ="JS/myScript.js"></script>
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>
	
	<body>
	

	<div class="box">
	<img id="logo" src = "IMAGES\PlayOn.jpeg">
	<ul>
		<li class = "menu"><a href = "artist homepage.php" > | Home </a> </li>
	<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	<br>
	

<br>
	
	<input type = "text" class = "search" placeholder = "Search" >

	<a href = "profile.php" ><input type="button" class="btn1" value="Profile"></a>
	
	<br>
	<br><br>
	<br>
	</div>
	<br>
	<br>
	
	<!-- Site Body-->
	
	<h2 align="center" style="color:#e91e63;"  ><u> File Upload Form </u></h2>
	
	<br>
	
	<!--upload form-->
	
    <form  action="connect.php" method="post"  enctype="multipart/form-data">
		
		<br><br>
	
        <label for="fileName"> File Name: </label> <br>
		<input type="text" id="fileName" name="fileName" required >
		<br><br>
		
		<label for="fileType"> File Type: </label> <br>
		<input type="radio" id="MP3" name="fileType" value="MP3" required> MP3
		<input type="radio" id="MP4" name="fileType" value="MP4" required> MP4
		<br><br>
		
		<label for="releaseDate"> Release Date: </label> <br>
		<input type="date" id="releaseDate" name="releaseDate" required>
		<br><br>
		 
		<label for="UserID"> User ID: </label> <br>
		<input type="text" id="UserID" placeholder="artxxx" name="UserID"  value="<?php
		echo $_SESSION['logged_user'];?>" size="35" readonly>

		<br><br>
		
		<label for="AlbumID"> Album ID [IF AVAILABLE]: </label> <br>
		<input type="text" id="AlbumID" placeholder="axxx" name= "albumID">
		<br><br>
		
		<label for= "price"> Price: </label> <br>
		<input type="text" id="price" placeholder="$ xxx.xx" name="price" required>
		<br><br> 
		
		<label for="mainFile"> choose Your Song/ Movie: </label> <br>
		<label for="instruct">(Insert MP3/MP4 files only...)</label> <br><br>
		<input type="file" id="mainFile" name="mainFile" >
		
		
		<br><br>
		<br><br>		
		<input type="submit" id = "submit" name="submit" value="submit"> <br><br>
		 
    </form> 
	
	

	<br><br><br><br>

	
	 <!-- Site footer -->
	  
	<div class="box"> 

	<footer><br>
		<br><br>
		
	<div class ="txt">


	<h5>Contact us</h5>
	<br>
	<div class="smedia">
		<a href = "#" > <img class="utube" src = "IMAGES\utube.jpg" width= "55px" height = "55px"></a>
		<a href = "#" > <img  class="insta" src = "IMAGES\insta.jpg" width= "55px" height = "55px"></a>
		<a href = "#" > <img  class="twitter" src = "IMAGES\twitter.jpg" width= "55px" height = "55px"></a>
		<a href = "#" > <img   class="facebook" src = "IMAGES\facebook.jpg" width= "55px" height = "55px"></a>


	</div>
	</div>



	<br>
	<br>
	<h6>Copyright © 2021 Play on. All right reserved</h6>
	<br>
	</footer>

</div>

	</body>
	
</html>

 

