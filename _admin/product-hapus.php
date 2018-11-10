<?php	
	session_start();
	$stockcode = $_GET['stockcode'];
	include "../koneksi.php";	
	$sql = "delete from product where stockcode='$stockcode'";
	$hasil = mysqli_query($kon, $sql);
	echo "<script>window.location.href='home.php?hal=product-data&status=hapus_sukses';</script>";
?>