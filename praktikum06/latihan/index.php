<?php 
// include('login.php');
// if (!isset($_SESSION['namauser'])){
// 	echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
// 	echo "<p><a href='index.html'>Login</a> dulu ya..</p>";

// 	// setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
// 	exit();
// } 
$output = $gagal = "";
$users = array(
			array("anelka", "Christian Anelka", "anelka"),
			array("username1", "Rosihan Ari Yuana", "123456"),
			array("username2", "Dwi Amalia Fitriani", "654321"),
			array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
		 );

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// proses pengecekan ada tidaknya username dan password 
	// dalam daftar user
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			// jika ada yg match maka bikin session untuk simpan nama user
			$_SESSION['namauser'] = $profile_user[1];
			// mengeset cookie username dari namanya, lama cookie 3 bulan
			setcookie("username", $_SESSION['namauser'], time()+3*30*24*3600,"/");
			// redirect halaman ke page1.php
			header("Location: index.php");
		} else {
			$gagal = "Username / Password Tidak Dikenali";
		}
	}
}

// jika sudah ada cookie username
if (isset($_COOKIE['username'])){
$a = rand(0,100);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$a = $_POST['angka'];
	$tebakan = $_POST['tebakan'];
	if ($a == $tebakan){
	$output = "Selamat ya… Anda benar, saya telah memilih bilangan $a <br><a href='index.php'>Ulangi Lagi</a>";
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
	<?php echo "<h2>Selamat datang ".$_COOKIE['username'].", nama saya Mr. PHP. <br>Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h2>";
	?>
	<!-- <?php echo $a ?>  -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div>
			<input type="hidden" name="angka" value="<?php echo $a ?>">
			<input type="number" name="tebakan" placeholder="Coba Tebak Angkanya...">
			<input type="submit" name="cek" value="Cek"><br>
			<span class="help-block <?php echo (!empty($output)) ? 'has-error' : ''; ?>"><?php echo $output;?></span>
		</div><br>
			<a href="logout.php">Logout</a>
	</center>
<?php } else {
	// jika cookie username belum ada, munculkan form
?>
	<h1>Welcome to my site</h1>
	<p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
	<p>Login dulu ya!</p>
	<form method="post" action="index.php">
		Username <input type="text" name="username"><br>
		Password <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Login"><br>
		<span class="help-block <?php echo (!empty($gagal)) ? 'has-error' : ''; ?>"><?php echo $gagal;?></span>
	</form>	
<?php	
}

?>
</body>
</html>
