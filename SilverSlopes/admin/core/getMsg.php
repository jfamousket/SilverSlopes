<?php 
require 'db.php';
 ?>
 <?php 
$id = $_GET['q'];


$get = "SELECT*FROM messages WHERE id = {$id}";
$query = $conn->query($get);
$data = $query->fetch_assoc();
	$id = $data['id'];
	$name = $data['name'];
	$date = $data['date'];
	$email = $data['num_email'];
	$msg = $data['message'];

	$out = array('id'=>$id,'name' =>$name ,'date'=>$date,'email'=>$email,'msg'=>$msg);
	echo json_encode($out);
  ?>