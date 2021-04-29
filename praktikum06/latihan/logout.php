<?php

session_start();

// hapus semua session
session_destroy();
setcookie("username", $_POST['username'], time()-3*30*24*3600,"/");
// redirect ke halaman login
header("Location: index.php");

?>
