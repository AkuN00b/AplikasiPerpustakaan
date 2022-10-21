<?php
include "../koneksi.php";
require('../fpdf184/fpdf.php');

$data = $_GET['search'];

//Menampilkan data dari tabel di database
$result = mysqli_query($koneksi, "SELECT * FROM vendor WHERE nama LIKE '%" . $data . "%'");

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_nama = "";
$column_alamat = "";
$column_telp = "";
$column_email = "";

//For each row, add the field to the corresponding column
while ($row = mysqli_fetch_array($result))
{
  $id = $row['id'];
  $nama = $row['nama'];
  $alamat = $row['alamat'];
  $telp = $row['telp'];
  $email = $row['email'];   

  $column_id = $column_id.$id."\n";
  $column_nama = $column_nama.$nama."\n";
  $column_alamat = $column_alamat.$alamat."\n";
  $column_telp = $column_telp.$telp."\n";
  $column_email = $column_email.$email."\n";    

  //Create a new PDF file
}

$pdf = new FPDF('P', 'mm', array(210,297)); // L For Landscape / P For Portrait
  $pdf->AddPage();

  //Menambahkan Gambar
  //$pdf->Image('../foto/logo.png',10,10,-175);
  $pdf->SetFont('Arial', 'B', 13);
  $pdf->Cell(80);
  $pdf->Cell(30, 10, 'Data Vendor', 0, 0, 'C');
  $pdf->Ln();

  $pdf->Cell(80);
  $pdf->Cell(30, 10, 'PT. DarkWeb Cikarang', 0, 0, 'C');
  $pdf->Ln();

//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110, 180, 230);

//Bold Font for Field Name
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25, 8, 'ID', 1, 0, 'C', 1);
$pdf->SetX(30);
$pdf->Cell(40, 8, 'Nama', 1, 0, 'C', 1);
$pdf->SetX(70);
$pdf->Cell(25, 8, 'Alamat', 1, 0, 'C', 1);
$pdf->SetX(95);
$pdf->Cell(25, 8, 'Telepon', 1, 0, 'C', 1);
$pdf->SetX(120);
$pdf->Cell(50, 8, 'Email', 1, 0, 'C', 1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial', '', 10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25, 6, $column_id, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(40, 6, $column_nama, 1, 'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(25, 6, $column_alamat, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(25, 6, $column_telp, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(50, 6, $column_email, 1, 'L');

$pdf->Output();
?>