<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="card mx-auto" style="width: 100%;">
			<div class="card-header">
				<a href="tambah.php" class="btn btn-info" style="float: right;">Tambah Data</a>
				<h3>Tabel Daftar Karyawan</h3>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" style="width: 110%;">
						<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Nama</th>                  
							<th>Email</th>
							<th>Telepon</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th style="text-align: center;"><b>Aksi</b></th>
						</tr>
						</thead>
						<?php include 'config.php'; 
						$tampil = "SELECT * FROM karyawan";
						$show = $conn->query($tampil);
						if ($show->num_rows > 0){
							$no = 1;

							while ($row = $show->fetch_assoc()) {
						?>
						<tbody>
							<th scope="row"><?php echo $no++?></th>
							<th><?php echo $row['nama']?></th>
							<th><?php echo $row['email']?></th>
							<th><?php echo $row['telepon']?></th>
							<th><?php echo $row['alamat']?></th>
							<th><?php echo $row['jenis_kelamin']?></th>
							<th><?php echo $row['tempat_lahir']?></th>
							<th><?php echo $row['tanggal_lahir']?></th>
							<th style="text-align: center;">
							<a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</a>							
							<a href="hapus.php?id=<?php echo $row['id']?>" class="btn btn-danger">Hapus</a>
							</th>
						</tbody>
						<?php }} ?>
					</table>
				</div>
	     	</div>
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