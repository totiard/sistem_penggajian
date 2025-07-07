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
                <h2>Edit Data User</h2>
                <h5>Halaman untuk mengubah data user.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit User
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $id_user = $_GET['id_user'];
                                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>">

                                    <div class="form-group">
                                        <label>Nama User / Username</label>
                                        <input type="text" name="nama_user" value="<?php echo $d['nama_user']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?php echo $d['password']; ?>" class="form-control" required />
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