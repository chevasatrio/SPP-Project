<?php
session_start();
$conn = mysqli_connect('localhost','root','');

$username = stripslashes($_POST['username']);
$password = md5 ($_POST['password']);
$query = "SELECT * FROM user where username='$username AND password = '$password'";
$row = mysqli-query($conn,$query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);

if($cek > 0){
	if($data['role'] == 'admin'){
		$_SESSION['role']='admin';
		$_SESSION['username']=$data['username'];
		$_SESSION['user_id']=$data['id_user'];
		header ('location:admin');

	}else if($data['role'] == 'petugas'){
		$_SESSION['role']='petugas';
		$_SESSION['username']=$data['username'];
		$_SESSION['user_id']=$data['id_user'];
		header ('location:petugas');

	}else if($data['role'] == 'siswa'){
		$_SESSION['role']='siswa';
		$_SESSION['username']=$data['username'];
		$_SESSION['user_id']=$data['id_user'];
		header ('location:siswa');

	}
}else{
	$msg = 'Username Atau Password Salah';
	header('location:index.php?msg='.$msg);
}