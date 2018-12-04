<?php

$plasmacode = $_POST['plasmacode'];
$tanggal	= $_POST['tanggal'];
$jenis		= $_POST['jenis'];
$populasi	= $_POST['populasi'];
$umur		= $_POST['umur'];
$aplikasi	= $_POST['aplikasi'];
$stockcode  = $_POST['stockcode'];
$pelaksana  = $_POST['pelaksana'];

include "../koneksi.php";


if (isset($_POST['vacid']))
{
	$vacid = $_POST['vacid'];
	
	$simpan = "EDIT";
}
else{
	$simpan = "BARU";
}


if($simpan=="BARU"){
	
	$dataValid="YA";

	if (strlen(trim($plasmacode))==0)
	{
		echo '<div class="alert alert-danger">
     		plasmacode harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($tanggal))==0)
	{
		echo '<div class="alert alert-danger">
     		tanggal harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($jenis))==0)
	{
		echo '<div class="alert alert-danger">
     		jenis harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}
	
	if (strlen(trim($populasi))==0)
	{
		echo '<div class="alert alert-danger">
     		populasi harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($umur))==0)
	{
		echo '<div class="alert alert-danger">
     		umur harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($aplikasi))==0)
	{
		echo '<div class="alert alert-danger">
     		aplikasi harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($stockcode))==0)
	{
		echo '<div class="alert alert-danger">
     		stockcode harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($pelaksana))==0)
	{
		echo '<div class="alert alert-danger">
     		pelaksana harus di pilih salah satu </div>	';
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

	$sql = "insert into vaksinasi
			(plasmacode,tanggal,jenis,populasi,umur,aplikasi,stockcode,pelaksana)
			values 
			('$plasmacode','$tanggal','$jenis','$populasi','$umur','$aplikasi','$stockcode','$pelaksana')";

	$hasil = mysqli_query($kon, $sql);

	
	$title = "Jadwal Vaksinasi Baru";
	
	$sql = "SELECT custname FROM plasma, customer 
			WHERE plasma.custcode = customer.custcode 
			AND plasmacode = '$plasmacode' ";
    $query = mysqli_query($kon, $sql);
	$row = mysqli_fetch_array($query);
	$custname = $row['custname'];
	$message = "$custname";
	
	$sql = "SELECT username FROM user WHERE uid = '$pelaksana' ";
    $query = mysqli_query($kon, $sql);
	$row = mysqli_fetch_array($query);
	$username = $row['username'];

	//echo $message;

	include "../_mobile/sendSinglePush.php";

	echo "<script>location.href='home.php?hal=vaksinasi-data&status=tambah_sukses'</script>";
}

else if ($simpan=="EDIT") {

	$sql = "update vaksinasi set
			plasmacode 	= '$plasmacode',
			tanggal		= '$tanggal',
			jenis 		= '$jenis',
			populasi 	= '$populasi',
			umur	 	= '$umur',
			aplikasi 	= '$aplikasi',
			stockcode 	= '$stockcode',
			pelaksana 	= '$pelaksana'
			where 
			vacid 	= '$vacid'";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=vaksinasi-data&status=edit_sukses'</script>";
}

?>