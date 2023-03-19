<?php
session_start();
require 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$userid = $_POST["userid"];
$password = $_POST["password"];
$userid = $_POST["userid"];

$sql = "SELECT * FROM userdetails Where UserID='$userid' and password='$password'";

$result = $con -> query($sql);

if($result -> num_rows > 0)
{
$_SESSION['logged_user'] = $userid;
$_SESSION['pwd'] = $password;

header("Location:adminhome.php");
}

else
{
echo ("<script LANGUAGE='JavaScript'>
window.alert('Invalid User Name or Password!');
window.location.href='Login.html';
</script>");

}
}
?>