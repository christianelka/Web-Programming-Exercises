<?php
function hitung_umur($tanggal_lahir){
    $birthDate = new DateTime($tanggal_lahir);
    $today = new DateTime("today");
    if ($birthDate > $today) { 
        exit("0 tahun 0 bulan 0 hari");
    }
    $y = $today->diff($birthDate)->y;
    $m = $today->diff($birthDate)->m;
    $d = $today->diff($birthDate)->d;
    // return $y." tahun ".$m." bulan ".$d." hari";
    return $y;
}

$file = fopen("datamhs.dat", "r") or die("Unable to open file!");
echo ('<center><h2>Data Mahasiswa</h2>');
echo '<table border="1">';
echo('
<tr>
<th>No/th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Tanggal Lahir</th> <th>Tempat Lahir</th> <th>usia (Thn)</th>
</tr>
');
$no = 1;
while (!feof($file)) {
    echo("<tr>");
    $data = preg_split("[\|]", fgets($file), 4);
    
    if ($data[0] != '') {
        $ageMhs = hitung_umur($data[2]);
        echo("
            <td>$no</td>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            <td>$ageMhs Tahun</td>
        
        ");
        $no+=1;
    }
    echo("</tr>");
    
    
}
$no -=1;
echo("</table>");
fclose($file);
echo("<p>Jumlah Data : $no</p>");
?>