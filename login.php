<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Sistem Penggajian : Login</h2>

                <h5>( Login yourself to get access )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong> Masukkan Username dan Password </strong>
                    </div>

                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo '
                            <div class="alert alert-danger alert-dismissible fade in" role="alert" style="margin:15px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                                <i class="fa fa-exclamation-triangle"></i> Login gagal! Username dan password salah.
                            </div>';
                        } else if ($_GET['pesan'] == "logout") {
                            echo '
                            <div class="alert alert-success alert-dismissible fade in" role="alert" style="margin:15px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                                <i class="fa fa-check-circle"></i> Anda telah berhasil logout.
                            </div>';
                        } else if ($_GET['pesan'] == "belum_login") {
                            echo '
                            <div class="alert alert-warning alert-dismissible fade in" role="alert" style="margin:15px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                                <i class="fa fa-info-circle"></i> Anda harus login untuk mengakses halaman admin.
                            </div>';
                        }
                    }
                    ?>

                    <div class="panel-body">
                        <form method="post" action="cek_login.php">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required />
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer text-center">
                        <strong>&copy; 2025 Sistem Penggajian</strong>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>