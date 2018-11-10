<?php	
	session_start();
	$uid = $_GET['uid'];
	include "../koneksi.php";	
	$sql = "delete from user where uid='$uid'";
	$hasil = mysqli_query($kon, $sql);
	echo "<script>window.location.href='home.php?hal=user-data&status=hapus_sukses';</script>";
?>