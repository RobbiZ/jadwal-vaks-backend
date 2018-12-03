<?php

$plasmaname     = $_POST['plasmaname'];
$address   		= $_POST['address'];
$phone		   	= $_POST['phone'];
$custcode		= $_POST['custcode'];
$city			= $_POST['city'];
$area			= $_POST['area'];

include "../koneksi.php";


if (isset($_POST['plasmacode']))
{
	$plasmacode = $_POST['plasmacode'];
	
	$simpan = "EDIT";
}
else{
	$simpan = "BARU";
}


if($simpan=="BARU"){
	
	$dataValid="YA";

	if (strlen(trim($plasmaname))==0)
	{
		echo '<div class="alert alert-danger">
     		plasmaname harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($address))==0)
	{
		echo '<div class="alert alert-danger">
     		address harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($phone))==0)
	{
		echo '<div class="alert alert-danger">
     		phone harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($custcode))==0)
	{
		echo '<div class="alert alert-danger">
     		custcode harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($city))==0)
	{
		echo '<div class="alert alert-danger">
     		city harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($area))==0)
	{
		echo '<div class="alert alert-danger">
     		area harus diisi </div>	';
		$dataValid = "TIDAK";
	}
	
	if($dataValid == "TIDAK")
	{
		echo '<div class="alert alert-danger">
     		Ada data yang belum lengkap, mohon dicek lagi </div>';
		
		echo "<input type='button' value='Kembali' 
			onClick='self.history.back()'>";
		exit;
	}

	$sql = "insert into plasma
			(plasmaname,address,phone,custcode,city,area)
			values 
			('$plasmaname','$address','$phone','$custcode','$city','$area')";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=plasma-data&status=tambah_sukses'</script>";
}

else if ($simpan=="EDIT") {

	$sql = "update plasma set
			plasmaname 	= '$plasmaname',
			address		= '$address',
			phone 		= '$phone',
			custcode 	= '$custcode',
			city 		= '$city',
			area 		= '$area'
			where 
			plasmacode 	= '$plasmacode'";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=plasma-data&status=edit_sukses'</script>";
}

?>