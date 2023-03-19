 <html>
 <body>
 
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Search Student Data </h3>
Student Name :<input type="text" name="stuName"><br>
<input type="submit" value="Submit" name="btnSubmit">
<input type="reset" value="Reset">
</form>
<body>


<?php

require 'config.php';
if(isset($_POST["btnSubmit"]))
		{
		$Name = $_POST["stuName"];
		$sql= "SELECT * FROM userdetails where UserName LIKE '%$Name%'";
		if($result=$con->query($sql))
		{
			if($result->num_rows > 0)
			{
				echo ("<table border='1'>");
				echo"<th> UserID</th><th>UserName</th><th> first_Name</th><th>last_name</th><th>Address</th><th>Date_Of_Birth</th><th>Utype</th><th>password</th>";
				while($row = $result->fetch_assoc())
						{
						echo ("<tr>");
						echo ("<td>". $row['UserID']. "</td>");
						echo ("<td>" . $row['UserName'] . "</td>");
						echo ("<td>" . $row['first_Name'] . "</td>");
						echo ("<td>" . $row['last_name'] . "</td>");
						echo ("<td>" . $row['Address'] . "</td>");
						echo ("<td>" . $row['Date_Of_Birth'] . "</td>");
						echo ("<td>" . $row['Utype'] . "</td>");
						echo ("<td>" . $row['password'] . "</td>");
						echo ("<tr>");
						}
				echo ("</table>");
			}
		else
		{
		echo "no results";
		}

		$con->close();
?>

</html>