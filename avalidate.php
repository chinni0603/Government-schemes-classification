<?php 
include("connection.php");

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($mysqli,"select* from adminlogin where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:update page.html");   
	
}
else
{
	echo "<script language='javascript'>";
	echo "alert('WRONG INFORMATION')";
	echo "</script>";
	die();
}
}
?>