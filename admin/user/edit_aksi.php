<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_user', password='$password' WHERE id_user='$id_user'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
