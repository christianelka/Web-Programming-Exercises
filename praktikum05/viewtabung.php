<?php
$file = fopen("datatabung.dat", "r") or die("Unable to open file!");
echo ('<center><h2>Data Ukuran Tabung</h2>');
echo '<table border="1">';
echo('
<tr>
<th>Nama Tabung</th>
<th>Diameter</th>
<th>Tinggi</th>
<th>Luas</th>
</tr>
');
while (!feof($file)) {
    echo("<tr>");
    $data = preg_split("[\,]", fgets($file), 4);
    
    if ($data[0] != '') {
        $nama = $data[0];
        $diameter = $data[1];
        $tinggi = $data[2];
        echo("
            <td>$nama</td>
            <td>$diameter</td>
            <td>$tinggi</td>
            <td><a href='hitungluas.php?n=$nama&d=$diameter&t=$tinggi'>View</td>
        
        ");
    }
    echo("</tr>");
    
    
}
echo("</table>");
fclose($file);
?>