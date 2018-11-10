<?php
 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_vaksinasi";

 
$kon = mysqli_connect($db_host, $db_user, $db_password) or die("cannot connect");
 
$enter = mysqli_select_db($kon, $db_name) or die("cannot select DB");
 
?>