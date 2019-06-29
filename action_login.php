<?php 
session_start();
require 'koneksi.php';

if (isset($_POST['tombol'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) OR empty($password)) {
		header("location:login.php?gagal=Username atau password tidak boleh kosong");
	} else {
		$query = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ORDER BY id DESC LIMIT 1");
		if (mysqli_num_rows($query) === 1) {
			$_SESSION['login'] = $username;
			header("location:index.php");
		} else {
			header("location:login.php?gagal=username atau password salah");
		}
	}

}
?>