<?php 
require 'db.php';
 ?>
<?php 
$id = $_GET["id"];
$table = $_GET["tb"];

$msg = array('success'=>true,'msg'=>"Nothing");

session_start();
if(isset($_SESSION["adminId"])){

$user_id = $_SESSION["adminId"];

$data = $conn->query("SELECT*FROM admins WHERE admin_id = '$user_id'")->fetch_assoc();

$name = $data["username"];	

}elseif(isset($_SESSION["teamId"])){

}

    $query1 = $conn->query("SELECT*FROM orders WHERE order_id = '$id'");
	$data = $query1->fetch_assoc();

if($query1){
	if(!preg_match('/\b'.$name.'\b/',$data["personel"])){

		if($data["personel"] != "none"){
			$name = $data["personel"].",".$name;
		}
	
		$query = $conn->query("UPDATE orders SET status = 1, personel ='$name' WHERE order_id = '$id'");
		if($query){
			$msg['success'] = true;
			$msg['msg'] = "Added to your Task";
		}else{
			$msg['success'] = false;
			$msg['msg'] = "Failed!";
		}

	}else{
		$msg['success'] = false;
		$msg['msg'] = "You are already processing this task!";
	}


}

echo json_encode($msg);

 ?>