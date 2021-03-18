<?php
$baris = 4;
$kolom = 5;
$angka = 0;
echo "<table border='1'>";
for($i = $baris; $i < 8 ; $i++){
 	echo "<tr>";
 	for ($j = $kolom; $j < 10 ; $j++){
 		$angka++;
 		echo "<td>$angka</td>";
 	}
  	echo "</tr>";
}
echo "</table>";
?>
