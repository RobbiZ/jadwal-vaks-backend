<?php

$username   = $_POST['username'];
$password   = $_POST['password'];
$role	    = $_POST['role'];
$token		= $_POST['token'];

include "../koneksi.php";


if (isset($_POST['uid']))
{
	$uid = $_POST['uid'];
	
	$simpan = "EDIT";
}
else{
	$simpan = "BARU";
}


if($simpan=="BARU"){
	
	$dataValid="YA";

	if (strlen(trim($username))==0)
	{
		echo '<div class="alert alert-danger">
     		username harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($password))==0)
	{
		echo '<div class="alert alert-danger">
     		password harus diisi </div>	';
		$dataValid = "TIDAK";
	}

	if (strlen(trim($role))==0)
	{
		echo '<div class="alert alert-danger">
     		role harus di pilih salah satu </div>	';
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

	$sql = "insert into user
			(username,password,role,token)
			values 
			('$username','$password','$role','$token')";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=user-data&status=tambah_sukses'</script>";
}

else if ($simpan=="EDIT") {

	$sql = "update user set
			username 	= '$username',
			password	= '$password',
			role 		= '$role',
			token 		= '$token'
			where 
			uid 	= '$uid'";

	$hasil = mysqli_query($kon, $sql);
	echo "<script>location.href='home.php?hal=user-data&status=edit_sukses'</script>";
}

?>