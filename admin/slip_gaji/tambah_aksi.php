<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$tgl = $_POST['tgl'];
$total_gaji = $_POST['total_gaji'];
$kode_karyawan = $_POST['kode_karyawan'];

// menginput data ke tabel slip_gaji
mysqli_query($koneksi, "
    INSERT INTO slip_gaji (
        tgl, 
        total_gaji, 
        kode_karyawan
    ) VALUES (
        '$tgl',
        '$total_gaji',
        '$kode_karyawan'
    )
");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
