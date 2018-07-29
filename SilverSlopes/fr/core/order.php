<?php
require 'class.php';
//require database
require_once 'db.php';

function valid($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	return $data;
}
$services = $delivery = $nav_items = $location = $role = $type =  "";

$plan = valid($_POST['plan']);

$name = valid($_POST['name']);
$number = valid($_POST['num']);
//to get optional email parameters
$email = valid($_POST['email']);

// try {
// }
// catch(Exception $e){
// 	$email = "Nothing";
// }
if(!empty($_POST['location'])){
$location = valid($_POST['location']);
}
if(!empty($_POST['role'])){
$role = valid($_POST['role']);
}
if(!empty($_POST['type'])){
$type = valid($_POST['type']);
}

$info = valid($_POST['desc']);

//posting checkboxes
if (isset($_POST['del_by_email'])) {
    $delivery = "Deliver by email,";
}
if(isset($_POST['del_by_server_yes'])){
    $delivery .= "I have a server and Upload files directly to server,";
}
if(isset($_POST['del_by_server_no'])){
    $delivery .= "I want a server and files to uploaded there,";
}
if(isset($_POST['add_serv_analy'])){
    $services = "Analytics,";
}
if(isset($_POST['add_serv_seo'])){
    $services .= "SEO,";
}
if (isset($_POST['add_serv_video'])) {
    $services .= "Video,";
}
if(isset($_POST['nav_items_about'])){
    $nav_items = "About";
}
if(isset($_POST['nav_items_faq'])){
    $nav_items .= ",FAQ";
}
if(isset($_POST['nav_items_forum'])){
    $nav_items .= ",Forum";
}
if (isset($_POST['nav_items_blog'])) {
    $nav_items .= ",Blog";
}
if (isset($_POST['nav_items_pricing'])) {
    $nav_items .= ",Pricing";
}

if(!empty($_POST["nav_items_more"])){
    $nav_items .= ",".valid($_POST["nav_items_more"]);
}
//for server region...
// if(isset($_POST['server'])){
// 	$val = "Yes";
// 	$host = valid($_POST['hostName']);
// 	$username = valid($_POST['username']);
// 	$password = valid($_POST['password']);
// 	try{
// 		$port = valid($_POST['port']);
// 	}
// 	catch(Exception $e){
// 		$port = "Default :21";
// 	}

// }else{
// 	$val = "No, I don't";
// 	$host = $username = $password = $port = " ";
// }
// //another if
// if (isset($_POST['wantServer'])) {
// 	# code...
//   $want = valid($_POST['wantServer']);
// }else{
// 	$want = "I dont want";
// }

$order = new Order($conn,$plan,$name,$number,$email,$location,$role,$type,$info,$delivery,$services,$nav_items);

 ?>
