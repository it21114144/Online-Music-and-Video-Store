
	<?php 

require 'login.php';
 ?>

<!DOCTYPE html>
<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/stylesf.css">
	<link href="purchase.php">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>
	
	<body>
	
	<div class="box">
	<img id="logo" src = "image\PlayOn.jpeg">
	<ul>
<li class = "menu"><a href = "artist homepage.php" > | Home </a> </li>
	<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	<br>

<br>
	<br>
	<br><br>
	
	<input type = "text" class = "search" placeholder = "Search" >


	
	<br>
	<br>
	<br>
	
		<a href = "profile.php" ><input type="button" class="btn1" value="Profile"></a>
	<br>
	<br><br>
	<br>
	</div>
	<body>
	<h3>Purchase</h3>
	


<center> <form method = "POST" action = "playcart.php" onsubmit = "submit">
 <div class = "form">
  <label for="userID">UserID:</label><br>
  <input type="text" id="UserID" name="UserId" value="<?php
		echo $_SESSION['logged_user'];?>" size="35" readonly>
	<br>
  <br>
  <label for="AlbumID">AlbumID:</label><br>
  <input type="text" id="AlbumID" name="AlbumId" ><br>
  <br>
  <p>Choose the payment method:</p>
  <label>
  <input type="radio" name="test" value="small" checked>
  <img src="image/visa.jpg"style="width:50px;height:50px;">
</label><br>
  <label>
  <input type="radio" name="test" value="small" checked>
  <img src="image/master.jpg" style="width:50px;height:50px;">
</label><br>
<label>
  <input type="radio" name="test" value="small" checked>
  <img src="image/paypal.jpg"style="width:50px;height:50px;">
</label><br>

  <label for="cardnumber">Card Number:</label><br>
  <input type="text" id="cardnumber" name="fname" ><br>
  <br>
  
  <form action="/action_page.php">
  <label for="expirydate">Expiry Date:</label><br>
  <input type="date" id="expirydate" name="expirydate"><br>
  <br>
  
   <label for="cvv">cvv:</label><br>
    <input type="cvv" id="cvv" name="cvv">
	<div id="message">
	<h5>(A three digit number)</h5><br>
	</div> 
	 <label for="name">Name On Card:</label><br>
    <input type="name" id="name" name="name"><br>
	<br>
	<label for="email">E-mail:</label><br>
	<input type="email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
	<br>
	<input type="submit" value="Submit" >
	
	
</div>
	
</form></center>





	  <!-- Site footer -->
<footer>
<br>
	<br><br>
	<br><br>
	<br><br>

	<br>
<div class ="txt">


<h5>Contact us</h5>
<br>
<div class="smedia">
<a href = "#" > <img class="utube" src = "image\utube.jpg"></a>
<a href = "#" > <img  class="insta" src = "image\insta.jpg"></a>
<a href = "#" > <img  class="twitter" src = "image\twitter.jpg"></a>
<a href = "#" > <img   class="facebook" src = "image\facebook.jpg"></a>


</div>
</div>



<br>
<br>
<h6>Copyright © 2021 Play on. All right reserved</h6>
<br>
</footer>
	</body>
	
</html>