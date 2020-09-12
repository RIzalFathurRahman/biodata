<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biodata</title>
	<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Biodata</h1>
		<form action="./simpan_biodata.php" method="POST">
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" name="nama" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">TTL</label>
				<input type="text" name="ttl" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" name="alamat" class="form-control" required="">
			</div>
			<input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
			<input type="reset" name="reset" value="Reset" class="btn btn-danger">
			<a href="./tampil_biodata.php" class="btn btn-success">Lihat Biodata</a>
		</form>
	</div>

	<script href="http://localhost/bootstrap4/assets/js/vendor/jquery.min.js"></script>
</body>
</html>