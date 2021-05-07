<?php

session_start();

// hapus semua session
setcookie("username", $_COOKIE['username'], time()-3*30*24*3600,"/");
setcookie("email", $_COOKIE['email'], time()-3*30*24*3600,"/");
// redirect ke halaman login
header("Location: index.php");

?>
