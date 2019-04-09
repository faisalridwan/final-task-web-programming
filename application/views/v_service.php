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
    <link rel="stylesheet" href="<?= base_url('assets/css/ongkir_style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/index_style.css'); ?>">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo-header.png'); ?>" width="150px;" class="main-logo img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url(); ?>">HOME </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/cekresi'); ?>">CEK RESI </a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link" href="<?= base_url('Sicepat/ongkir'); ?>">ONGKIR </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-danger active" href="<?= base_url('Sicepat/service'); ?>">SERVICE </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/lokasi'); ?>">LOKASI </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/contact'); ?>">CONTACT </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="">Hotline</div>
                <b>
                    <div class=" text-danger">021-5020-0050</div>
                </b>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container pt-5">

        <div class="text-center">
            <span class="font-weight-bold"> Layanan SiCepat</span>
                
            </div>
            <div class="text-center pt-2">
                <span>Pilih paket yang tepat untuk bisnis anda</span>
            </div>

            <div class="service-content pt-5">
                    <div class="row">
                        <div class="col-md-12 pr-3 item-service text-center">
                            <div class="service-item mr-3">
                                <img src="<?= base_url('assets/img/sicepat-maskot-logo-08@2x.png')?>" class="service-img-top">
                                <div class="service-item-info">
                                    <div class="service-item-title">REGULAR</div>
                                    <div class="service-item-line"></div>
                                    <div class="service-item-title2">Layanan cepat harga regular</div>
                                </div>
                            </div>
                            <div class="service-item mr-3">
                                <img src="<?= base_url('assets/img/sicepat-maskot-logo-08@2x.png')?>" class="service-img-top">
                                <div class="service-item-info">
                                    <div class="service-item-title">BEST</div>
                                    <div class="service-item-line"></div>
                                    <div class="service-item-title2">Besok sampai tujuan</div>
                                </div>
                            </div>

                            <div class="service-item mr-3">
                                <img src="<?= base_url('assets/img/sicepat-maskot-logo-08@2x.png')?>" class="service-img-top">
                                <div class="service-item-info">
                                    <div class="service-item-title">CARGO</div>
                                    <div class="service-item-line"></div>
                                    <div class="service-item-title2">Kirim lebih banyak lebih<br>terjangkau</div>
                                </div>
                            </div>

                            <div class="service-item mr-3">
                                <img src="<?= base_url('assets/img/sicepat-maskot-logo-08@2x.png')?>" class="service-img-top">
                                <div class="service-item-info">
                                    <div class="service-item-title">CASH ON DELIVERY</div>
                                    <div class="service-item-line"></div>
                                    <div class="service-item-title2">Transaksi belanja dengan pembayaran<br>cash pada saat barang diterima</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-5 text-center">
                            <a id="btn-show-service" name="btn-show-service" class=" btn btn-show-service" href="#">Lihat Detail</a>
                        </div>
                    </div>
                </div>

            

        </div>
    </div>
    

                                    
    

    <!-- FOOTER  -->

    