<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl = $_POST['tgllhr'];
$tmpt = $_POST['tmptlhr'];

$namaFile = "list.txt";
$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
fwrite($myfile, $nim." | ".$nama." | ".$tgl." | ".$tmpt."\n");
fclose($myfile);
header("Refresh:1;url='list.txt'");
?>
