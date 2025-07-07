<?php
// koneksi database
include '../../koneksi.php';

// menangkap data id yang dikirim dari url
$id_user = $_GET['id_user'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
