<?php


 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "kaijing";
 $conn = mysqli_connect($server,$user,$pass,$db);

 		$name = mysqli_real_escape_string($conn,$_POST['name']);

 		$email = mysqli_real_escape_string($conn,$_POST['email']);
 		$phone = mysqli_real_escape_string($conn,$_POST['phone']);




 	$sql = "INSERT INTO leadinfo (name,email,phone) VALUES ('$name', '$email','$phone');";
 	mysqli_query($conn, $sql);



	header("Location: calculator.html");


	?>
