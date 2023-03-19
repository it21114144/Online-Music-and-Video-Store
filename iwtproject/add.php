<!DOCTYPE html>
<head>

	<title> PlayOn Music and Video Store </title>
	<link rel = "Stylesheet" href = "styles/stylesf.css">
	<p align="center"  style="color:#e91e63;">Play on Music & Video store</p>
    <hr >
	</head>
	
	<body>

<?php 
require 'config.php';
$sql = 'SELECT * FROM album';
$result = mysqli_query($con, $sql);
 ?>
<h2> Cart: </h2>
 <table id="t01" border="1"width="75%"class="tbl">
 
 <tr>
 	<th> Album Id <br><br></th>
 	<th> Album Name <br><br></th><br>
 	<th> Album Price <br><br></th><br>
 	
 	
 </tr>
 	<?php while($product = mysqli_fetch_object($result)) { ?> 
	<tr>
		<td> <?php echo $product->albumID; ?> </td>
		<td> <?php echo $product->albumName; ?> </td>
		<td> <?php echo $product->price; ?> </td> 
		<td> <a href="purchase.html">Buy Now </a> | <a href="remove.php">Remove</a></td>
	</tr>
	<?php } ?>
 </table>
 
 
 <br><br>
<a href="purchase.php"> <center><button>Checkout</button></a></center>
</body>

 </html>