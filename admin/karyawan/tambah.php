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
                <h2>Tambah Data Karyawan</h2>
                <h5>Halaman untuk menambah data karyawan baru.</h5>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">

                <?php // === AWAL PANEL FORM INPUT DATA === ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Tambah Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="tambah_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label>Kode Karyawan</label>
                                        <input type="text" name="kode_karyawan" id="kode_karyawan" class="form-control" placeholder="Masukkan kode unik" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan" />
                                    </div>

                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Contoh: 08123456789" />
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Contoh: nama@email.com" />
                                    </div>

                                    <div class="form-group">
                                        <label>No Rekening</label>
                                        <input type="text" name="no_rekening" id="no_rekening" class="form-control" placeholder="Masukkan nomor rekening" />
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Bank</label>
                                        <input type="text" name="rek_bank" id="rek_bank" class="form-control" placeholder="Masukkan nama bank" />
                                    </div>

                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <select name="id_perusahaan" id="id_perusahaan" class="form-control" required>
                                            <option value="">-- Pilih Perusahaan --</option>
                                            <?php
                                            // Menampilkan daftar perusahaan dari database
                                            include '../../koneksi.php';
                                            $perusahaan = mysqli_query($koneksi, "SELECT id_perusahaan, nama FROM perusahaan ORDER BY nama ASC");
                                            while($p = mysqli_fetch_array($perusahaan)){
                                                echo '<option value="'.$p['id_perusahaan'].'">'.$p['nama'].'</option>';
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