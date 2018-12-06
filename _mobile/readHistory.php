<?php
	
	require_once('../koneksi.php');

	if($_SERVER['REQUEST_METHOD']=='GET'){

		$username = $_GET['username'];
		
		$sql = "SELECT vacid, custname, plasmaname, address, city, phone, area, tanggal, populasi, jenis, umur, aplikasi, productname, donumber, batch, kmstart, kmfinish, remark, reschedule, newdate, cancel
				FROM vaksinasi, plasma, user, customer, product 
				WHERE vaksinasi.plasmacode = plasma.plasmacode 
				AND vaksinasi.pelaksana = user.uid 
				AND vaksinasi.stockcode = product.stockcode
				AND plasma.custcode = customer.custcode
				AND vaksinasi.status = 'SUDAH'
				AND user.username = '$username'
				AND reschedule IS NULL
				AND newdate IS NULL
				AND cancel IS NULL
				AND tanggal BETWEEN (CURRENT_DATE() - INTERVAL 2 MONTH) AND (CURRENT_DATE() + INTERVAL 1 MONTH)
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