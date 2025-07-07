<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$no_ref = $_POST['no_ref'];
$tgl = $_POST['tgl'];
$total_gaji = $_POST['total_gaji'];
$kode_karyawan = $_POST['kode_karyawan'];

// update data ke database
mysqli_query($koneksi, "UPDATE slip_gaji SET tgl='$tgl', total_gaji='$total_gaji', kode_karyawan='$kode_karyawan' WHERE no_ref='$no_ref'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
