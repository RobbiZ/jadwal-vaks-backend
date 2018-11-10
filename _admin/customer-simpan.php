<?php

$custcode       = $_POST['custcode'];
$custname   	= $_POST['custname'];
$category   	= $_POST['category'];
$salesman		= $_POST['salesman'];

include "../koneksi.php";


if (isset($_POST['custcode_old']))
{
	$custcode_old = $_POST['custcode_old'];
	
	$simpan = "EDIT";
}
else{
	$simpan = "BARU";
}


if($simpan=="BARU"){
	
	$dataValid="YA";

	if (strlen(trim($custcode))==0)
	{
		echo '<div class="alert alert-danger">
     		custcode harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($custname))==0)
	{
		echo '<div class="alert alert-danger">
     		custname harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($category))==0)
	{
		echo '<div class="alert alert-danger">
     		category harus di pilih salah satu </div>	';
		$dataValid = "TIDAK";
	}
	
	if (strlen(trim($salesman))==0)
	{
		echo '<div class="alert alert-danger">
     		salesman harus diisi </div>	';
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

	$sql = "insert into customer
			(custcode,custname,category,salesman)
			values 
			('$custcode','$custname','$category','$salesman')";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=customer-data&status=tambah_sukses'</script>";
}

else if ($simpan=="EDIT") {

	$sql = "update customer set
			custcode 	= '$custcode',
			custname	= '$custname',
			category	= '$category',
			salesman	= '$salesman'
			where 
			custcode 	= '$custcode_old'";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=customer-data&status=edit_sukses'</script>";
}

?>