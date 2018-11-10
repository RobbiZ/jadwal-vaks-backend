<?php
	
	require_once('../koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='GET'){

		$username = $_GET['username'];
		
		$sql = "SELECT custname, plasmaname, tanggal 
				FROM vaksinasi, plasma, user, customer 
				WHERE vaksinasi.plasmacode = plasma.plasmacode 
				AND vaksinasi.pelaksana = user.uid 
				AND plasma.custcode = customer.custcode
				AND user.username = $username 
				ORDER BY tanggal DESC ";
		
		$result = mysqli_query($kon, $sql);

		$json = array();

		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_assoc($result)){
			$json['vac_info'][]=$row;
			}
		}

		mysqli_close($kon);

		echo json_encode($json); 
	}

?> 