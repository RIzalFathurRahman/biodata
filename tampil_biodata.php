<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampilan Biodata</title>
	<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container p-2">
		
		<h1>List Mahasiswa</h1>

		<table class="table table-bordered table-sm tablle-hover">
			<thead>
				<tr class="text-center thead-dark">
					<th width="20px">#</th>
					<th>Nama</th>
					<th>TTL</th>
					<th>Alamat</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					 $no = 1;
					 $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
					 while($row = mysqli_fetch_assoc($result)){
				 ?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['ttl']; ?></td>
						<td><?= $row['alamat']; ?></td>
						<td><a href="./edit_biodata.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a></td>
						<td>
							<a href="./hapus.php?id=<?= $row['id']; ?>">
								<div class="btn btn-danger btn-sm" onclick="return(confirm('Anda yakin ingin menghapus data tersebut?'))"> Hapus </div>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>		
		<a class="btn btn-warning" href="./form_biodata.php">Kembali Ke Form Biodata</a>
		<a href="./hapus_semua_data.php" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Semua Data?')">Hapus Semua Data</a>
	</div>
	<script href="http://localhost/bootstrap4/assets/js/vendor/jquery.min.js"></script>
</body>
</html>