<?php

session_start();

 $username = $_POST['username'];
 $password = $_POST['password'];

   include 'koneksi.php';
   $sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
   $query = mysqli_query($kon, $sql);
   $hasil = mysqli_fetch_array($query);
   if(!$hasil){
    echo "<script>alert('username atau password salah!');window.location.href='index.php';</script>";
   }

   else if($hasil['role']=='admin'){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $hasil['username'];
    $_SESSION['uid'] = $hasil['uid'];
    $_SESSION['role'] = $hasil['role'];
    echo "<script>window.location.href='_admin/home.php?hal=overview';</script>";
   }
   else if($hasil['role']=='koordinator'){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $hasil['username'];
    $_SESSION['uid'] = $hasil['uid'];
    $_SESSION['role'] = $hasil['role'];
    echo "<script>window.location.href='_koordinator/home.php?hal=overview';</script>";
   }
   else{
    echo "<script>alert('akses ditolak. buka jadwal vaksinasi melalui aplikasi mobile!');window.location.href='index.php';</script>";
   }

?>
