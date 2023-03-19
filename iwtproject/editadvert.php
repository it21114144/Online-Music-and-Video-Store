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
			
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback </a> </li>
	</ul>
	<br>


<br>
	
	<input type = "text" class = "search" placeholder = "Search" >


	
	<br>
	<br><br>
	<br></div>
	
	<br>
	<br><br>
	<br><br>
	<br><br>
	<br>

<?php

	require'config.php';

$recordID=$_GET["id"];
$sql="SELECT * FROM advertisment WHERE adID='$recordID'";

$result=$con->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$id=$row["adID"];	
		$tlt=$row["adTitle"];
		$typ=$row["status"];
		$dte=$row["ad_Manager"];

		
	}
}

?>
<form method="post" action ="submitseditedadvert.php">

	<h1><center>Edit song</center></h1>
	
	<label>adID</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<input type="text" name="id" value=<?php echo $id ?> readonly><br><br>
	
	<label>Advertisement title</label>
	<input type="text" name="title" value=<?php echo $tlt ?> readonly><br><br>
	
	<label>Set status</label>
	<input type="text" name="status" value=<?php echo $typ ?>><br><br>
	
	
	<label>Your admin ID</label>
	<input type="text" name="admid" value=<?php echo $dte ?> ><br><br>
	




	<input type="submit" name="btnsubmit" value="Accept"><br><br>


</form>


 <!-- add a horizontal line (d)-->
<hr>
 <!-- add a footer (g)-->
	<footer>
	<p>created by me</p>
	<a href="file:///D:/semester2/IWT/w(2)/practice/first.html"><p>to first</p>
	</footer>
 </body>
</html>






