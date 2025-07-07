<?php
include '../koneksi.php';
// === MEMANGGIL HEADER ===
// Bagian ini mencakup tag <head>, metadata, CSS, dan navigasi bagian atas.
include '../assets/partials/header.php';

// === MEMANGGIL SIDEBAR ===
// Bagian ini berisi semua menu navigasi di sisi kiri.
include '../assets/partials/sidebar.php';
?>

<?php
// Query hitung total buku
$perusahaan_result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM perusahaan");
$perusahaan = mysqli_fetch_assoc($perusahaan_result)['total'];

// Query hitung total kategori buku
$karyawan_result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM karyawan");
$karyawan = mysqli_fetch_assoc($karyawan_result)['total'];

?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
                <h4>Selamat Datang Admin. </h4>
            </div>
        </div>
        <hr>

        <?php // === AWAL BAGIAN PANEL INFO CEPAT (4 KOLOM) === ?>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-book"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text"><?php echo $perusahaan; ?> Perusahaan</p>
                        <a href="perusahaan" class="text-muted">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-tags"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text"><?php echo $karyawan; ?> Karyawan</p>
                        <a href="karyawan" class="text-muted">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <?php // === AKHIR BAGIAN PANEL INFO CEPAT === ?>

    </div>
</div>


<?php
// === MEMANGGIL FOOTER ===
// Bagian ini berisi semua script JS dan tag penutup HTML.
include '../assets/partials/footer.php';
?>