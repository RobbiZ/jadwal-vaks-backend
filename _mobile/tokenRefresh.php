<?php
	
	require_once('../koneksi.php');
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$username = $_POST['username'];
		$token	  = $_POST['token'];		

		$sql = "UPDATE user SET token = '$token' WHERE username = '$username' ";
		$result = mysqli_query($kon, $sql);
		
		mysqli_close($kon);

		if($result){
			echo json_encode(['status'=>true]);
		}else{
			echo json_encode(['status'=>false]);
		}
	}
	
?>