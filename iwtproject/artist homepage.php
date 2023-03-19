	<?php 

require 'login.php';
 ?>

<!DOCTYPE html>
<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>

	<body>
	
	<div class="box">
	<img id="logo" src = "image\PlayOn.jpeg">
	<ul>
	<li class = "menu"><a href = "#" > | Home </a> </li>
			<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	
		 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		 &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
		 &nbsp &nbsp &nbsp &nbsp <a href="addcart.html"><img class="cart"   src = "image\cart2.jpg"></a>
	
	<?php 


// Get image data from database 
$result = $con->query("SELECT image FROM images WHERE  id = '$_SESSION[logged_user]' ORDER BY uploaded DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img  class="profilepic4"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
	<?php } ?>

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

	<br>
	
	<br>
		<a href = "Uploads Page.php" ><input type="button" class="btn" value="Upload"></a>
 <br> <br>
        <br>

		<img src="https://media.giphy.com/media/2vpatYbv5V7kQtlAeP/giphy.gif" alt="funny GIF" width="20%"  height="265">
		<img src="https://media.giphy.com/media/1xV6AKToVeRPm0elL8/giphy.gif" alt="funny GIF" width="20%" height="265">
		<img src="https://media.giphy.com/media/IH0suk9E4zdL2/giphy.gif" alt="funny GIF" width="20%" height="265">
			<img src="https://media.giphy.com/media/3oEjHC6xpraXjgIh32/giphy.gif" alt="funny GIF" width="20%" height="265">

<img src="https://media.giphy.com/media/11DZLZSMfvTiGQ/giphy.gif" alt="funny GIF" width="18.5%" height="265">
</div>
<br>
 
 
  <div>
  <br>
	<br><br>

<br>
	<br><br>
	<br>
</div>
	

	
	
	<center><h1 style="color:#e91e63;">Music</h1></center>
	

	<br><br><h2>Music trending now</h2>
	<a href = "#" > <img class = "logo" src = "image\img1.jpg" ></a>
	<a href = "#" > <img class = "logo" src = "image\cover2.jpg"></a>
	<a href = "#" > <img class = "logo" src = "image\cover3.jpg"></a>
	<a href = "#" > <img class = "logo" src = "image\cover4.jpg"></a>
	<a href = "#" > <img class = "logo" src = "image\cover5.jpg"></a>
		<br><br>
	<br><br>
	<br><br>
	<h2>You  might also like</h2>
	<a href = "#" > <img class = "logo1" src = "image\p1.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p2.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p3.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p4.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p5.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p6.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p7.jpg"></a>
	<a href = "#" > <img class = "logo1" src = "image\p8.jpg"></a>

	
	<br>
	<br>
		

	<br>
	<br><br>
	<center><h1 style="color:#e91e63;">Videos and movies</h1></center>
	<br><br>
	<br><br>
	<center><h2 style="color:#e91e63;">Popular right now</h2></center><br>
	<center><img src="https://media.giphy.com/media/DPpqCixpK0DVDx77lP/giphy.gif" alt="funny GIF" width="20%" height="265">
	<br>
	<h4>Hundreds of cash-strapped contestants accept an invitation to compete in children's games for a tempting prize, but the stakes are deadly.
<br>Original language: Korean
<br>Created by: Hwang Dong-hyuk
<br>Original release: September 17, 2021
<br>Composer: Jung Jae-il
<br>Hangul: 오징어 게임</h4></center>
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