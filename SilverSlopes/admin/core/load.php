<?php 
require_once 'core.php'; 
?>
<?php 
if($_GET['q']){
$q = $_GET['q'];

switch ($q) {
	case 'name':
		# code...
	$id = $_SESSION['userid'];
	$fetch = "SELECT*FROM users WHERE id = {$id}";
	$query = $conn->query($fetch);
		if($query){
			$data = $query->fetch_assoc();
			echo $data['username'];
		}else{
			echo "system error, try again later";
		}
		break;
	case 'msg':
		$fetch = "SELECT*FROM messages";
		$query = $conn->query($fetch);
		if($query){
			echo $query->num_rows;
		}else{
			echo "system error, try again later";
		}
	    break;
	case 'ods':
		$fetch = "SELECT*FROM orders";
		$query = $conn->query($fetch);
		if($query){
			echo $query->num_rows;
		}else{
			echo "system error, try again later";
		}
	    break;
	case 'join':
		$fetch = "SELECT*FROM join_req";
		$query = $conn->query($fetch);
		if($query){
			echo $query->num_rows;
		}else{
			echo "system error, try again later";
		}
	    break;
	default:
		# code...
	echo "Nothing";
		break;
}

$conn->close();
}
?>