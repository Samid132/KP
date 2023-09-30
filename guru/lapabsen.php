<?php
include './../views/config.php';
require('../pdf/fpdf.php');
date_default_timezone_set('Asia/Jakarta');
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('https://i.ibb.co/nPTPMhS/download.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'SMPN 38 KOTA BEKASI',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 021-3041-3000',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jl. K.H. Mas Mansyur No.Kav.33, RW.2, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : - email : roche@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Absensi Siswa",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("d/m/Y | H:i"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(4, 0.8, 'Nama Siswa', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jadwal', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jadwal Masuk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jam Masuk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jam Pulang', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Ket Masuk', 1, 1, 'C');

$pdf->SetFont('Arial','',10);

$no = 1;
$absen = mysqli_query($koneksi, "SELECT * FROM absen WHERE id_absen ;");
while ($a = mysqli_fetch_array($absen)) {
  $id_user = $a['id_user'];
  $table_user = mysqli_query($koneksi, "SELECT idsr_nama FROM table_user WHERE id_user = $id_user");
  $tk = mysqli_fetch_assoc($table_user); 
  $id_jadwal = $a['id_jadwal'];
  $jadwal = mysqli_query($koneksi, "SELECT nama_jadwal,jam_masuk,jam_pulang FROM jadwal WHERE id_jadwal = $id_jadwal");
  $j = mysqli_fetch_assoc($jadwal); 
	
  $pdf->Cell(4, 0.8, $tk['idsr_nama'] , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $j['nama_jadwal'], 1, 0, 'C');
    $pdf->Cell(3, 0.8, $j['jam_masuk'], 1, 0, 'C');
	$pdf->Cell(3, 0.8, $a['jam_masuk'], 1, 0, 'C');
	$pdf->Cell(3, 0.8, $a['jam_pulang'], 1, 0, 'C');
	$pdf->Cell(3, 0.8, $a['ket_masuk'], 1, 1, 'C');

	
	
}
$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"Tanggal: ".date("d/m/Y"),0,0,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"Mengetahui",0,10,'C');

$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40.5,0.7,"SMPN 38 KOTA BEKASI",0,10,'C');


$pdf->Output("LAPORAN_Absensi.pdf","I");

?>

