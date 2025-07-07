<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$id_perusahaan = $_POST['id_perusahaan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

// update data ke database
mysqli_query($koneksi, "UPDATE perusahaan SET nama='$nama', alamat='$alamat', no_telp='$no_telp', email='$email' WHERE id_perusahaan='$id_perusahaan'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
