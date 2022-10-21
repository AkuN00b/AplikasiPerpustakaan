<?php 
  // koneksi database
  include '../koneksi.php';
   
  // menangkap data yang di kirim dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
   
  // update data ke database
  mysqli_query($koneksi, "UPDATE jenis_buku SET nama='$nama' WHERE id='$id'");
   
  // mengalihkan halaman kembali ke index.php
  header("location:jenisBuku.php");
?>