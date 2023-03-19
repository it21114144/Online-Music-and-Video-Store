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
			<li class = "menu"><a href = "#" > |purchases</a> </li>
			
			<li class = "menu"><a href = "Download App.html" > | Download App </a> </li>
			<li class = "menu"><a href = "feedback.php" > | Feedback</a> </li>
			
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
$sql="SELECT * FROM files WHERE fileID='$recordID'";

$result=$con->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$id=$row["fileID"];	
		$nme=$row["fileName"];
		$typ=$row["fileType"];
		$dte=$row["releaseDate"];
	
		$price=$row["price"];
	
		
	}
}

?>
<form method="post" action ="submitedited.php">

	<h1><center>Edit song</center></h1>
	
	<label>ID</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<input type="text" name="id" value=<?php echo $id ?> readonly><br><br>
	
	<label>Song title</label>
	<input type="text" name="title" value=<?php echo $nme ?>><br><br>
	
	<label>Song type</label>
	<input type="text" name="type" value=<?php echo $typ ?>><br><br>
	
	
	<label>release date</label>
	<input type="text" name="date" value=<?php echo $dte ?> ><br><br>

	
	
	<label>price</label>
	<input type="text" name="prc" value=<?php echo $price?>><br><br>
	




	<input type="submit" name="btnsubmit" value="Make changes"><br><br>


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






