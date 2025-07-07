<?php
// Koneksi database
include '../../koneksi.php';

// Ambil no_ref dari parameter URL
$no_ref = $_GET['no_ref'];

// Query slip_gaji dan karyawan
$qSlip = mysqli_query($koneksi, "
    SELECT s.*, k.*, p.nama AS nama_perusahaan, p.alamat AS alamat_perusahaan, p.no_telp AS telp_perusahaan, p.email
    FROM slip_gaji s
    JOIN karyawan k ON s.kode_karyawan = k.kode_karyawan
    JOIN perusahaan p ON k.id = p.id_perusahaan
    WHERE s.no_ref = '$no_ref'
");
$dataSlip = mysqli_fetch_assoc($qSlip);

// Query detail_gaji dan keterangan
$qDetail = mysqli_query($koneksi, "
    SELECT d.*, k.keterangan, k.debitkredit
    FROM detail_gaji d
    JOIN keterangan_gaji k ON d.no = k.no
    WHERE d.no_ref = '$no_ref'
");

// Hitung total diterima
$total = 0;
$rows = [];
while ($r = mysqli_fetch_assoc($qDetail)) {
    if ($r['debitkredit'] == 'Debit') {
        $total += $r['nominal'];
    } else {
        $total -= $r['nominal'];
    }
    $rows[] = $r;
}

// Fungsi terbilang sederhana
function terbilang($x)
{
    $angka = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    if ($x < 12)
        return " " . $angka[$x];
    elseif ($x < 20)
        return terbilang($x - 10) . " belas";
    elseif ($x < 100)
        return terbilang($x / 10) . " puluh" . terbilang($x % 10);
    elseif ($x < 200)
        return " seratus" . terbilang($x - 100);
    elseif ($x < 1000)
        return terbilang($x / 100) . " ratus" . terbilang($x % 100);
    elseif ($x < 2000)
        return " seribu" . terbilang($x - 1000);
    elseif ($x < 1000000)
        return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
    elseif ($x < 1000000000)
        return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Slip Gaji</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 16px; /* lebih besar */
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px; /* lebih besar */
        font-size: 16px; /* lebih besar */
    }
    .border-top {
        border-top: 1px solid #000;
    }
    .border-bottom {
        border-bottom: 1px solid #000;
    }
    .text-right {
        text-align: right;
    }
    .text-center {
        text-align: center;
    }
    .title {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
</style>

</head>
<body onload="window.print()">

<table>
    <tr>
        <td>
            <strong><?php echo strtoupper($dataSlip['nama_perusahaan']); ?></strong><br>
            <?php echo $dataSlip['alamat_perusahaan']; ?><br>
            Telp: <?php echo $dataSlip['telp_perusahaan']; ?> | Email: <?php echo $dataSlip['email']; ?>
        </td>
        <td class="text-right">
            Tanggal: <?php echo date('d/m/Y', strtotime($dataSlip['tgl'])); ?><br>
            No. Referensi: <?php echo $dataSlip['no_ref']; ?><br>
            Kode Karyawan: <?php echo $dataSlip['kode_karyawan']; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="title">SLIP GAJI</td>
    </tr>
</table>


<hr>

<table>
    <tr>
        <td>
            <strong><?php echo $dataSlip['nama']; ?></strong><br>
            <?php echo $dataSlip['alamat']; ?><br>
            Jabatan: <?php echo $dataSlip['jabatan']; ?><br>
            Telp: <?php echo $dataSlip['no_telp']; ?>
        </td>
    </tr>
</table>

<hr>

<table border="1">
    <tr>
        <th style="width:5%;">No</th>
        <th>Keterangan</th>
        <th style="width:30%;">Jumlah (Rp)</th>
    </tr>
    <?php 
    $no=1; 
    foreach($rows as $r): 
    ?>
    <tr>
        <td class="text-center"><?php echo $no++; ?></td>
        <td><?php echo $r['keterangan']; ?></td>
        <td class="text-right"><?php echo number_format($r['nominal'],0,',','.'); ?> <?php echo ($r['debitkredit']=='Debit')?'' : '( - )'; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="2" class="text-right"><strong>Total Diterima</strong></td>
        <td class="text-right"><strong><?php echo number_format($total,0,',','.'); ?></strong></td>
    </tr>
</table>

<br>
Terbilang: <em><?php echo ucwords(terbilang($total)); ?> rupiah</em>

<br><br><br>

<table>
    <tr>
        <td class="text-center">
            Penerima,<br><br><br><br>
            <strong><?php echo $dataSlip['nama']; ?></strong>
        </td>
        <td class="text-center">
            <?php echo $dataSlip['nama_perusahaan']; ?>,<br><br><br><br>
            <strong>HRD</strong>
        </td>
    </tr>
</table>

</body>
</html>
