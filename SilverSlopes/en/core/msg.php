<?php
require 'db.php';
function valid($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	return $data;
}
$errors = array('success'=>true,'messages'=>"No message");

$name = valid($_POST["fname"]);
$email = valid($_POST["email"]);
$num = valid($_POST["phone"]);
$msg = valid($_POST["message"]);
$date = date("l,d M Y | g:i A");

$sql = "INSERT INTO messages(name,date,email,number,message) VALUES('$name','$date','$email','$num','$msg')";

$query = $conn->query($sql);
if($query){
	$errors['success'] = true;
	$errors['messages'] = "Message delivered!, We'll reply in less than 24-hours!";
}else{
	$errors['success'] = false;
	$errors['messages'] = "Error: Request Not processsed!, Try again later!";
}
echo json_encode($errors);

$conn->close();


?>