<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));	// gaboleh pake garis miring
	$password = mysqli_real_escape_string($conn, $data["password"]);	// boleh pake ""
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// kalau username sudah ada sebelumnya
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('username sudah terdaftar!')
			<script>";
		return false;
	}

	// konfirmasi password
	if($password !== $password2){
		echo "<script>
			alert('konfimrasi password tidak sesuai');
			</script>";
		return false;
	}

	// enkripsi password, kalau pake md5 mudah diretas
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')"); // id auto increment, kosongkan
	return mysqli_affected_rows($conn);
}

 ?>