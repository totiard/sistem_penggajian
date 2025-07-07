<?php
// === MEMANGGIL HEADER ===
include '../../assets/partials/header.php';

// === MEMANGGIL SIDEBAR ===
include '../../assets/partials/sidebar.php';
?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Data Perusahaan</h2>
                <h5>Halaman untuk mengubah data perusahaan.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit Perusahaan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $id_perusahaan = $_GET['id_perusahaan'];
                                $data = mysqli_query($koneksi, "SELECT * FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="id_perusahaan" value="<?php echo $d['id_perusahaan']; ?>">

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required ><?php echo $d['alamat']; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>No HP</label>
                                        <input type="tel" name="no_telp" value="<?php echo $d['no_telp']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?php echo $d['email']; ?>" class="form-control" required />
                                    </div>

                                    <?php
                                    }
                                    ?>

                                    <br>
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="index.php" class="btn btn-default">Kembali</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === AKHIR PANEL FORM EDIT DATA === -->

            </div>
        </div>
    </div>
</div>

<!-- // === MEMANGGIL FOOTER === -->
<?php
include '../../assets/partials/footer.php';
?>