<?php 
require 'db.php';
 ?>
 <?php 
$id = $_GET['q'];

$order = "SELECT *FROM orders WHERE id = {$id}";
$sql = $conn->query($order);
if($sql->num_rows > 0){
	$data = $sql->fetch_assoc();

	$inv  = $data['inv'];
	$date  = $data['dateC'];
	$plan = $data['plan'];
	$name = $data['name'];
	$num = $data['num'];
	$email = $data['email'];
	$city = $data['city'];
	$role = $data['role'];
	$type = $data['type'];
	$info = $data['info'];
	$sendMail = $data['sendMail'];
	$haveServer = $data['haveServer'];
	$wantServer = $data['wantServer'];
	$status = $data['status'];
	$host = $username = $password = $port = "";
	if($haveServer === "Yes"){
		$qq = "SELECT *FROM server WHERE id = {$id}";
		$val = $conn->query($qq);
		$server = $val->fetch_assoc();

		$host = $server['hostname'];
		$username = $server['username'];
		$password = $server['password'];
		$port = $server['port'];
	}else{
	   $haveServer ="No";
	}

	$order = array('OrderNum'=>$inv,'Date'=>$date,'Plan'=>$plan,'Name'=>$name,'Number'=>$num,'Email'=>$email,'City'=>$city,'role'=>$role,'type'=>$type,'Description'=>$info,'SendByMail'=>$sendMail,'HaveServer'=>$haveServer,'HostName'=>$host,'Username'=>$username,'Password'=>$password,'Port'=>$port,'DoYouWantServer'=>$wantServer,'status'=>$status);

	echo json_encode($order);






}else{
	$order = "Order exoired or completed";
	echo $order;
}



  ?>