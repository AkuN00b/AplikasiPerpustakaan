<?php
  $idjenis = $_POST['idjenis'];
  $jenis = $_POST['jenis'];
  $temp = "p";


  $file = fopen("../assets/jenisatk.txt", "a");
  fwrite($file, $idjenis . "|" . $jenis . "|" . $temp . PHP_EOL);
  fclose($file);
  header("Location: jenisAtk.php");
?>