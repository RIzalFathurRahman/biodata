<?php 
// konek ke database
include 'koneksi.php';

// cek apakah tombol daftar sudah ditekan
if (isset($_POST['daftar'])) {
	
	// tangkap inputan user
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['alamat'];

	// cek apakah semua data diisi / belum
	if (($nama && $ttl && $alamat) == NULL) {
		echo "ISI DATA TERLEBIH DAHULU!";
		echo '<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">';
		echo '<a class="btn btn-danger btn-sm m-4" href="./form_biodata.php">Kembali</a>';
	}else{
		// var_dump ($nama,$ttl,$alamat);exit();

		// query untuk insert data
		$mysqli = "INSERT INTO `mahasiswa` (`id`, `nama`, `ttl`, `alamat`) VALUES (NULL, '$nama', '$ttl', '$alamat');";
		$result = mysqli_query($conn,$mysqli);
		
		// jika berhasil
		if ($result) {
			echo '
				<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
				<div class="container">
					<div class="alert mt-2 alert-success alert-dismissible fade show" role="alert">
					  <strong> Input berhasil!</strong>
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
					  <strong> Input GAGAL!</strong>
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