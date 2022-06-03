<?php 
session_start();
require 'fungsi.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if($key == hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION['login'])){
    header('Location: '. BASEURL . '/home');
    exit;
}

if(isset($_POST["login"])){
    // bikin variabel biar gak ribet ada post nya
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE
            username = '$username'");

    // kalau ditemukan barisnya
     if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            // buat ngecek password dengan hasil enkripsinya
            if(password_verify($password, $row["password"])){
                $_SESSION['login'] = true;
                if(isset($_POST['remember'])){
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['usernames'], time()+60));
                }
                header('Location: '. BASEURL . '/home'); 
                exit;
            }
     }
     $error = true;
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<h1>Login Admin</h1>

    <!-- USERNAME/PASSWORD SALAH -->
 	<?php if(isset($error)): ?>
 	<p style="color: red; font-style: italic">username/password salah!</p>
	<?php endif ?>

    <!-- FORM -->
 	<ul>
 	<form action="<?= BASEURL; ?>/home" method="post">
 		<li>
 			<label>username:</label>
 			<input type="text" name="username">
 		</li>
 		<li>
 			<label>password:</label>
 			<input type="password" name="password">
 		</li>
        <li>
            <input type="checkbox" name="remember">
            <label for="remember">Remember me</label>
        </li>
 		<li>
 			<button type="submit" name="login"> Login</button>
 		</li>
 	</form>
 	</ul>
 </body>
 </html>