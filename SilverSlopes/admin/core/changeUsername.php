<?php 

require_once 'core.php';

if($_POST) {

	$valid['success'] = array('success' => false, 'messages' => array());

	$username = $_POST['username'];
	$userId = $_POST['user_id'];

	$ch = "SELECT*FROM users WHERE username = '$username'";
	$ql = $conn->query($ch);

	if($ql->num_rows == 1){
		$valid['success'] = false;
		$valid['messages'] = "User Name Already exist!";

	}else{

	$sql = "UPDATE users SET username = '$username' WHERE id = {$userId}";
	if($conn->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating User name";
	}
   }

	$conn->close();

	echo json_encode($valid);

}

?>