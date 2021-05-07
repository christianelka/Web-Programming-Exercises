<?php 
if (isset($_POST['submit'])){
$id 			= 	$_POST['id'];
$nama 			=	$_POST['nama'];
$email 			=	$_POST['email'];
$telepon 		=	$_POST['telepon'];
$alamat 		=	$_POST['alamat'];
$jenis_kelamin	= 	$_POST['jenis_kelamin'];
$tempat_lahir 	= 	$_POST['tempat_lahir'];
$tanggal_lahir	= 	$_POST['tanggal_lahir'];

include "config.php";

$update = "UPDATE karyawan SET nama='$nama', email='$email', telepon='$telepon', alamat='$alamat', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id='$id'";

$query = mysqli_query($conn, $update);

if ($query){
	// echo "Berhasil Update Data, Harap Tunggu";
	header("Location:index.php");
} else {
	// echo "Gagal Update Data, Harap Tunggu";
	header("Location:index.php");
}

}?>
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
				<h3>Edit Data Karyawan</h3>
			</div>
			<?php
			include "config.php";
			$lihat = "SELECT * FROM karyawan WHERE id='$_GET[id]'";
			$query = mysqli_query($conn, $lihat);
			$row = mysqli_fetch_array($query);
			?>
			<form method="POST" action="edit.php">
				<div class="card-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input type="number" class="form-control" name="telepon" value="<?php echo $row['telepon']; ?>" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>" required>
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
						    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>
						    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
						 </div>
					</div>
					<hr>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<button type="submit" class="btn btn-success" name="submit">Update Data</button>
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