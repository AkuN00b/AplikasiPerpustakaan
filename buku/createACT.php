<?php
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$nama = $_POST['nama'];
	$jenis_buku = $_POST['jenis_buku'];
	$vendor = $_POST['vendor'];
	$jml_stok = $_POST['jml_stok'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO buku (nama, jenis_buku, vendor, jml_stok) VALUES ('$nama', '$jenis_buku', '$vendor', '$jml_stok')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:buku.php");
?>