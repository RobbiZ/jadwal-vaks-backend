<?php

$stockcode      = $_POST['stockcode'];
$productname   	= $_POST['productname'];
$productline   	= $_POST['productline'];
$package		= $_POST['package'];

include "../koneksi.php";


if (isset($_POST['stockcode_old']))
{
	$stockcode_old = $_POST['stockcode_old'];
	
	$simpan = "EDIT";
}
else{
	$simpan = "BARU";
}


if($simpan=="BARU"){
	
	$dataValid="YA";

	if (strlen(trim($stockcode))==0)
	{
		echo '<div class="alert alert-danger">
     		stockcode harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($productname))==0)
	{
		echo '<div class="alert alert-danger">
     		productname harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($productline))==0)
	{
		echo '<div class="alert alert-danger">
     		productline harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}
	
	if (strlen(trim($package))==0)
	{
		echo '<div class="alert alert-danger">
     		package harus diisi </div>	';
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

	$sql = "insert into product
			(stockcode,productname,productline,package)
			values 
			('$stockcode','$productname','$productline','$package')";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=product-data&status=tambah_sukses'</script>";
}

else if ($simpan=="EDIT") {

	$sql = "update product set
			stockcode 	= '$stockcode',
			productname	= '$productname',
			productline	= '$productline',
			package		= '$package'
			where 
			stockcode 	= '$stockcode_old'";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=product-data&status=edit_sukses'</script>";
}

?>