<?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$jenis = $_POST['jenis'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO jenis_buku (nama) VALUES('$jenis')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:jenisBuku.php");
?>