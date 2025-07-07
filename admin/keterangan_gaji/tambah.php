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
                <h2>Tambah Keterangan Gaji</h2>
                <h5>Halaman untuk menambah komponen gaji baru.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah Keterangan Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan kategori" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Debit / Kredit</label>
                                        <select name="debitkredit" id="debitkredit" class="form-control" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Debit">Debit</option>
                                            <option value="Kredit">Kredit</option>
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