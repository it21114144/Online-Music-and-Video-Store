<?php
require 'Login.php';
?>

<html>
	<head>
	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/styles.css">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>


	<script>


function enableButton()
{
	if (document.getElementById("chk_accept").checked)
	{
	 document.getElementById("btn_submit").disabled=false;
	}
	
	else{
	document.getElementById("btn_submit").disabled=true;
	}
}
	</script>
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

<h1 align="center">Register</h1>
<h2 align="center" style="color:#e91e63;" >We are happy to work with you</h2>
	
	


<br><br>
<center><h1>Enter your details here</h1></center>
	<br><br>
<div class="colums">
	<form align="center" method="post" action ="submitadvertinfo.php">
          <div class="item">
		  
		<input type="text" id="name" name="id" value="<?php
		echo $_SESSION['logged_user'];?>" size="35" readonly>
	
		   
           
            <input id="name" type="text" placeholder = "Advertisement title" name="title" size="35"required/>
          </div>
		  <br>
        
          <div class="item">
              <br><br>
            
			  <textarea rows="6" cols="75" placeholder = "Here  please mention your song details and an approriate descrtiption " name="msg"  ></textarea>      <br><br>

  <br>  <br><input type="checkbox" id="chk_accept" onclick="enableButton();"required>
<h4>Please check the details and submit the necessary details to register for advertising our staff will contact you via an email shortly</h4>
  <br>  <br>
<input align= "center" type="submit" id="btn_submit" value="SUBMIT" disabled ><br><br><br><br>			  
          </div>
	</form>
	
	</div>	

<br><br>
	<br><br>
	<br><br>
	

<div class="colums">
<form align= "center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		<h3>Enter your name</h3>
		<input type="text" name="Name" >
		<input type="submit" value="search" name="btnsubmit">
		<br><br>

<h6> *Please check your details here</h6><br><br>
	</form>
</div>
	
	<?php
	//check btn cuz same page

	if(isset($_POST["btnsubmit"]))
	{
	$Name=$_POST["Name"];
	

	
	$sql= "SELECT * FROM userdetails where UserName LIKE '%$Name%'";
	//result set into variable
	$result=$con->query($sql);
	
	
	if($result->num_rows>0)//checking if the varable results has records or not
	{
		echo"<table border='1'>";
		echo"<th> UserID</th><th>UserName</th><th> first_Name</th><th>last_name</th><th>Address</th><th>Date_Of_Birth</th><th>Utype</th><th>password</th>";
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
						echo ("<td>" . $row['password'] . "</td>");
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