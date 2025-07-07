<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$id_detail = $_POST['id_detail'];
$no = $_POST['no'];
$no_ref = $_POST['no_ref'];
$nominal = $_POST['nominal'];

// update data ke database
mysqli_query($koneksi, "UPDATE detail_gaji SET no='$no', no_ref='$no_ref', nominal='$nominal' WHERE id_detail='$id_detail'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
