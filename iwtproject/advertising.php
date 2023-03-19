	<?php 

require 'login.php';
 ?>

<!DOCTYPE html>
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
			<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	<br>
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
	
	
	
	<br>
	<br>
	<h1 align="center">Tell us about your music</h1>
	<h2 align="center" style="color:#616161;" >We are happy to work with you</h2>
	
	<br><br>
	<div class="step">
	<h2>Steps</h2>
	<ol style="color:#20b2aa">
	<li>Submit the form</li><br><br>
	<li>Our team will contact you within 3-5 working days</li><br><br>
	<li>Make the necessary payments</li><br><br>
	<li>You are good to go</li><br>
	</ol>
	</div>
	
	<center><a href = "test select2.php" ><input type="button" value="Register here"></a></center>

		<br><br>
	<br><br>
	<br><br>
	<div style="color:#b1c0b4" align="center">
	<h2>Why Play on advertising</h2>
</div>
<br><br>

<h3> &nbsp &nbsp Reach your target customers easily &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp WE aim for a 100% tranceparent service &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp We have expert advertizers for you</h3 >




	</div>

	<br>
	<br>
	
	<br>
	<br><br>
	<br><br>
	<br><br>
	<br>
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