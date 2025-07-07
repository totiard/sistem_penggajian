<?php
// koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form
$kode_karyawan = $_POST['kode_karyawan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$no_rekening = $_POST['no_rekening'];
$rek_bank = $_POST['rek_bank'];
$id_perusahaan = $_POST['id_perusahaan'];

// update data di tabel karyawan
mysqli_query($koneksi, "
    UPDATE karyawan SET
        nama = '$nama',
        alamat = '$alamat',
        jabatan = '$jabatan',
        no_telp = '$no_telp',
        email = '$email',
        no_rekening = '$no_rekening',
        rek_bank = '$rek_bank',
        id = '$id_perusahaan'
    WHERE kode_karyawan = '$kode_karyawan'
");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
