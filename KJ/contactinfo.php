<?php


 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "kaijing";
 $conn = mysqli_connect($server,$user,$pass,$db);

 		$name = mysqli_real_escape_string($conn,$_POST['name']);


 		$email = mysqli_real_escape_string($conn,$_POST['email']);
    $countrycode = mysqli_real_escape_string($conn,$_POST['countrycode']);
 		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
 		$message = mysqli_real_escape_string($conn,$_POST['message']);



 	$sql = "INSERT INTO leadinfo (name,email,countrycode,phone,message) VALUES ('$name', '$email','$countrycode','$phone','$message');";
 	mysqli_query($conn, $sql);



	header("Location: thanks.html");


	?>
