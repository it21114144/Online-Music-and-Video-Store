<?php



	require'config.php';


	$id=$_POST["id"];
	$alb=$_POST["albumId"];

	
	$sql="INSERT INTO purchase_album (UserID,albumID)  
	VALUES('','$alb')";



if($con-> query ($sql))
	{
		echo"<script> alert('inserted successfully')</script>";
		
		//after submitting the data come to  the same page  
		header("Location:artist homepage.php");
		
	}
	else
	{
		echo"<script> alert('Error in inserting')</script>";
	}


	$con->close();
	  
?>
	<br>

		<p >You have purchased the album: <?php echo $_POST["albumId"]; ?> successfully!</p><br><br>
		<p>Thank you for joining with us</p>
		<br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		
	
	
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