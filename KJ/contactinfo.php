<?php


 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "kaijing";
 $conn = mysqli_connect($server,$user,$pass,$db);

 		$name = mysqli_real_escape_string($conn,$_POST['name']);
    $name = mysqli_real_escape_string($conn,$_POST['last_name']);
    $name = mysqli_real_escape_string($conn,$_POST['display_name']);
 		$email = mysqli_real_escape_string($conn,$_POST['email']);
 		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
 		$message = mysqli_real_escape_string($conn,$_POST['message']);



 	$sql = "INSERT INTO leadinfo (name,email,phone,message) VALUES ('$name', '$email','$phone','$message');";
 	mysqli_query($conn, $sql);



	header("Location: thanks.html");


	?>
