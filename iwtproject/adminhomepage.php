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
			<li class = "menu"><a href = "#" > | Download App </a> </li>
	</ul>
	
	
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
	<hr id = "hr1">
	<br> <br> <br> <br>
	<div class = "center">
	<form action = "adminlogin.php" method = "POST">
	<h2 align = "center"> LOGIN </h2> <br> <br> <br>
	<label> User ID : </label> 
	<input type = "text" id = "userid" name = "userid" required> <br> <br> <br>
	<label> Password : </label> 
	<input type = "password" id = "password" name = "password" required> <br> <br> <br>
	<a href = "ResetPassword.html" class = "text2"> <i> Forgotten Your Password ? </i> </a> <br> <br>
	<label>
      <input type="checkbox" name="remember"> Remember Me <br> <br> <br>
    </label>
	<div align = "center">
	<button type = "Submit" id = "btn_login"> LOGIN </button> <br> <br>
	</div>
	</form>
	<hr>
	<br> <br> 
	<div align = "center">
	<p class="text"> <b> No Account Yet ?  <span> <a href="SignUp.html" class="text1"> Sign Up </a> </span> now </b> <p>
	</div>
	</div>
	<br> <br> <br> <
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