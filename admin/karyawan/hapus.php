<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$kode_karyawan = $_GET['kode_karyawan'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM karyawan WHERE kode_karyawan='$kode_karyawan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
