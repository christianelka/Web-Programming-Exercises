<?php 
if (isset($_POST['submit'])) {
	$nama 			= $_POST['nama'];
	$email 			= $_POST['email'];
	$telepon 		= $_POST['telepon'];
	$alamat 		= $_POST['alamat'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
	$tempat_lahir  	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir'];

	include 'config.php';
	$tambah = "INSERT INTO karyawan (nama, email, telepon, alamat, jenis_kelamin, tempat_lahir, tanggal_lahir) VALUES ('$nama', '$email', '$telepon', '$alamat', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir')";
	mysqli_query($conn, $tambah);
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <style>
    	@media screen and (min-width: 1201px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .container {
          margin-top: 5%;
        } 
      }
      @media screen and (max-width: 1200px) {
          .container {
          margin-top: 40%;
      } 
    </style>
</head>
<body>
	<div class="container">
		<div class="card mx-auto" style="width: 100%;">
			<div class="card-header">
				<a href="index.php" class="btn btn-info" style="float: right;">Kembali</a>
				<h3>Tambah Daftar Karyawan</h3>
			</div>
			<form method="POST" action="tambah.php">
				<div class="card-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="number" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin" required>
							<option>Pria</option>
							<option>Wanita</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tempat / Tanggal Lahir</label>
						<div class="input-group mb-3">
						    <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
						    <input type="date" class="form-control" name="tanggal_lahir" required>
						 </div>
					</div>
					<hr>
					<button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
		     	</div>
	     	</form>
	     </div>
	     <footer class="page-footer font-small blue fixed">
	        <div class="footer-copyright text-center py-3">
	            Ini Footer 
	            <a href="mailto:anelka@sgbteam.id">Nel</a>
	        </div>
	    </footer>
     </div>
</body>
</html>