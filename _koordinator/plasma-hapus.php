<?php	
	session_start();
	$plasmacode = $_GET['plasmacode'];
	include "../koneksi.php";	
	$sql = "delete from plasma where plasmacode='$plasmacode'";
	$hasil = mysqli_query($kon, $sql);
	echo "<script>window.location.href='home.php?hal=plasma-data&status=hapus_sukses';</script>";
?>