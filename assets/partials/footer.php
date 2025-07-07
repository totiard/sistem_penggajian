<script src="/sistem_penggajian/assets/js/jquery-1.10.2.js"></script>
<script src="/sistem_penggajian/assets/js/bootstrap.min.js"></script>
<script src="/sistem_penggajian/assets/js/jquery.metisMenu.js"></script>
<script src="/sistem_penggajian/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="/sistem_penggajian/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script src="/sistem_penggajian/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="/sistem_penggajian/assets/js/morris/morris.js"></script>
<script src="/sistem_penggajian/assets/js/custom.js"></script>
<script>
    $(window).on("load", function () {
        $('#dataTables-example').dataTable();
    });
</script>

<script>
// Ambil waktu awal dari PHP
let serverTime = "<?php echo date('Y-m-d H:i:s'); ?>";
let currentTime = new Date(serverTime);

// Function update jam
function updateClock() {
    currentTime.setSeconds(currentTime.getSeconds() + 1);

    // Format tanggal dan jam
    const options = { day: '2-digit', month: 'long', year: 'numeric' };
    const datePart = currentTime.toLocaleDateString('en-GB', options);
    const timePart = currentTime.toLocaleTimeString('en-GB');

    document.getElementById('clock').innerHTML = datePart + ' ' + timePart;
}

// Update setiap 1 detik
setInterval(updateClock, 1000);
</script>

<footer style="background:#222; padding:15px; text-align:center; color:#ccc; border-top:1px solid #444; margin-top:20px;">
    <strong>&copy; <?php echo date('Y'); ?> Sistem Penggajian.</strong> All rights reserved. 
    Developed by <a href="https://totiard.github.io/Profile-New" target="blank" style="color:#5bc0de; text-decoration:none;">Toti Ardiansyah</a>.
</footer>

</body>

</html>