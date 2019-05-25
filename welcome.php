<?php
$conn = mysqli_connect("localhost","root","nakagawa3","form");

if (isset($_POST['submit'])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["web"];
	$content = $_POST["comment"];
	$gender = $_POST["gender"];

	$sql = "INSERT INTO Form(Name,Email,Website,Content,Gender) VALUES('$name','$email','$website','$content','$gender')";
	mysqli_query($conn,$sql);
	header("location: Thank.php");
}


?>