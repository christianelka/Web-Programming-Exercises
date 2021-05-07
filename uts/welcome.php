<title>K3519021 - UTS Pemweb</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/bootstrap.css" /> 
<link rel="stylesheet" href="assets/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/bootstrap-validator.css" />
<link rel="stylesheet" href="assets/theme.css" />';
<body>
<div class="container mx-auto">
<div class="row">
	<center>
	<div class="col-md-12" style="padding-left:0;padding-right:0;">
	<div class="col-md-12">
	<div class="panel panel-default">
	<div class="panel-heading"><center>Selamat Datang Kembali!</center></div>
	<div class="panel-body">
	    <div class="form-group">
	                	<h4>Hallo <?php echo $_COOKIE['username'] ?> , selamat datang kembali di permainan ini!!!</h4><hr>
						<a href="tebak.php">
                            <button type="button" class="btn btn-info" id="resetBtn"><i class="fa fa-arrow-circle-left fa-fw"></i> Start Game</button>
                        </a><br><hr>
						<h5><b>Bukan Anda? <a href="logout.php">klik di sini</a></b></h5><hr>
	    </div>
	</div>
	</div>
	</div>
	</div>
	</center>
</div>
</div>
	<footer class="page-footer font-small blue fixed">
		<div class="footer-copyright text-center py-3">
			<i class="fa fa-bolt" aria-hidden="true"></i> Ini Footer 
			<a href="mailto:anelka@sgbteam.id">Nel</a>
		</div>
	</footer>	
</body>