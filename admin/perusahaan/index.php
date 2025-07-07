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
                <h2>Data Perusahaan</h2>
                <h4>Halaman untuk mengelola data perusahaan yang terdaftar.</h4>
            </div>
        </div>
        <hr />
        
        <?php // === AWAL BAGIAN ADVANCED TABLE === ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="display: flex; justify-content: space-between; align-items: center;">
                         <span>Daftar Perusahaan</span>
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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../../koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM perusahaan");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['alamat']; ?></td>
                                        <td><?php echo $d['no_telp']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                        <td>
                                            <a href="edit.php?id_perusahaan=<?php echo $d['id_perusahaan']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="hapus.php?id_perusahaan=<?php echo $d['id_perusahaan']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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