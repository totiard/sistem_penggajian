<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO perusahaan (nama, alamat, no_telp, email) VALUES ('$nama', '$alamat', '$no_telp', '$email')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
