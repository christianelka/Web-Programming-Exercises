<?php 
include 'config.php';

$hapus = "DELETE FROM karyawan WHERE id='$_GET[id]'";
$query = mysqli_query($conn, $hapus);

if ($query){
	echo "Berhasil Hapus Data, Harap Tunggu";
	header("Location:index.php");
} else {
	echo "Gagal Hapus Data, Harap Tunggu";
	header("Location:index.php");
}
?>