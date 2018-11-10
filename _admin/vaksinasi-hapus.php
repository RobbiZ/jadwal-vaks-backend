<?php	
	session_start();
	$vacid = $_GET['vacid'];
	include "../koneksi.php";	
	$sql = "delete from vaksinasi where vacid='$vacid'";
	$hasil = mysqli_query($kon, $sql);
	echo "<script>window.location.href='home.php?hal=vaksinasi-data&status=hapus_sukses';</script>";
?>