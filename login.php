<?php 
session_start();
require 'functions.php';

//cek apakah tombol login sudah ditekan
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

	//cek username
	if (mysqli_num_rows($result) == 1){
		//cek password
		$row = mysqli_fetch_assoc($result);
		if($password == $row['password']){

			header('Location: mainadmin.php');
			exit;
		}
	}
}

var_dump($_POST)
?>

<!DOCTYPE html>
<html>
<head>

	<title>Login Admin</title>


<?php if(isset($error)):?>
		<p>Username atau Password Salah!</p>
<?php endif; ?>

</head>
<body>

	<h2>Sistem Informasi</h2>
	<h2>Kecamatan Balocci</h2>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">LOGIN</button>
			</li>
		</ul>
	</form>

</body>
</html>