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
                <h2>Data Detail Gaji</h2>
                <h4>Halaman untuk melihat rincian komponen pada setiap slip gaji.</h4>
            </div>
        </div>
        <hr />
        
        <?php // === AWAL BAGIAN ADVANCED TABLE === ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="display: flex; justify-content: space-between; align-items: center;">
                         <span>Daftar Rincian Gaji</span>
                         <a href="tambah.php" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah Data
                         </a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Debit/Kredit</th>
                                        <th>No Referensi Slip Gaji</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../../koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "
                                        SELECT 
                                            detail_gaji.id_detail,
                                            detail_gaji.no,
                                            keterangan_gaji.keterangan,
                                            keterangan_gaji.debitkredit,
                                            detail_gaji.no_ref,
                                            detail_gaji.nominal
                                        FROM detail_gaji
                                        LEFT JOIN keterangan_gaji ON detail_gaji.no = keterangan_gaji.no
                                    ");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['keterangan']; ?></td>
                                        <td><?php echo ucfirst($d['debitkredit']); ?></td>
                                        <td><?php echo $d['no_ref']; ?></td>
                                        <td>Rp <?php echo number_format($d['nominal'],0,',','.'); ?></td>
                                        <td>
                                            <a href="edit.php?id_detail=<?php echo $d['id_detail']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="hapus.php?id_detail=<?php echo $d['id_detail']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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