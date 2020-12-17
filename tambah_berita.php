<?php 
require 'functions.php';

//apakah tombol tambah sudah ditekan
if(isset($_POST['tambah_berita'])){

	if(tambah_berita($_POST)>0){
		echo "Berita berhasil ditambah";
	} else {
		echo "Berita gagal ditambahkan";
	}
}


var_dump($_POST);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Tambah Berita</title>
</head>
<body>

	<h1>Tambah Berita</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="judul">Judul</label>
				<input type="text" name="judul_berita" id="judul_berita">
			</li>
			<li>
				<label for="penulis">Penulis</label>
				<input type="text" name="penulis" id="judul">
			</li>
			<li>
				<label for="isi_berita">Isi Berita</label>
				<input type="text" name="isi_berita" id="isi_berita">
			</li>
			<li>
				<button type="submit" name="tambah_berita">TAMBAH</button>
			</li>
		</ul>
	</form>
</body>
</html>