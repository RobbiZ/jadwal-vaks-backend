<?php
	
	require_once('../koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$vacid 	  = $_POST['vacid'];
		$donumber = $_POST['donumber'];
		$batch    = $_POST['batch'];
		$kmstart  = $_POST['kmstart'];
		$kmfinish = $_POST['kmfinish'];
		$remark   = $_POST['remark'];
		
		$sql = "UPDATE vaksinasi SET 
				donumber = '$donumber', 
				batch    = '$batch', 
				kmstart  = '$kmstart', 
				kmfinish = '$kmfinish', 
				remark   = '$remark', 
				reschedule 	= NULL,
				newdate 	= NULL,
				cancel 		= NULL,
				status 		= 'SUDAH' 
				WHERE vacid = '$vacid' ";

		$result = mysqli_query($kon, $sql);
		
		mysqli_close($kon);

		if($result){
			echo json_encode(['status'=>true]);
		}else{
			echo json_encode(['status'=>false]);
		}
	}

?> 