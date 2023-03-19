<?php
require 'Login.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<title> PlayOn: Create Album Form </title>
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

	<a href = "profile.html" ><input type="button" class="btn1" value="Profile"></a>
	
	<br>
	<br><br>
	<br>
	</div>
	<br>
	<br>
	
	<!-- Site Body-->
	
	<h2 align="center" style="color:#e91e63;"  ><u> Create Album Form </u></h2>
	
	<br>
	
	<!--upload form-->
	
	<div class="form">
    <form action="create_album.php" method="post">
	
		
		<br><br>
        <label for="albumName"> Album Name: </label> <br>
		<input type="text" id="albumName" name="albumName" required >
		<br><br>
		
		<label for="AlbumReleaseDate"> Release Date: </label> <br>
		<input type="date" id="AlbumReleaseDate" name="album_releaseDate" required">
		<br><br>
		 
		<label for="UserID"> User ID: </label> <br>
		<input type="text" id="UserID" placeholder="artxxx" name="UserID" value="<?php
		echo $_SESSION['logged_user'];?>" size="35" readonly>
		<br><br>
		
		<label for= "albumPrice"> Album Price: </label> <br>
		<input type="text" id="albumPrice" placeholder="$ xxx.xx" name="albumPrice" required>
		<br><br>
		
		<br><br> 
		
		<input type="submit" id = "create_album" value="Create Album" name="submit"> <br><br>
    </form> 
	</div> 
	
	<br><br><br><br>
	
	</body>
	</html>

	
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