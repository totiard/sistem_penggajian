<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$keterangan = $_POST['keterangan'];
$debitkredit = $_POST['debitkredit'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO keterangan_gaji (keterangan, debitkredit) VALUES ('$keterangan', '$debitkredit')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>

