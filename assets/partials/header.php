<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Penggajian</title>
    <link href="/sistem_penggajian/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/sistem_penggajian/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="/sistem_penggajian/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="/sistem_penggajian/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="/sistem_penggajian/assets/css/custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/sistem_penggajian/admin/index.php">
                    Dashboard
                </a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
    Last access :
    <span id="clock">
        <?php
            date_default_timezone_set("Asia/Jakarta");
            echo date("d F Y H:i:s");
        ?>
    </span>
    &nbsp;
    <a href="/sistem_penggajian/admin/logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
</div>
        </nav>