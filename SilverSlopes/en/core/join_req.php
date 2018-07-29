<?php
require 'db.php';
function valid($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	return $data;
}
$region = "";
$errors = array('success'=>true,'messages'=>"No message");

$name = valid($_POST["name"]);
$email = valid($_POST["email"]);
$num = valid($_POST["number"]);
$nick = valid($_POST["nickname"]);
$name = valid($_POST["name"]);
$skill = valid($_POST["skills"]);
$ab = valid($_POST["about"]);
$date = date("l,d M Y | g:i A");

if(!empty($_POST["location"])){
	$region = valid($_POST["location"]);
}

$sql = "INSERT INTO join_req(name,email,num,region,nickname,skill,about,dateC) VALUES('$name','$email','$num','$region','$nick','$skill','$ab','$date')";

$query = $conn->query($sql);
if($query){
	$errors['success'] = true;
	$errors['messages'] = "Request processsed! You'll be contacted shortly!";
}else{
	$errors['success'] = false;
	$errors['messages'] = "Error: Request Not processsed! Try again later!";
}
echo json_encode($errors);

$conn->close();


?>