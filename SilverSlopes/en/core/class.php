<?php require_once('db.php'); ?>
<?php
//setting default timezone
date_default_timezone_set('Africa/Douala');
 
//creating classes for customers
class Order{
	public function __construct($conn,$plan,$name,$num,$email,$location,$role,$type,$info,$delivery,$services,$nav_items){
		$inv = round(mt_rand(1,9)*pow(10,9.8));
		$date=date("l,d M Y | g:i A");
		$status = 0;


		$this->inv = $inv;
		$this->date = $date;
		$this->payement = "Not Payed";
		$this->name = $name;
		$this->number = $num;
		$this->email = $email;
   //$data = array('OrderNum'=>$inv,'Date'=>$date,'Plan'=>$this->plan,'Name'=>$this->name,'Number'=>$this->number,'Email'=>$this->email,'City'=>$this->city,'Description'=>$info,'SendByMail'=>$sendEmail,'HaveServer?'=>$val,'HostName'=>$host,'Username'=>$username,'Password'=>$password,'Port'=>$port,'DoYouWantServer'=>$want);

   $insert = $conn->query("INSERT INTO orders(inv,dateC,plan,name,num,email,location,role,type,details,delivery,services,navbar_items,status) VALUES ('$inv','$date','$plan','$name','$num','$email','$location','$role','$type','$info','$delivery','$services','$nav_items','$status')");
   //values
	// $insert->execute();
    //
	if($insert){
		$this->success = true;
	}else{
		$this->success = false;
	}
    
	}
   	public function __destruct(){
   		$msg = array('success'=>$this->success,'inv' => $this->inv ,'date'=> $this->date ,'name'=>$this->name,'num'=>$this->number,'email'=>$this->email,'pay_status'=>$this->payement);
   		echo(json_encode($msg));
   	}
}
//creating admin class
class Admin{
	public function __construct($conn){
		$db = $conn;
		$this->db = $db;
		if($db->connect_error){
			die("Error: Unable to connect to Database");
		}else{
			//checking for admin session
			if(isset($_SESSION['adminId'])){
				$admin_id = $_SESSION["adminId"];
			$query = $db->query("SELECT*FROM admins WHERE admin_id = '$admin_id'");
			$data = $query->fetch_assoc();
			//defining properties
			$this->id = $data["admin_id"];
			$this->name = $data["username"];
			$this->status = $data["status"];
	    	}else{
	    		return "No Admin session found! please Login as Admin";
	    	}

		}
	}
}
//creating clients class
class Clients{
	public function __construct($conn){
		$db = $conn;
		$this->db = $db;
		if($db->connect_error){
			die("Error: Unable to connect to Database");
		}else{
			$this->num_orders = $db->query("SELECT*FROM orders")->num_rows;
			$this->num_msg = $db->query("SELECT*FROM messages")->num_rows;
			$this->num_join = $db->query("SELECT*FROM join_req")->num_rows;
			$this->num_completed = $db->query("SELECT*FROM orders WHERE status != 0")->num_rows;
	    }
	}
	public function fetch_orders(){
		$db = $this->db;
		$get = $db->query("SELECT*FROM orders WHERE status = 0");
		$data = $get->fetch_array();
		return $data;
	}
}





 ?>