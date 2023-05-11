<?php
include_once("connection.php");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
$result=mysqli_query($con,$sql);
	if ($con->query($sql) === TRUE) {
		echo "User registered successfully!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



?>
