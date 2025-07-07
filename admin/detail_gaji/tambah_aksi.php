<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$no = $_POST['no'];
$no_ref = $_POST['no_ref'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO detail_gaji (no, no_ref, nominal) VALUES ('$no', '$no_ref', '$nominal')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
