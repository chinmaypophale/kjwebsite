<?php


 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "kaijing";
 $conn = mysqli_connect($server,$user,$pass,$db);

 		$name = mysqli_real_escape_string($conn,$_POST['name']);

 		$email = mysqli_real_escape_string($conn,$_POST['email']);
 		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $countrycode = mysqli_real_escape_string($conn,$_POST['countrycode']);



 	$sql = "INSERT INTO leadinfo (name,email,countrycode,phone) VALUES ('$name', '$email','$countrycode','$phone');";
 	mysqli_query($conn, $sql);



	header("Location: calculator.php");


	?>
