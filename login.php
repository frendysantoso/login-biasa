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
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" name="tombol">Login</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
