<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));



$server = "localhost";
$user = "root";
$pass = "";
$db = "kaijing";
$conn = mysqli_connect($server,$user,$pass,$db);

		// $name = mysqli_real_escape_string($conn,$_POST['name']);
		// $email = mysqli_real_escape_string($conn,$_POST['email']);
		// $phone = mysqli_real_escape_string($conn,$_POST['phone']);
		// $message = mysqli_real_escape_string($conn,$_POST['message']);
    //


	$sql = "INSERT INTO leadinfo (name,email,phone,message) VALUES ('$name', '$email_address','$phone','$message');";
	mysqli_query($conn, $sql);



// Create the email and send the message
$to = 'ffinterns.pune@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: ffinterns.pune@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
