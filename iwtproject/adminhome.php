<?php
require 'Login.php';
?>
<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/styles.css">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>
	
	<body>
	
	<div class="box">
	<img id="logo" src = "image\PlayOn.jpeg">
	<ul>
	<li class = "menu"><a href = "artist homepage.php" > | Home </a> </li>
		<li class = "menu"><a href = "avertadmin.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "#" > | Download App </a> </li>
			<li class = "menu"><a href = "admin.php" > | Feedback </a> </li>
	</ul>
	<br>
	

<br>
	
	<input type = "text" class = "search" placeholder = "Search" >


	
	<br>
	<br><br>
	<br>
	</div>
		
	<br>

	<?php
	
	
	$sql="SELECT UserName FROM userdetails   WHERE  UserID = '$_SESSION[logged_user]'";
	
	$result=$con->query ($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{

			echo"<center><h1>Hello &nbsp"."&nbsp".$row["UserName"]."</h1></center>";
					
			$theDate = date("H"); 
			if($theDate < 12) 
			echo "<center><h1>Good morning to you</h1></center>"; 
			else if($theDate < 18) 
			echo "<center><h1>Good afternoon to you</h1></center>"; 
			else 
			echo "<center><h1>Good evening to you</h1></center>"; 
						
		}
	}
?>



	<br>	<br><br><br>	<br><br>
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