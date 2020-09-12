<?php 
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id` = $id");
if ($query) {
	echo '<link rel="stylesheet" href="http://localhost/bootstrap4/dist/css/bootstrap.min.css">
			<div class="container">
				<div class="alert mt-2 alert-danger alert-dismissible fade show" role="alert">
				  <strong> Data Berhasil DIhapus!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<a class="m-2 btn btn-danger btn-sm" href="./form_biodata.php">Kembali Ke Form</a>
				<a class="m-2 btn btn-primary btn-sm" href="./tampil_biodata.php">Lihat Biodata</a>
			</div>';
}



 ?>