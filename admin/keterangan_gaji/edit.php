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
                <h2>Edit Keterangan Gaji</h2>
                <h5>Halaman untuk mengubah komponen gaji.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit Keterangan Gaji
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $no = $_GET['no'];
                                $data = mysqli_query($koneksi, "SELECT * FROM keterangan_gaji WHERE no='$no'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="no" value="<?php echo $d['no']; ?>">

                                    <div class="form-group">
                                        <label>keterangan</label>
                                        <input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Debit / Kredit</label>
                                        <select name="debitkredit" id="debitkredit" class="form-control" required>
                                            <option value="Debit" <?php if($d['debitkredit'] == 'Debit') echo 'selected'; ?>>Debit</option>
                                            <option value="Kredit" <?php if($d['debitkredit'] == 'Kredit') echo 'selected'; ?>>Kredit</option>
                                        </select>
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