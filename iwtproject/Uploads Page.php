<!DOCTYPE html>
<html>
	<head>
	<title> PlayOn: UPLOADS </title>
	<link rel = "Stylesheet" href = "styles/stylesw.css">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>

	</head>
	
	<body>
	
	 <!-- site header -->
	 
	 
	<div class="box">
	<img id="logo" src = "IMAGES\PlayOn.jpeg" alt = "PlayOn Logo">
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


		<a href = "profile.php ><input type="button" class="btn1" value="Profile"></a>
	<br>
	<br><br>
	<br>
	</div>
	
	<!--BODY-->
	
	
	<h2 align="center" style="color:#e91e63;"  > <u>      Choose the action to proceed</u></h2>
	<br>
	<a href = "UploadFilesForm.php" ><input type="button" class="btn2" value="Upload a File"></a>
	<br><br><br><br>
	
	
	<a href = "Create Album Form.php" ><input type="button" class="btn3" value="Create An Album"></a>
	<br><br><br><br>
	<br>
	
	<p align="center"> Using the above options, You can upload files to the site or create an album to upload the files into...</p> 
	
	<br><br>
	
	<hr color="red">
	
	<br><br>
	
	<h1 style = "color:#aaafff"> <u> Your Uploads <u> </h1>
	<br><br>
	<h2 style = "color:#24ffa3"> Your Albums </h2>
	<br><br>
	
	<div class="box">
		<form action="" method="POST">
			<input type="text" name="UserID" placeholder="enter your user ID" />
			<input type="submit" name="search" value="View Your Albums">
		</form>
		
		<table class="tbl">
				<tr>
					<th> Album ID</th>
					<th> Album Name</th>
					<th> Album Release Date</th>
					<th> Album Price</th>
					<th> EDIT</th>
					<th> DELETE</th>
				</tr> <br>
				
				<?php
					$connection= mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection, 'PlayOn_Music_and_Video_Store');
					
					if(isset($_POST['search']))
					{
						$UserID = $_POST['UserID'];
						
						$query = "SELECT * FROM album where UserID='$UserID' ";
						$query_run = mysqli_query($connections,$query);
						
						while ($row = mysqli_fetch_array($query_run))
						{
							?>
							<tr>
								<td> <?php echo $row['albumID'];?> </td>
								<td> <?php echo $row['albumName'];?> </td>
								<td> <?php echo $row['album_releaseDate'];?> </td>
								<td> <?php echo $row['albumPrice'];?> </td>
							</tr>
							
							<?php
						}
						
						
					}
				
				?>
				
				
		</table>			
	
	</div>
	
	<br><br>
	<h2 style = "color:#24ffa3"> Your Files </h2>
	<br><br>

	<div class="box">
		<form action="" method="POST">
			<input type="text" name="UserID" placeholder="enter your user ID" />
			<input type="submit" name="search" value="View Your Files">
		</form>
		
		<table class="tbl">
				<tr>
					<th> File ID</th>
					<th> File Name</th>
					<th> File Type</th>
					<th> Release Date</th>
					<th> Album ID</th>
					<th> Price</th>
					<th> EDIT</th>
					<th> DELETE</th>
				</tr> <br>
				
				<?php
					$connection= mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection, 'PlayOn_Music_and_Video_Store');
					
					if(isset($_POST['search']))
					{
						$UserID = $_POST['UserID'];
						
						$query = "SELECT * FROM files where UserID='$UserID' ";
						$query_run = mysqli_query($connections,$query);
						
						while ($row = mysqli_fetch_array($query_run))
						{
							?>
							<tr>
								<td> <?php echo $row['fileID'];?> </td>
								<td> <?php echo $row['fileName'];?> </td>
								<td> <?php echo $row['fileType'];?> </td>
								<td> <?php echo $row['releaseDate'];?> </td>
								<td> <?php echo $row['albumID'];?> </td>
								<td> <?php echo $row['price'];?> </td>
								
							</tr>
							
							<?php
						}
						
						
					}
				
				?>
				
				
		</table>			
	
	</div>



	<br><br>
	<h2 style = "color:#24ffa3"> Your Songs </h2>
	<br><br>
	<!-- Site footer -->
	
<div class="box"> 
	
<footer>
<br>
	<br>
	<br>
<div class ="txt">


<h5>Contact us</h5>
<br>
<div class="smedia">
<a href = "#" > <img class="utube" src = "IMAGES\utube.jpg" width= "55px" height = "55px"></a>
<a href = "#" > <img  class="insta" src = "IMAGES\insta.jpg" width= "55px" height = "55px"></a>
<a href = "#" > <img  class="twitter" src = "IMAGES\twitter.jpg" width= "55px" height = "55px"></a>
<a href = "#" > <img   class="facebook" src = "IMAGES\facebook.jpg" width= "55px" height = "55px"></a>
</div>

</div>



<br>
<br>
<h6>Copyright © 2021 Play on. All right reserved</h6>
<br>
</footer>

</div>
	</body>
	
</html>