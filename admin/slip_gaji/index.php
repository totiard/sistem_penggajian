<?php
// === MEMANGGIL HEADER ===
include '../../assets/partials/header.php';

// === MEMANGGIL SIDEBAR ===
include '../../assets/partials/sidebar.php';
?>


<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Slip Gaji</h2>
                <h4>Halaman untuk mengelola riwayat slip gaji karyawan.</h4>
            </div>
        </div>
        <hr />
        
        <?php // === AWAL BAGIAN ADVANCED TABLE === ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="display: flex; justify-content: space-between; align-items: center;">
                         <span>Daftar Slip Gaji</span>
                         <a href="tambah.php" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah Data
                         </a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No Ref</th>
                                        <th>Tanggal</th>
                                        <th>Total Gaji</th>
                                        <th>Nama Karyawan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../../koneksi.php';
                                    $data = mysqli_query($koneksi, "
                                        SELECT 
                                            slip_gaji.*,
                                            karyawan.nama AS nama_karyawan
                                        FROM slip_gaji
                                        LEFT JOIN karyawan ON slip_gaji.kode_karyawan = karyawan.kode_karyawan
                                    ");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $d['no_ref']; ?></td>
                                        <td><?php echo $d['tgl']; ?></td>
                                        <td>Rp <?php echo number_format($d['total_gaji'], 0, ',', '.'); ?></td>
                                        <td><?php echo $d['nama_karyawan']; ?></td>
                                        <td>
                                            <a href="edit.php?no_ref=<?php echo $d['no_ref']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="hapus.php?no_ref=<?php echo $d['no_ref']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
                                                <a href="cetak.php?no_ref=<?php echo $d['no_ref']; ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak</a>

                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php // === AKHIR BAGIAN ADVANCED TABLE === ?>
        
    </div>
</div>
<?php
// === MEMANGGIL FOOTER ===
include '../../assets/partials/footer.php';
?>