<?php


require 'config.php';


?>



<!DOCTYPE html>
<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/styles.css">

  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src ="js/myScript.js"></script>
  
</head>
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>
	<meta charset="UTF-8">
	</head>
	
	<body>
	
	<div class="box">
	<img id="logo" src = "image\PlayOn.jpeg">
	<ul> 
<li class = "menu"><a href = "artist homepage.php" > | Home </a> </li>
			<li class = "menu"><a href = "advertising.php" > |Advertise</a> </li> 
			<li class = "menu"><a href = "#" > |purchases</a> </li>
			
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback</a> </li>
	</ul>
	<br>
	

<br>
	
	<input type = "text" class = "search" placeholder = "Search" >


	

	
	<br>
	<br><br>
	<br>
	</div>
	<br>
	<br>
	
	<?php
	
	
		$recordId = $_GET ["id"];
		
		$sql = "SELECT*FROM feedback WHERE FeedbackID = $recordId";
		
		$result = $con -> query ($sql);
		
		if ($result-> num_rows >0)
			
		
		{
			while ($row = $result -> fetch_assoc())
				
			
			{
				$id = $row["FeedbackID"];
				$dis = $row["fbDesc"];
				$rate = $row["rating"];
				$name = $row["Name"];
				$mail = $row["Email"];
				
			}
			
			
		}
		
		
		
		
		
	?>
		
		
		<form method= "post" action = "submitupdates.php">
		
		<h1> <center> Update </center> </h1>
		<br> <br>
		<hr style="border:3px solid gray">
		<br> <br>
		
		<p3 style= "color:white" > Use the form below to send your comments. We read all feedback carefully. But we are unable to respond to each submission individually.<br> 
		If you provide your email address, you agree that we may contact you to  better understand the commentsyou submitted.  </p3>
		<br><br>
		<p3 style= "color:pink"  > *Indicates required field </p3>
		
		<br> <br>
		<br> <br>
		
		
		
		<label> Name* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</label>
		<input type="text"  name ="name" /required value = <?php echo $name ?> >
		
	 <br> <br>
		
		<label> Email Address* &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </label>
		<input type="text"  name ="mail" placeholder="abc@gmail.com" value =<?php echo $mail ?> /required>
		
		
		<br>
		
		<br><br>
		<label> ID &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </label>
		<input type = "text" name = "id" readonly  placeholder="readonly" value =<?php echo $id ?>> <br><br></h1>
		
		<br> <br>
		
		<hr style="border:3px solid gray">
		<br>
		<br> <br>
		
				<p3> <center> Reviews are public and include your accout and device info <text style = "text-decoration: underline; color:	 #66b3ff;" onclick="myFunction1()">learn more</text> </center> </p3>

		
		<br> <br>
		
		<!------------------------------------------------------------------------->
	<h2 style="text-align:center;color:#c59b08;">
	
		 <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars ★</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars ★</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars ★</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars ★</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star ★</label>
	</div>
	</h2>
		<!-------------------------------------------------------------------------->
		<br> <br>
		<h3 >
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
		<label>  Stars </label></h3>
		<br>
		
		
		<p3 >
		
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 
		 Stars (1-5)  </p3>
		
		<br> 
		
		<h1> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;

		<input type = "text" name = "star" value =<?php echo $rate ?>> <br><br></h1>
		
		<!---------------------------------------------------------------------------------------------------->
		
		<h3 >
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
		<label>  Write a review </label></h3>
		<br>
		
		
		<p3 >
		
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 
		Describe your experience (Optional) </p3>
		
		<br> 
		
		<h1> 
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
		
		
		
		
		<textarea name = "namedes" rows="4" cols="50" > <?php echo $dis ?> </textarea> <br> <br>  </h1>
		

	
		
		<h3>
		
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
 
	
	
	
		<input type = "submit" onclick = "myFunction()" value = "Edit"  class = "btn2"> <br> <br></h3>
		

	

	</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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