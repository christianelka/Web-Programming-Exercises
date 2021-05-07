<?php 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kuliah_web_crud";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
	die("Koneksi Gagal : " . mysqli_connect_error());
} 
?>
