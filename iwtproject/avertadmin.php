<?php

require 'config.php';
?>
<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/styles.css">
	 <script src ="file.js"></script> 
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>
	
	<body>
	
	<div class="box">
	<img id="logo" src = "image\PlayOn.jpeg">
	<ul>
	<li class = "menu"><a href = "#" > | Home </a> </li>
			<li class = "menu"><a href = "#" > |Advertise</a> </li> 
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
			<center><h2>Advertisement administration</h2></center>
	<br>
	<br><br>  
	<table class="tbl" border="2"  width="75%">
	<tr>
		<th >adID</th>
		<th>adTitle</th>
		<th>adDesc</th>
		<th >UserID</th>
		<th >status</th>
		<th >ad_Manager</th>
		<th>EDIT</th>
		
		
	</tr>
 <?php
	
	
	$sql="SELECT * FROM advertisment";
	
	$result=$con->query ($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id=$row["adID"];
			echo "<tr>";
			echo"<td>".$row["adID"]."</td>";
			echo"<td>".$row["adTitle"]."</td>";
			echo"<td>".$row["adDesc"]."</td>";
			echo"<td>".$row["UserID"]."</td>";
			echo"<td>".$row["status"]."</td>";
			echo"<td>".$row["ad_Manager"]."</td>";
			echo"<td><button type='submit'><a href='editadvert.php?id=$id'>EDIT</a></button></td>";
			echo "</tr>";
		}
	}
	
	echo "</table>";

	
	
	?>

<br><br>
	<br><br>
	<br><br>
	<br><br>
	
<div class="colums">
<form align= "center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		<h3>Enter User Id get relevant user details</h3>
		<input type="text" name="id" >
		<input type="submit" value="search" name="btnsubmit">
		<br><br>


	</form>
</div>
	
	<?php
	//check btn cuz same page

	if(isset($_POST["btnsubmit"]))
	{
	$id=$_POST["id"];
	

	
	$sql= "SELECT * FROM userdetails where UserID='$id'";
	//result set into variable
	$result=$con->query($sql);
	
	
	if($result->num_rows>0)//checking if the varable results has records or not
	{
		echo"<table border='1'>";
		echo"<th> UserID</th><th>UserName</th><th> first_Name</th><th>last_name</th><th>Address</th><th>Date_Of_Birth</th><th>Utype</th><th>email</th><th>Phone number</th>";
		//read data
		while($row=$result->fetch_assoc())
		{
						echo ("<tr>");
						echo ("<td>". $row['UserID']. "</td>");
						echo ("<td>" . $row['UserName'] . "</td>");
						echo ("<td>" . $row['first_Name'] . "</td>");
						echo ("<td>" . $row['last_name'] . "</td>");
						echo ("<td>" . $row['Address'] . "</td>");
						echo ("<td>" . $row['Date_Of_Birth'] . "</td>");
						echo ("<td>" . $row['UType'] . "</td>");
						echo ("<td>" . $row['Email'] . "</td>");
						echo ("<td>" . $row['Phone_Number'] . "</td>");
						echo ("</tr>");
		}
		echo"</table>";
	}
	else
	{
		echo"<script>alert ('NO records!')</script>";
			}
			
$con->close();

}?>
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