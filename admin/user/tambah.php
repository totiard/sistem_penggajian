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
                <h2>Tambah Data User</h2>
                <h5>Halaman untuk menambah user baru.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah User
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Nama User / Username</label>
                                        <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan nama user / username" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan password" required />
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