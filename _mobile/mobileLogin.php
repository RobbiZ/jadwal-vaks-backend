<?php
	
	require_once('../koneksi.php');
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$token	  = $_POST['token'];
		
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($kon, $sql);
		$row = mysqli_fetch_array($result);

		$sql2 = "UPDATE user SET token = '$token' WHERE username = '$username' ";
		$result2 = mysqli_query($kon, $sql2);
		
		mysqli_close($kon);

		if($row){
			echo json_encode(['status'=>true]);
		}else{
			echo json_encode(['status'=>false]);
		}
	}
	
?>