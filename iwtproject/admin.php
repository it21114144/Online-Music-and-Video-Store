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
	<li class = "menu"><a href = "#" > | Home </a> </li>
			<li class = "menu"><a href = "avertadmin.php" > |Advertise</a> </li> 
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
	<br>
	<br>
		<h3> <center> Feedback administration</center> </h3> <br> <br>
		 <div class ="productdata"> <!-- "productdata tbl"-->
 <table>
  <table  border ="1" width ="75%" class="tbl tabst">
  <tr>
   <th class ="col1"> Feedback description   </th>      
    <th class ="col2"> Star rating    </th> 
	<th class ="col3"> Email Address   </th>  
	<th class ="col4"> Name  </th> 
	<th class ="col5"> ID  </th>  
	<th class ="col6"> EDIT </th> 
	<th class ="col7"> DELETE </th> 
</tr>

<?php
	
	$sql ="SELECT * FROM feedback";
	
	$result = $con -> query($sql);
	
	if ($result -> num_rows > 0)
		
		{
			while ($row = $result -> fetch_assoc())
				
			
			{
				$id = $row["FeedbackID"];
				echo "<tr>";
				echo "<td>". $row["fbDesc"]. "</td>";
				echo "<td>". $row["rating"]. "</td>";
				echo "<td>". $row["Email"]. "</td>";
				echo "<td>". $row["Name"]. "</td>";
				echo "<td>". $row["FeedbackID"]. "</td>";
				echo "<td><button type ='submit'> <a href ='EditRecord.php?id=$id'> Edit </a></button ></td>";
				echo "<td><button type ='submit'> <a href ='DeleteRecord.php?id=$id'> Delete </a></button ></td>";
				echo "</tr>";
			}
			
			
		}

echo "</table>";
?>

 



</table>
</div>

	<br><br><br>	
			
			
			
	 <a href = "rate.html"> Rate </a></button> </h3>
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