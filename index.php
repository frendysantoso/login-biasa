<?php 
session_start();
require 'koneksi.php';

if (!isset($_SESSION['login'])) {
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Utama</title>
</head>
<body>
	<h1>www.frendysantoso.blogspot.com</h1>
	Selamat datang <strong><?= $_SESSION['login']; ?></strong><br>
	<a href="logout.php">Logout</a>
</body>
</html>