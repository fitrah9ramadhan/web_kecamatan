<?php 
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '','kec-balocci');
//ambil data dari tabel admin
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows [] = $row;
	}
	return $rows;
}

function tambah_berita($data){
	global $conn;

	$judul_berita = htmlspecialchars($data['judul_berita']);
	$penulis = htmlspecialchars($data['penulis']);
	$isi_berita = htmlspecialchars($data['isi_berita']);

	$query = "INSERT INTO berita VALUES ('', '$judul_berita', '$penulis', '$isi_berita');";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function sunting_berita($data){
	global $conn;

	$id = $data['id'];
	$judul_berita = $data['judul_berita'];
	$penulis = $data['penulis'];
	$isi_berita = $data['isi_berita'];

	$query = "UPDATE berita SET 
				judul_berita = '$judul_berita',
				penulis = '$penulis',
				isi_berita = '$isi_berita'
				WHERE id = '$id'
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>