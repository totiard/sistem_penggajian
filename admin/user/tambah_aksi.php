<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$nama_user = $_POST['nama_user'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO user (nama_user, password) VALUES ('$nama_user', '$password')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
