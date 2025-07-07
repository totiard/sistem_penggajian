<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$no = $_POST['no'];
$keterangan = $_POST['keterangan'];
$debitkredit = $_POST['debitkredit'];

// update data ke database
mysqli_query($koneksi, "UPDATE keterangan_gaji SET keterangan='$keterangan', debitkredit='$debitkredit' WHERE no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
