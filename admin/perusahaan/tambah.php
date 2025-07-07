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
                <h2>Tambah Data Perusahaan</h2>
                <h5>Halaman untuk menambah data perusahaan baru.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah Perusahaan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="tel" name="no_hp" id="no_hp" class="form-control" placeholder="Contoh: 08123456789" />
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Contoh: nama@email.com" />
                                    </div>

                                    <br>
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="index.php" class="btn btn-default">Kembali</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php // === AKHIR PANEL FORM INPUT DATA === ?>

            </div>
        </div>
    </div>
</div>

<!-- // === MEMANGGIL FOOTER === -->
<?php
include '../../assets/partials/footer.php';
?>