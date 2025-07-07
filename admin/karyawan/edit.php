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
                <h2>Edit Data Karyawan</h2>
                <h5>Halaman untuk mengubah data karyawan.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <!-- // === AWAL PANEL FORM EDIT DATA === -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                include '../../koneksi.php';
                                $kode_karyawan = $_GET['kode_karyawan'];
                                $data = mysqli_query($koneksi, "
                                    SELECT 
                                        karyawan.*,
                                        perusahaan.nama AS nama_perusahaan
                                    FROM karyawan
                                    LEFT JOIN perusahaan ON karyawan.id = perusahaan.id_perusahaan
                                    WHERE karyawan.kode_karyawan='$kode_karyawan'
                                ");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                <form role="form" action="edit_aksi.php" method="POST">
                                    <input type="hidden" name="kode_karyawan" value="<?php echo $d['kode_karyawan']; ?>">

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required><?php echo $d['alamat']; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="tel" name="no_telp" value="<?php echo $d['no_telp']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?php echo $d['email']; ?>" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>No Rekening</label>
                                        <input type="text" name="no_rekening" value="<?php echo $d['no_rekening']; ?>" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Bank</label>
                                        <input type="text" name="rek_bank" value="<?php echo $d['rek_bank']; ?>" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <select name="id_perusahaan" class="form-control" required>
                                            <?php
                                            $perusahaan = mysqli_query($koneksi, "SELECT id_perusahaan, nama FROM perusahaan ORDER BY nama ASC");
                                            while($p = mysqli_fetch_array($perusahaan)){
                                                $selected = ($p['id_perusahaan'] == $d['id']) ? 'selected' : '';
                                                echo '<option value="'.$p['id_perusahaan'].'" '.$selected.'>'.$p['nama'].'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="index.php" class="btn btn-default">Kembali</a>

                                </form>
                                <?php
                                }
                                ?>
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