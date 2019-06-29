<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if (isset($_GET['gagal'])): ?>
	<span style="color: red; font-style: italic;"><?= $_GET['gagal']; ?></span>
	<?php endif ?>
	<form action="action_login.php" method="POST">
		Username : <input type="text" name="username"> <br>
		Password : <input type="password" name="password"> <br>
		<button type="submit" name="tombol">Login</button>
	</form>
</body>
</html>