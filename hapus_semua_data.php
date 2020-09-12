<?php 

	include 'koneksi.php';
	$query = mysqli_query($conn,"TRUNCATE mahasiswa");
	header("Location:./tampil_biodata.php");

 ?>