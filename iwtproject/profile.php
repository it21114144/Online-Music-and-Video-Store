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
	<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > | Purchases</a> </li>
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	<br>
	

<br>
	
	<input type = "text" class = "search" placeholder = "Search" >


	
	<br>
	<br><br>
	<br>
	</div>
		<center><br><br><h1>Your profile</h1></center>
	<br>

	<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">

</form>
<div   class="nat">

<?php 

require 'config.php';
 
// Get image data from database 
$result = $con->query("SELECT image FROM images WHERE  id = '$_SESSION[logged_user]' ORDER BY uploaded DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img class="profilepic"src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
	<?php } ?>
	


	
<?php
	
	
	$sql="SELECT UserName FROM userdetails   WHERE  UserID = '$_SESSION[logged_user]'";
	
	$result=$con->query ($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
		
			
			echo"<h2>".$row["UserName"]."</h2>";
			
		}
	}
?>
	
	<a href="MyProfile.php"><button>Edit Profile</button></a>

	
</div>

	<br><br>
	<br><br>
	<br><br>
	
	<h2 style="color:#e91e63;"><center>Your songs</center></h2>
	
	<button name="btnadd"><a href="demo.html">Add new music</a></button>
	
	

	<table class="tbl" border="2"  width="75%">
	<tr>
		<th >ID</th>
		<th>Song</th>
		<th>Format</th>
		<th >Release date</th>
		<th >albumID</th>
		<th >price</th>
		<th>EDIT</th>
		<th>DELETE</th>
		
	</tr>
	
	
<?php
	
	
	$sql="SELECT * FROM files   WHERE  UserID = '$_SESSION[logged_user]'";
	
	$result=$con->query ($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id=$row["fileID"];
			echo "<tr>";
			echo"<td>".$row["fileID"]."</td>";
			echo"<td>".$row["fileName"]."</td>";
			echo"<td>".$row["fileType"]."</td>";
			echo"<td>".$row["releaseDate"]."</td>";
			echo"<td>".$row["albumID"]."</td>";
			echo"<td>".$row["price"]."</td>";
			echo"<td><button type='submit'><a href='edit.php?id=$id'>EDIT</a></button></td>";
			echo"<td><button type='submit'><a href='deletesong.php?id=$id'>DELETE</a></button></tb>";
			echo "</tr>";
		}
	}
	
	echo "</table>";

	
	
	?>

<br>
<a href = "premium page.php" ><h4>upload more</h4></a>
	<br><br>
	<br><br>
	
<div class="play">
<br><br>
	<br><br>
	<h2>Play on ID</h2>	<?php
		echo "<center><h2>PLAy" .$_SESSION['logged_user']. "</h2></center>";
	?>
	<br>
	
	<br><br>
	<br>
	
</div>

<br>
	
	<br><br>
	<br><br>
	
	
	<div class="play">
<br><br>
	<br><br>
	<h2>Your activity</h2>
	<br>
	
	<br><br>
	<br>
</div
	<br>
	<br>
	
	<br>
	<br><br>
	<a href = "policy.php" ><h4>Privacy policy</h4></a>
	<br><br>
	
	
	
	
	<img align="right"class="qr1" src = "image\qrcode_localhost.png"><br><br><br><br><br><br><br><br><br>
	<h6 align="right">Scan the  QR code to log into your <br>profile using any device anytime</h6>
	<br>
	<br><br>
	


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