<?php
$baris = 4;
$kolom = 5;
$angka = 0;
echo "<table border='1'>";
for($i = $baris; $i < 8 ; $i++){
 	echo "<tr>";
 	for ($j = $kolom; $j < 10 ; $j++){
 		$angka++;
 		if ($angka % 2 == 0){ 
 			echo "<td style='color: white; background-color: red;'>$angka</td>";
 		}else {
 			echo "<td style='color: red; background-color: white;'>$angka</td>";
 		}
 	}
  	echo "</tr>";
}
echo "</table>";
?>