<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$id_perusahaan = $_GET['id_perusahaan'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
