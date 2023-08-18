<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $Logo = $_POST['Logo'];
	$Scheme = $_POST['Scheme'];
	 $Details = $_POST['Details'];
	$url = $_POST['url'];
	 $sql = "INSERT INTO oschemes (Logo,Scheme,Details,url)
	 VALUES ('$Logo','$Scheme','$Details','$url')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>