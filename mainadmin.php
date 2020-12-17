<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])){
	header('Location: login.php');
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>SELAMAT DATANG ADMIN</h1>

	<a href="#">Update Profil</a>
	<a href="#">Update Pemerintahan</a>
	<a href="update_berita.php">Update Berita</a>
	
</body>
</html>