<?php  
session_start();

if(!isset($_SESSION['login'])){
	header("Location: login.php");
	exit;
}

require 'functions.php';

$berita = query("SELECT * FROM berita");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Berita</title>
</head>
<body>

	<h1>Update Berita</h1>
	<a href="tambah_berita.php">Tambah Berita</a>
	<table border="1" cellpadding="1" cellspacing="0">
		
		<tr>
			<th>No. </th>
			<th>Aksi</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Isi Berita</th>
		<?php $i = 1; ?>
		</tr>
		<?php foreach($berita as $row): ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<a href="sunting_berita.php?id=<?= $row['id'] ?>">Sunting</a>
					<a href="#">Hapus</a>
				</td>
				<td><?php echo $row['judul_berita']; ?></td>
				<td><?php echo $row['penulis']; ?></td>
				<td><?php echo $row['isi_berita']; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>


	</table>


</body>
</html>