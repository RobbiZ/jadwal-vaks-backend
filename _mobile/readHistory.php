<?php
	
	require_once('../koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='GET'){

		$username = $_GET['username'];
		
		$sql = "SELECT vacid, custname, plasmaname, address, city, phone, area, tanggal, populasi, jenis, umur, aplikasi, productname
				FROM vaksinasi, plasma, user, customer, product 
				WHERE vaksinasi.plasmacode = plasma.plasmacode 
				AND vaksinasi.pelaksana = user.uid 
				AND vaksinasi.stockcode = product.stockcode
				AND plasma.custcode = customer.custcode
				AND vaksinasi.status = 'SUDAH'
				AND user.username = '$username'
				ORDER BY tanggal DESC, vacid DESC ";
		
		$result = mysqli_query($kon, $sql);

		$json = array();

		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_assoc($result)){
			$json[]=$row;
			}
		}

		mysqli_close($kon);

		echo json_encode($json); 
	}

?> 