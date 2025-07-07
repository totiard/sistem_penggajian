<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$no_ref = $_GET['no_ref'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM slip_gaji WHERE no_ref='$no_ref'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
