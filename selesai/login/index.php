
	<!DOCTYPE html>
	<html>

	<head>
		<title>Desain from login</title>

		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="konten">
			<div class="kepala">
				<h2 class="judul">sign in</h2>
			</div>
			<div class="artikel">
				<form action="proses.php" method="post">
					<div class="group">
						<label for="email">Username</label>
						<input type="text" name="username" placeholder="Masukan UserName Anda">
					</div>
					<div class="group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Masukan Password Anda">
					</div>
					<div class="group">
						<input type="submit" value="sign in">
						<a href="../index.html">logout</a>

				</form>
			</div>
		</div>
	</body>

	</html>