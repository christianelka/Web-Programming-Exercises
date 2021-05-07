<?php 
$output = $gagal = "";
// $users = array(
//             array("anelka", "Christian Anelka", "anelka"),
//             array("username1", "Rosihan Ari Yuana", "123456"),
//             array("username2", "Dwi Amalia Fitriani", "654321"),
//             array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
//          );

if (isset($_POST['submit'])){
    // $username = $_POST['username'];
    // $password = $_POST['password'];

    // proses pengecekan ada tidaknya username dan password 
    // dalam daftar user
    // foreach ($users as $profile_user) {
    //     if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
    //         // jika ada yg match maka bikin session untuk simpan nama user
    //         $_SESSION['namauser'] = $profile_user[1];
            setcookie("username", $_POST['username'], time()+3*30*24*3600,"/");
            setcookie("email", $_POST['email'], time()+3*30*24*3600,"/");
            setcookie("skor", 0, time()+3*30*24*3600,"/");
            setcookie("nyawa", 5, time()+3*30*24*3600,"/");
            // redirect halaman ke page1.php
            header("Location: tebak.php");
        // } else {
        //     $gagal = "Wah gagal login nih, coba lagi ya!";
}

// jika sudah ada cookie username
if (isset($_COOKIE['username']) == FALSE){
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
            <div class="container mx-auto">
              <h2>Hai! Masuk dulu yuk!</h2>
              <form method="post" action="index.php">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Masukkan Username" name="username">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                <!-- <span class="help-block <?php echo (!empty($gagal)) ? 'has-error' : ''; ?>"><?php echo $gagal;?></span> -->
              </form>
            </div>
            <?php } else {
                header("Location: welcome.php"); 
            }?>
            <footer class="page-footer font-small blue fixed">
                <div class="footer-copyright text-center py-3">
                    <i class="fa fa-bolt" aria-hidden="true"></i> Ini Footer 
                    <a href="mailto:anelka@sgbteam.id">Nel</a>
                </div>
            </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
