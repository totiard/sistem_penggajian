<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$id_detail = $_GET['id_detail'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM detail_gaji WHERE id_detail='$id_detail'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
