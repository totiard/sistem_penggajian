<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$no = $_GET['no'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM keterangan_gaji WHERE no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
