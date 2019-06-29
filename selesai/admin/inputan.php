<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<div class="konten">
		<div class="kepala">
			<h2 class="judul">Input Barang</h2>
		</div>
		<div class="artikel">
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="group">
					<label for="email">Nama Barang</label>
					<input type="text" placeholder ="Masukan Barang" name="name">
				</div>
				<div class="group">
					<label for="kode">ID</label>
					<input type="text" placeholder="Kode" name="id">
				</div>
				<div class="group">
					<label for="Harga">Price</label>
					<input type="text" placeholder="Harga" name="price">
				</div>
				<div class="group">
					<label for="Harga">gambar</label>
					<input type="file" name="file" >
				</div>
				
				<div class="group">
				<input type="submit" value="Ok">
				
			</form>
		</div>
	</div>
</body>
</html>