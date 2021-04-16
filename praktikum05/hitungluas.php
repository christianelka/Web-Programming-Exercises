<?php	
$nama = $_GET['n'];
$diameter = $_GET['d'];
$tinggi = $_GET['t'];
// $phi = 22/7;
$jari = $diameter / 2;
$volume = round(pi() * ($jari*$jari) * $tinggi); //π r 2 t
$luasper = round(2 * pi() * $jari * ($jari + $tinggi)); //2 π r ( r + t )

echo("<h2>Volume tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $volume satuan volume</h2>");
echo("<h2>Volume tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $luasper satuan volume</h2>");

?>