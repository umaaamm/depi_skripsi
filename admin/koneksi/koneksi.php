<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_depi";

$koneksi=mysqli_connect($host, $username, $password, $db);
if (mysqli_connect_errno()){
		echo "Tidak Terkoneksi".mysql_connect_errno();
	}else{
		
	}
session_start();
?>