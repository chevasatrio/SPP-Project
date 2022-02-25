<?php
session_start();
unset($_SESSION['id_petugas']);
unset($_SESSION['nama_petugas']);
unset($_SESSION['level']);
$_SESSION['proses_login.php']=false;
session_destroy();
header("location: ../login.php");
?>