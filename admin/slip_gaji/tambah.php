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
                <h2>Buat Slip Gaji Baru</h2>
                <h5>Halaman untuk membuat slip gaji baru untuk karyawan.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Pembuatan Slip Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tgl" id="tgl" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Total Gaji</label>
                                        <input type="number" name="total_gaji" id="total_gaji" class="form-control" placeholder="Masukkan total gaji" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Karyawan</label>
                                        <select name="kode_karyawan" id="kode_karyawan" class="form-control" required>
                                            <option value="">-- Pilih Karyawan --</option>
                                            <?php
                                            include '../../koneksi.php';
                                            $karyawan = mysqli_query($koneksi, "SELECT kode_karyawan, nama FROM karyawan ORDER BY nama ASC");
                                            while($k = mysqli_fetch_array($karyawan)){
                                                echo '<option value="'.$k['kode_karyawan'].'">'.$k['nama'].'</option>';
                                            }
                                            ?>
                                        </select>
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