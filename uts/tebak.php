<?php 
if (!isset($_COOKIE['username'])){
    echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
    echo "<p><a href='index.php'>Login</a> dulu ya..</p>";

    // setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
    exit();
} 
$output = $gagal = "";

if (isset($_COOKIE['username']) && ($_COOKIE['nyawa'] > 0)){
    $a = rand(0,20);
    $b = rand(0,20);
function hitung_jml($a, $b){
    $c = $a + $b;
    return $c;
}    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $a          = $_POST['a'];
    $b          = $_POST['b'];
    $jawaban    = $_POST['jawaban'];
    $c = hitung_jml($a, $b);
    if ($c == $jawaban){
    $output = "Selamat ya… Anda benar, saya telah memilih bilangan $c <br><a href='tebak.php'>Soal selanjutnya</a>";
    $_COOKIE['skor']+=10;
    setcookie("skor", $_COOKIE['skor'], time()+3*30*24*3600,"/");
    } else {
        $output = "Hello " .$_COOKIE['username']. ", sayang jawaban Anda salah… tetap semangat ya !!! Jawaban kamu $jawaban <br><a href='tebak.php'>Soal selanjutnya</a>";
        $_COOKIE['nyawa']--;
        $_COOKIE['skor']-=2;
        setcookie("skor", $_COOKIE['skor'], time()+3*30*24*3600,"/");
        setcookie("nyawa", $_COOKIE['nyawa'], time()+3*30*24*3600,"/");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>K3519021 - UTS Pemweb</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/bootstrap.css" /> 
        <link rel="stylesheet" href="assets/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/bootstrap-validator.css" />
        <link rel="stylesheet" href="assets/theme.css" />
    </head>
    <body>

    <div class="d-flex" id="wrapper">
      <div class="warper container-fluid">
        <div class="page-header"><center><h3><i class="fa fa-fw fa-exclamation-circle"></i>Hello <?php echo $_COOKIE['username'] ?>, tetap semangat ya… you can do the best!!</center></div>
            <div class="row">
                <div class="col-md-6" style="padding-left:0;padding-right:0">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>Lives</center></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-heart fa-fw"></i></span>
                                        <input type="text" class="form-control" name="nyawa" value="<?php echo $_COOKIE['nyawa']?>" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>Score</center></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-plus fa-fw"></i></span>
                                        <input type="text" class="form-control" value="<?php echo $_COOKIE['skor'];?>" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>Catatan</center></div>
                            <div class="panel-body">
                                <div class="form-group">
                                            <b> Setiap kali jawaban yang diberikan salah, maka lives berkurang satu dan skor berkurang 2</b><br>
                                            <b> Setiap kali jawaban yang diberikan benar, maka skor bertambah 10</b><br>
                                            <b> Permainan berakhir (game over) jika livesnya habis</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center>Tebak Angka!</center></div>
                        <div class="panel-body">
                            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return true">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-book fa-fw"></i></span>
                                    <input type="hidden" name="a" value="<?php echo $a; ?>">
                                    <input type="hidden" name="b" value="<?php echo $b; ?>">
                                    <input type="text" class="form-control" name="soal" placeholder="Berapakah hasil dari <?php echo $a.' + '.$b. ' :';?> " required disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-question-circle fa-fw"></i></span>
                                    <input type="number" class="form-control" name="jawaban" placeholder="Jawabanmu" required />
                                </div>
                            </div>
                            <hr class="dotted">
                            <span class="help-block <?php echo (!empty($output)) ? 'has-error' : ''; ?>"><?php echo $output;?></span>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="enter" name="enter" value="enter">
                                    <i class="fa fa-edit fa-fw"></i> Submit
                                </button>
                                <a href="tebak.php">
                                    <button type="button" class="btn btn-danger" id="resetBtn"><i class="fa fa-arrow-circle-left fa-fw"></i> Reset Soal</button>
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } else if (isset($_COOKIE['username']) && ($_COOKIE['nyawa'] <= 0)){
                    setcookie("skor", $_COOKIE['skor'], time()+3*30*24*3600,"/");
                    $nama   =   $_COOKIE['username'];
                    $skor   =   $_COOKIE['skor'];

                    include("koneksi.php");

                    $sql = "INSERT INTO papan(nama, score) VALUES('$nama', '$skor')";

                    $query = mysqli_query($mysqli,$sql);
                    ?>
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
                        <div class="container mx-auto">
                            <div class="row">
                                <div class="col-md-6" style="padding-left:0;padding-right:0">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><center>Game Over</center></div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                            <b>Hello <?php echo $_COOKIE['username'];?>, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.<br>
                                                            Score Anda : <?php echo $_COOKIE['skor'];?></b><br><hr>
                                                            <a href="logout.php">
                                                                <button type="button" class="btn btn-success" id="resetBtn"><i class="fa fa-arrow-circle-left fa-fw"></i> Main Lagi</button>
                                                            </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><center>Hall of Fame</center></div>
                                        <div class="panel-body">
                                             <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                      <th>No</th>
                                                      <th>Nama</th>                  
                                                      <th>Skor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            <?php 

                                                $batas = 10;
                                                $no = 1;
                                                $data_hasil = mysqli_query($mysqli,"SELECT * FROM papan ORDER BY score DESC limit 10");
                                                while($row=mysqli_fetch_array($data_hasil)){
                                            ?>
                                                <tr>
                                                  <td><?php echo $no++?></td>
                                                  <td><?php echo $row['nama']?></td>
                                                  <td><?php echo $row['score']?></td>
                                                </tr>
                                                </tbody>
                                            <?php }?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php   
            }
            ?>
        </div>
            <footer class="page-footer font-small blue fixed">
                <div class="footer-copyright text-center py-3">
                    <i class="fa fa-bolt" aria-hidden="true"></i> Ini Footer 
                    <a href="mailto:anelka@sgbteam.id">Nel</a>
                </div>
            </footer>