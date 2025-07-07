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
                <h2>Edit Slip Gaji</h2>
                <h5>Halaman untuk mengubah data pada slip gaji.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit Slip Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $no_ref = $_GET['no_ref'];
                                $data = mysqli_query($koneksi, "
                                    SELECT slip_gaji.*, karyawan.nama
                                    FROM slip_gaji
                                    LEFT JOIN karyawan ON slip_gaji.kode_karyawan = karyawan.kode_karyawan
                                    WHERE no_ref='$no_ref'
                                ");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="no_ref" value="<?php echo $d['no_ref']; ?>">

                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tgl" value="<?php echo $d['tgl']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Total Gaji</label>
                                        <input type="number" name="total_gaji" value="<?php echo $d['total_gaji']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Karyawan</label>
                                        <select name="kode_karyawan" class="form-control" required>
                                            <?php
                                            $karyawan = mysqli_query($koneksi, "SELECT kode_karyawan, nama FROM karyawan ORDER BY nama ASC");
                                            while ($k = mysqli_fetch_array($karyawan)) {
                                                $selected = ($k['kode_karyawan'] == $d['kode_karyawan']) ? 'selected' : '';
                                                echo '<option value="'.$k['kode_karyawan'].'" '.$selected.'>'.$k['nama'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <?php } ?>

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