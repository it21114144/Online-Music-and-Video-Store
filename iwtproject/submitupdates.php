<?php



require 'config.php';


$name = $_POST["name"];
$mail = $_POST["mail"];
$id = $_POST["id"];
$star = $_POST["rate"];
$namedes = $_POST["dis"];


$sql = "UPDATE feedback SET FeedbackID ='$id', fbDesc = '$namedes', rating ='$star', Name = '$name', Email= '$mail' WHERE FeedbackID ='$id' ";

if ($con -> query ($sql))
	
	{
		header ("Location: admin.php");
		
	}

	else
	{
		echo "<script> alert ('Update Unsuccessful')</script>" ;
	}

	$con -> close();

?>