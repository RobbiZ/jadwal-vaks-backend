<?php	
	session_start();
	$custcode = $_GET['custcode'];
	include "../koneksi.php";	
	$sql = "delete from customer where custcode='$custcode'";
	$hasil = mysqli_query($kon, $sql);
	echo "<script>window.location.href='home.php?hal=customer-data&status=hapus_sukses';</script>";
?>