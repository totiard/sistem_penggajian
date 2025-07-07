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
                <h2>Tambah Detail Gaji</h2>
                <h5>Halaman untuk menambah rincian komponen pada slip gaji.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah Detail Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Keterangan Gaji</label>
                                        <select name="no" id="no" class="form-control" required>
                                            <option value="">-- Pilih Keterangan --</option>
                                            <?php
                                            include '../../koneksi.php';
                                            $keterangan = mysqli_query($koneksi, "SELECT * FROM keterangan_gaji");
                                            while($k = mysqli_fetch_array($keterangan)) {
                                                echo "<option value='$k[no]'>$k[keterangan] (" . ucfirst($k['debitkredit']) . ")</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>No Referensi Slip Gaji</label>
                                        <select name="no_ref" id="no_ref" class="form-control" required>
                                            <option value="">-- Pilih Slip Gaji --</option>
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
                                        <input type="number" name="nominal" class="form-control" placeholder="Masukkan nominal (angka saja)" required />
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