<?php

$vacid		= $_POST['vacid'];
$plasmacode = $_POST['plasmacode'];
$tanggal	= $_POST['tanggal'];
$jenis		= $_POST['jenis'];
$populasi	= $_POST['populasi'];
$umur		= $_POST['umur'];
$aplikasi	= $_POST['aplikasi'];
$stockcode  = $_POST['stockcode'];
$pelaksana  = $_POST['pelaksana'];
$username   = $_POST['username'];
$donumber   = $_POST['donumber'];
$batch      = $_POST['batch'];
$kmstart    = $_POST['kmstart'];
$kmfinish   = $_POST['kmfinish'];
$newdate    = $_POST['newdate'];
$remark		= $_POST['remark'];
$cancel		= $_POST['cancel'];
$reschedule	= $_POST['reschedule'];

include "../koneksi.php";


if (strlen(trim($cancel))>0){
	$simpan="BATAL";
}
else if (strlen(trim($reschedule))>0) {
	$simpan="ULANG";
}
else {
	$simpan="SELESAI";
}


if ($simpan=="BATAL") {

	$sql = "update vaksinasi set
			donumber 	= NULL,
			batch		= NULL,
			kmstart		= NULL,
			kmfinish 	= NULL,
			remark	 	= '$remark',
			reschedule 	= NULL,
			newdate 	= NULL,
			cancel 		= $cancel,
			status 		= 'SUDAH' 
			where 
			vacid 		= '$vacid'";

	$hasil = mysqli_query($kon, $sql) or die(mysqli_error($kon));

	echo "<script>location.href='home.php?hal=realisasi-data&status=cancel_sukses'</script>";
}


else if ($simpan=="ULANG") {

	$sql = "update vaksinasi set
			donumber 	= NULL,
			batch		= NULL,
			kmstart		= NULL,
			kmfinish 	= NULL,
			remark	 	= '$remark',
			reschedule 	= '$reschedule',
			newdate 	= '$newdate',
			cancel 		= NULL,
			status 		= 'SUDAH' 
			where 
			vacid 		= '$vacid'";

	$hasil = mysqli_query($kon, $sql) or die(mysqli_error($kon));


	$sql2 = "insert into vaksinasi
			(plasmacode,tanggal,jenis,populasi,umur,aplikasi,stockcode,pelaksana)
			values 
			('$plasmacode','$newdate','$jenis','$populasi','$umur','$aplikasi','$stockcode','$pelaksana')";

	$hasil2 = mysqli_query($kon, $sql2) or die(mysqli_error($kon));

	echo "<script>location.href='home.php?hal=realisasi-data&status=reschedule_sukses'</script>";
}


else if($simpan=="SELESAI"){
	
	$dataValid="YA";

	if (strlen(trim($donumber))==0)
	{
		echo '<div class="alert alert-danger">
     		donumber harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($batch))==0)
	{
		echo '<div class="alert alert-danger">
     		batch harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($kmstart))==0)
	{
		echo '<div class="alert alert-danger">
     		kmstart harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}
	
	if (strlen(trim($kmfinish))==0)
	{
		echo '<div class="alert alert-danger">
     		kmfinish harus di pilih salah satu </div>	';
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

	$sql = "update vaksinasi set
			donumber 	= '$donumber',
			batch		= '$batch',
			kmstart		= '$kmstart',
			kmfinish 	= '$kmfinish',
			remark	 	= '$remark',
			reschedule 	= NULL,
			newdate 	= NULL,
			cancel 		= NULL,
			status 		= 'SUDAH' 
			where 
			vacid 		= '$vacid'";

	$hasil = mysqli_query($kon, $sql) or die(mysqli_error($kon));

	echo "<script>location.href='home.php?hal=realisasi-data&status=realisasi_sukses'</script>";
	echo $vacid;
	echo $donumber;
	echo $batch;
	echo $kmstart;
	echo $kmfinish;
	echo $remark;
}

?>