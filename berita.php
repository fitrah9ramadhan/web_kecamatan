<?php 
require 'functions.php';

$berita = query("SELECT * FROM berita");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Berita</title>
</head>
<body>

<?php $i = 1; ?>
	<?php foreach ($berita as $item) : ?>
		<h1><?php echo $item['judul_berita']; ?></h1>
		<h5><?php echo $item['penulis']; ?></h5>
		<p><?php echo $item['isi_berita']; ?></p>
	<?php endforeach; ?>
<?php $i++; ?>
</body>
</html>