<?php
	
	require_once('../koneksi.php');
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($kon, $sql);
		$row = mysqli_fetch_array($result);
		
		mysqli_close($kon);

		if($row){
			echo json_encode(['status'=>true, 'text'=>'Berhasil Login']);
		}else{
			echo json_encode(['status'=>false, 'text'=>'Gagal Login, Cek Username dan Password']);
		}
	}
	
?>