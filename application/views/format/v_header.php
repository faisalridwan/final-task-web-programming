<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('assets/img/maskot.png'); ?>">
    <title>SiCepat</title>

    <!-- My CSS -->
    <?php if ($header == 1){ ?> <link rel="stylesheet" href="<?= base_url('assets/css/index_style.css'); ?>">  <?php } ?>
    <?php if ($header == 2){ ?> <link rel="stylesheet" href="<?= base_url('assets/css/cekresi_style.css'); ?>">  <?php } ?>
    <?php if ($header == 3){ ?> <link rel="stylesheet" href="<?= base_url('assets/css/ongkir_style.css'); ?>">  <?php } ?>
    <?php if ($header == 4){ ?> <link rel="stylesheet" href="<?= base_url('assets/css/service_style.css'); ?>">  <?php } ?>


</head>
<!--  -->
<body>
    <!-- NAVBAR -->
    <div class="container">
    <nav class="navbar navbar-expand navbar-light bg-white ">
        
            <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url('assets/img/logo-header.png')?>" width="150px;" class="main-logo img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($header == 1){ ?> active <?php } ?> " href="<?= base_url(); ?>">HOME </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($header == 2){ ?> active <?php } ?> " href="<?= base_url('Sicepat/cekresi'); ?>">CEK RESI </a>
                        </li>
                        <li class="nav-item  " >
                            <a class="nav-link <?php if ($header == 3){ ?> active <?php } ?> " href="<?= base_url('Sicepat/ongkir'); ?>">ONGKIR </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link <?php if ($header == 4){ ?> active <?php } ?> " href="<?= base_url('Sicepat/service'); ?>">SERVICE </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link <?php if ($header == 5){ ?> active <?php } ?> " href="<?= base_url('Sicepat/lokasi'); ?>">LOKASI </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link <?php if ($header == 6){ ?> active <?php } ?> " href="<?= base_url('Sicepat/contact'); ?>">CONTACT </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link <?php if ($header == 7){ ?> active <?php } ?> " href="<?= base_url('admin'); ?>">ADMIN </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-1 hotilang">
                <div class=" hotilang">Hotline</div>
                <b>
                    <div class=" text-danger hotilang">021-5020-0050</div>
                </b>
            </div>
        
    </nav>
    </div>