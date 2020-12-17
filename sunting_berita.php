<?php 
require 'functions.php';

//ambil data di url
$id = $_GET['id']
;
//query data berita berdasarkan id
$berita = query("SELECT * FROM berita WHERE id = $id")[0];

// apakah tombol simpan sudah ditekan
if(isset($_POST['simpan'])){
	if (sunting_berita($_POST>0)) {
		echo "Berita Berhasil Diubah";
	}else{
		echo "Berita Gagal Diubah";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sunting Berita</title>
</head>
<body>
	<h1>Sunting Berita</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $berita['id'];?>">
		<ul>
			<li>
				<label for="judul_berita">Judul Berita: </label>
				<input type="text" name="judul_berita" id="judul_berita" required value="<?= $berita['judul_berita'];?>">
			</li>
			<li>
				<label for="penulis">Penulis</label>
				<input type="text" name="penulis" id="penulis" required value="<?= $berita['penulis']; ?>">
			</li>
			<li>
				<label for="isi_berita">Isi Berita</label>
				<input type="text" name="isi_berita" id="isi_berita" required value="<?= $berita['isi_berita'];?>">
			</li>
			<li>
				<button type="submit" name="simpan">SIMPAN</button>
			</li>
		</ul>
	</form>
	<a href="update_berita.php">Kembali</a>
</body>
</html>