<?php 
require 'fungsi.php';

// kalau dah teken register
if(isset($_POST["register"])){
	if(registrasi($_POST)>0){
		echo "<script>
				alert('user baru berhasil ditambahkan!');
				</script>";
	} else{
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>

	<!-- FORM -->
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">username:</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password:</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">password2:</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">register!</button>
			</li>
		</ul>
	</form>
</body>
</html>