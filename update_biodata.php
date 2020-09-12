<?php 
// konek ke database
include 'koneksi.php';

// cek apakah tombol update sudah ditekan
if (isset($_POST['update'])) {
	
	// tangkap inputan user
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['alamat'];

	// cek apakah semua data diisi / belum
	if (($id && $nama && $ttl && $alamat) == NULL) {
		echo "ISI DATA TERLEBIH DAHULU!";
		echo '<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">';
		echo '<a class="btn btn-danger btn-sm m-4" href="./edit_biodata.php">Kembali</a>';
	}else{
		// var_dump ($nama,$ttl,$alamat);exit();

		// query untuk insert data
		$mysqli = "
			UPDATE `mahasiswa`
				 SET `nama` = '$nama',
			 		 `ttl` = '$ttl',
			 	 	`alamat` = '$alamat'
			 WHERE `mahasiswa`.`id` = $id; 
		";
		$result = mysqli_query($conn,$mysqli);
		
		// jika berhasil
		if ($result) {
			echo '
				<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
				<div class="container">
					<div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
					  <strong> Update berhasil!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<a class="m-2 btn btn-danger btn-sm" href="./form_biodata.php">Kembali</a>
					<a class="m-2 btn btn-primary btn-sm" href="./tampil_biodata.php">Lihat Biodata</a>
				</div>
			';
		// jika gagal
		}else{
			echo '
				<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
				<div class="container">
					<div class="alert mt-2 alert-danger alert-dismissible fade show" role="alert">
					  <strong> Update GAGAL!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<a class="m-2 btn btn-danger btn-sm" href="./form_biodata.php">Kembali</a>
				</div>
			';
		}

		// menutup koneksi ke database
		mysqli_close($conn);
	}
}

 ?>