<?php 
  // koneksi database
  include '../koneksi.php';
   
  // menangkap data yang di kirim dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jenis_buku = $_POST['jenis_buku'];
  $vendor = $_POST['vendor'];
  $jml_stok = $_POST['jml_stok'];
   
  // update data ke database
  mysqli_query($koneksi, "UPDATE buku SET nama='$nama', jenis_buku='$jenis_buku', vendor='$vendor', jml_stok='$jml_stok' WHERE id='$id'");
   
  // mengalihkan halaman kembali ke index.php
  header("location:buku.php");
?>