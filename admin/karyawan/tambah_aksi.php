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

// menginput data ke tabel karyawan
mysqli_query($koneksi, "
    INSERT INTO karyawan 
    (
        kode_karyawan,
        nama,
        alamat,
        jabatan,
        no_telp,
        email,
        no_rekening,
        rek_bank,
        id
    ) 
    VALUES 
    (
        '$kode_karyawan',
        '$nama',
        '$alamat',
        '$jabatan',
        '$no_telp',
        '$email',
        '$no_rekening',
        '$rek_bank',
        '$id_perusahaan'
    )
");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
