<?php 
$koneksi = mysqli_connect("localhost:3307","root","","perpustakaan_2022");
 
// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
	// echo "Koneksi berhasil !!";
}
 
?>