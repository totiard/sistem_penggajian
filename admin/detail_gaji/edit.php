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
                <h2>Edit Detail Gaji</h2>
                <h5>Halaman untuk mengubah rincian komponen pada slip gaji.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit Detail Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $id_detail = $_GET['id_detail'];
                                $data = mysqli_query($koneksi, "SELECT * FROM detail_gaji WHERE id_detail='$id_detail'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="id_detail" value="<?php echo $d['id_detail']; ?>">

                                    <div class="form-group">
                                        <label>Keterangan Gaji</label>
                                        <select name="no" class="form-control" required>
                                            <?php
                                            // Tampilkan semua keterangan gaji
                                            $ket = mysqli_query($koneksi, "SELECT * FROM keterangan_gaji");
                                            while ($k = mysqli_fetch_array($ket)) {
                                                $selected = $k['no'] == $d['no'] ? 'selected' : '';
                                                echo "<option value='$k[no]' $selected>$k[keterangan] (" . ucfirst($k['debitkredit']) . ")</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>No Referensi Slip Gaji</label>
                                        <select name="no_ref" id="no_ref" class="form-control" required>
                                            <?php
                                            $slip = mysqli_query($koneksi, "
                                                SELECT slip_gaji.no_ref, slip_gaji.tgl, karyawan.nama
                                                FROM slip_gaji
                                                LEFT JOIN karyawan ON slip_gaji.kode_karyawan = karyawan.kode_karyawan
                                                ORDER BY slip_gaji.no_ref DESC
                                            ");
                                            while($s = mysqli_fetch_array($slip)) {
                                                echo "<option value='$s[no_ref]'>No.Ref: $s[no_ref] - $s[nama] (Tgl: $s[tgl])</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Nominal</label>
                                        <input type="number" name="nominal" value="<?php echo $d['nominal']; ?>" class="form-control" required />
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