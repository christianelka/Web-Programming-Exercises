<?php 
include('login.php');
if (!isset($_SESSION['namauser'])){
	echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
	echo "<p><a href='index.html'>Login</a> dulu ya..</p>";

	// setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
	exit();
} 
$a = rand(0,100);
$output = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$a = $_POST['angka'];
	$tebakan = $_POST['tebakan'];
	if ($a == $tebakan){
	$output = "Selamat ya… Anda benar, saya telah memilih bilangan $a <br><a href='tebak.php'>Ulangi Lagi</a>";
	} elseif ($a < $tebakan) {
		$output = "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi, pilihan kamu $tebakan";
	} else {
		$output = "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah, pilihan kamu $tebakan";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Program Tebak Angka</title>
</head>
<body>
	<center>
	<?php echo "<h2>Selamat datang ".$_SESSION['namauser'].", nama saya Mr. PHP. <br>Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h2>";
	?>
	<!-- <?php echo $a ?> -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div>
			<input type="hidden" name="angka" value="<?php echo $a ?>">
			<input type="number" name="tebakan" placeholder="Coba Tebak Angkanya...">
			<input type="submit" name="cek" value="Cek"><br>
			<span class="help-block <?php echo (!empty($output)) ? 'has-error' : ''; ?>"><?php echo $output;?></span>
		</div><br>
			<a href="logout.php">Logout</a>
	</center>
</body>
</html>