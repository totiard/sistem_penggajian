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
                <h2>Data Karyawan</h2>
                <h4>Halaman untuk mengelola data karyawan pada sistem penggajian.</h4>
            </div>
        </div>
        <hr />
        
        <?php // === AWAL BAGIAN ADVANCED TABLE === ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="display: flex; justify-content: space-between; align-items: center;">
                         <span>Daftar Karyawan</span>
                         <a href="tambah.php" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Tambah Data
                         </a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Kode Karyawan</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>No Rekening</th>
                                        <th>Nama Bank</th>
                                        <th>Perusahaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../../koneksi.php';
                                    $data = mysqli_query($koneksi, "
                                        SELECT 
                                            karyawan.*,
                                            perusahaan.nama AS nama_perusahaan
                                        FROM karyawan
                                        LEFT JOIN perusahaan
                                            ON karyawan.id = perusahaan.id_perusahaan
                                    ");

                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $d['kode_karyawan']; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['alamat']; ?></td>
                                        <td><?php echo $d['jabatan']; ?></td>
                                        <td><?php echo $d['no_telp']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                        <td><?php echo $d['no_rekening']; ?></td>
                                        <td><?php echo $d['rek_bank']; ?></td>
                                        <td><?php echo $d['nama_perusahaan']; ?></td>
                                        <td>
                                            <a href="edit.php?kode_karyawan=<?php echo $d['kode_karyawan']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="hapus.php?kode_karyawan=<?php echo $d['kode_karyawan']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
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