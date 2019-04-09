<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('assets/img/maskot.png'); ?>">
    <title>SiCepatv</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/header_style.css">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/img/logo-header.png" width="150px;" class="main-logo img-responsive"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item bg-danger active">
                            <a class="nav-link  " href="#">HOME </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/cekresi'); ?>">CEK RESI </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/ongkir'); ?>">ONGKIR </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICE </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LOKASI </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT </a>
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

    <!-- CAROUSEL -->

    <div class="ws-home-page">
        <div class="jumbotron jumbotron-fluid bg-danger w-5">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators mb-3">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                    </ol>
                    <div class="carousel-inner bg-danger">
                        <div class="carousel-item active justify-justify-content-center">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/1.png') ?>" class="d-block pt-5" width=80%>
                                </div>
                                <div class="col-lg-6 pt-5">
                                    <div class="row mb-4 text-light">
                                        <h2><b>SICEPAT GO!</b></h2>
                                    </div>
                                    <div class="row mb-4 text-light">
                                        SiCepat Go! adalah layanan pengiriman internasional yang bisa bikin bisnis kamu makin lancar, hemat, aman dan cepat sampai, karena SiCepat Go! memberikan : Layanan pick up GRATIS dengan berat per paket maksimal 70 kilogram, Ongkir hemat dengan tambahan diskon 10%, Jangkauan yang luas ke mancanegara* (agar bisnis kamu makin meluas) & Tracking paket kamu di www.sicepat.com Informasi lebih lengkap hubungi Hotline dan Sosial Media kami *Negara tujuan saat ini : seluruh benua Asia dan Australia
                                    </div>
                                    <div class="row mb-4">
                                        <button id="btn-white-red" name="btn-white-red" class=" btn btn-white-red" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/2.png') ?>" class="d-block pt-5" width=80%>
                                </div>
                                <div class="col-lg-6 pt-5">
                                    <div class="row mb-4 text-light">
                                        <h2><b>SICEPAT SYARIAH</b></h2>
                                    </div>
                                    <div class="row mb-4 text-light">
                                        SiCepat Ekspres resmi bekerjasama dengan Dompet Dhuafa pada tanggal 1 November 2018. Bagi kamu member SiCepat Syariah yang bersedia menyumbangkan 2,5% dari potongan ongkir yang diterima, kini kamu lebih mudah untuk berbagi rejeki kepada pesantren & sekolah literasi Indonesia di wilayah Cilacap & Lombok melalui Dompet Dhuafa.
                                        Kirim barang, dapat berkah. Mari berbagi bersama ekspedisi bagi negeri
                                        Untuk informasi lebih lanjut silahkan hubungi melalui LINE : @sicepaT
                                    </div>
                                    <div class="row mb-4">
                                        <button id="btn-white-red" name="btn-white-red" class=" btn btn-white-red" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/3.png') ?>" class="d-block pt-5" width=80%>
                                </div>
                                <div class="col-lg-6 pt-5">
                                    <div class="row mb-4 text-light">
                                        <h2><b>SICEPAT KARGO</b></h2>
                                    </div>
                                    <div class="row mb-4 text-light">
                                        Layanan baru dari Sicepat Cargo dengan paket yang lebih banyak dengan harga yang lebih murah sebagai bentuk terima kasih kami kepada para Sahabat SiCepat yang selalu mendukung kami sebagai kiriman terpercaya bisnis Online Shop kamu. Dengan pengiriman minimal 5 kg dan saat ini hanya berlaku untuk wilayah JABODETABEK dan Bandung. SiCepat Cargo Semakin Besar Semakin Mudah. Hubungi Hotline atau sosial media kami untuk info lebih lanjut.
                                    </div>
                                    <div class="row mb-4">
                                        <button id="btn-white-red" name="btn-white-red" class=" btn btn-white-red" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/4.png') ?>" class="d-block pt-5" width=80%>
                                </div>
                                <div class="col-lg-6 pt-5">
                                    <div class="row mb-4 text-light">
                                        <h2><b>FREE PICK UP TANPA SYARAT MINIMAL</b></h2>
                                    </div>
                                    <div class="row mb-4 text-light">
                                        Tidak hanya cepat, kami juga sediakan pick up GRATIS untuk mempermudah jualan Online Shop kamu tanpa minimal paket. Tidak perlu lagi menumpuk dan mengantarkan barang, karena SiGesit kami yang akan melakukannya. Hubungi hotline atau sosial media kami untuk info lebih lanjut.
                                    </div>
                                    <div class="row mb-4">
                                        <button id="btn-white-red" name="btn-white-red" class=" btn btn-white-red" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('assets/img/5.png') ?>" class="d-block pt-5" width=80%>
                                </div>
                                <div class="col-lg-6 pt-5">
                                    <div class="row mb-4 text-light">
                                        <h2><b>KIRIMAN CEPAT 15 JAM SAMPAI TANPA TAMBAHAN BIAYA APAPUN</b></h2>
                                    </div>
                                    <div class="row mb-4 text-light">
                                        Kami kirim paket kamu hanya dalam 15 jam sampai dengan harga sama tanpa tambahan apapun. Hanya berlaku untuk Jabodetabek dan beberapa kota besar Indonesia.
                                    </div>
                                    <div class="row mb-4">
                                        <button id="btn-white-red" name="btn-white-red" class=" btn btn-white-red" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="ws-home-check">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 ws-home-check-left">
                        <div class="ws-home-check-title-left pt-4">
                            <img class="check-fee-icon" src="<?= base_url('assets/img/cek-ongkir@2x.png') ?>" style="margin-right: 17px; margin-bottom: 4px;">Cek Tarif
                        </div>

                        <form action="#" class="ws-form form-horizontal check-form" method="post" accept-charset="utf-8">
                            <div class="form-group ">
                                <label class=" col-sm-2  control-label  ">Asal</label>
                                <div class="col-sm-10">
                                    <input id="origin" type="text" value="" name="origin" class="form-control px-2" placeholder="Select province" autocomplete="off">
                                </div>
                            </div>
                            <input id="origin_code" type="hidden" value="" name="origin_code" class="form-control">

                            <div class="form-group ">
                                <label class=" col-sm-2  control-label  ">Tujuan</label>
                                <div class="col-sm-10">
                                    <input id="destination" type="text" value="" name="destination" class="form-control" placeholder="Select province" autocomplete="off">
                                </div>
                            </div>
                            <input id="destination_code" type="hidden" value="" name="destination_code" class="form-control">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Berat</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="weight" class="form-control" placeholder="00">
                                        <div class="input-group-addon pr-4 pt-3">Kg</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Dimensi</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="length" class="form-control" placeholder="L">
                                                <div class="input-group-addon pr-4 pt-3">cm</div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="width" class="form-control" placeholder="W">
                                                <div class="input-group-addon pr-4 pt-3">cm</div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="height" class="form-control" placeholder="H">
                                                <div class="input-group-addon pr-4 pt-3">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right"><a id="btn-check" name="btn-check" class=" btn btn-check" href="javascript:void(0)">Cek Harga</a>
                                </div>
                            </div>
                        </form>

                        <div id="fare-list" class="fare-result"></div>
                        <script type="text/javascript">
                            var countries = [{
                                    "value": "Jakarta",
                                    "data": "CGK"
                                },
                                {
                                    "value": "Tangerang",
                                    "data": "TGR"
                                },
                                {
                                    "value": "Bekasi",
                                    "data": "BKI"
                                },
                                {
                                    "value": "Depok",
                                    "data": "DPK"
                                },
                                {
                                    "value": "Bogor",
                                    "data": "BOO"
                                },
                                {
                                    "value": "Semarang",
                                    "data": "SRG"
                                },
                                {
                                    "value": "Surabaya",
                                    "data": "SUB"
                                },
                                {
                                    "value": "Medan",
                                    "data": "MES"
                                },
                                {
                                    "value": "Bandung",
                                    "data": "BDO"
                                },
                                {
                                    "value": "Yogyakarta",
                                    "data": "JOG"
                                },
                                {
                                    "value": "Batam",
                                    "data": "BTH"
                                },
                                {
                                    "value": "Cilegon",
                                    "data": "CLG"
                                },
                                {
                                    "value": "Denpasar",
                                    "data": "DPS"
                                },
                                {
                                    "value": "Malang",
                                    "data": "MLG"
                                },
                                {
                                    "value": "Solo",
                                    "data": "SOC"
                                },
                                {
                                    "value": "Jember",
                                    "data": "JBR"
                                },
                                {
                                    "value": "Jepara",
                                    "data": "JPR"
                                },
                                {
                                    "value": "Magelang",
                                    "data": "MGL"
                                },
                                {
                                    "value": "Sukabumi",
                                    "data": "SMI"
                                },
                                {
                                    "value": "Banjarmasin",
                                    "data": "BDJ"
                                },
                                {
                                    "value": "Palembang",
                                    "data": "PLM"
                                },
                                {
                                    "value": "Pekanbaru",
                                    "data": "PKU"
                                },
                                {
                                    "value": "Balikpapan",
                                    "data": "BPN"
                                },
                                {
                                    "value": "Makassar",
                                    "data": "UPG"
                                },
                                {
                                    "value": "Madiun",
                                    "data": "MDN"
                                },
                                {
                                    "value": "Kediri",
                                    "data": "KDR"
                                }
                            ];
                        </script>
                    </div>

                    <div class="col-md-5 col-md-offset-2 ws-home-check-right">
                        <div class="ws-home-check-title-right pt-4">
                            <img class="check-awb-icon" src="assets/img/location@2x.png" style="margin-right: 17px; margin-bottom: 4px;">Track Resi
                        </div>

                        <form action="#" class="ws-form form-horizontal ws-full-lbl track-form" id="track-form" method="POST" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <textarea id="textarea-awb" name="textarea-awb" class="form-control" cols="" rows=""></textarea>
                                    <label class="label-textarea pt-4">Cth. 123456789, 456789012</label>
                                </div>
                            </div>
                        </form>

                        <div class="row ws-home-notes">
                            <div class="col-md-12">
                                Masukkan nomor resi Anda. Pisahkan dengan tanda koma (,)<br>Dapat memeriksa hingga 10 resi.
                            </div>
                        </div>

                        <div class="row text-right">
                            <div class="col-md-12">
                                <a id="btn-track" name="btn-track" class=" btn btn-track" href="javascript:void(0)">Lacak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="__title text-center">
            Kenapa SiCepat?
        </div>
        <div class="__sub-title text-center">
            <span>
                SiCepat berkomitmen menjadi partner terpercaya di seluruh Indonesia. Inilah 10 alasan tepat untuk memilih SiCepat.......
            </span>
        </div>
    </div>

    <div class="ws-home-service">
        <div class="container">
            <div class="__title text-center">
                Service
            </div>
            <div class="__sub-title text-center">
                <span>SiCepat menyediakan beberapa layanan untuk mendukung bisnis kamu. Dapatkan layanan tepat yang sesuai dengan kebutuhan kamu</span>
            </div>

            <div class="service-content">
                <div class="row">
                    <div class="col-md-12 pr-3 item-service text-center">
                        <div class="service-item mr-3">
                            <img src="assets/img/sicepat-maskot-logo-08@2x.png" class="service-img-top">
                            <div class="service-item-info">
                                <div class="service-item-title">REGULAR</div>
                                <div class="service-item-line"></div>
                                <div class="service-item-title2">Layanan cepat harga regular</div>
                            </div>
                        </div>
                        <div class="service-item mr-3">
                            <img src="assets/img/sicepat-maskot-logo-08@2x.png" class="service-img-top">
                            <div class="service-item-info">
                                <div class="service-item-title">BEST</div>
                                <div class="service-item-line"></div>
                                <div class="service-item-title2">Besok sampai tujuan</div>
                            </div>
                        </div>

                        <div class="service-item mr-3">
                            <img src="assets/img/sicepat-maskot-logo-08@2x.png" class="service-img-top">
                            <div class="service-item-info">
                                <div class="service-item-title">CARGO</div>
                                <div class="service-item-line"></div>
                                <div class="service-item-title2">Kirim lebih banyak lebih<br>terjangkau</div>
                            </div>
                        </div>

                        <div class="service-item mr-3">
                            <img src="assets/img/sicepat-maskot-logo-08@2x.png" class="service-img-top">
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
    </div>
    </div>



    <div class="row bg-light">
        <div class="col-md-6 text-center ws-join-left">
            <h5>Jadikan kiriman kamu lebih efektif dengan SiCepat</h5>
        </div>

        <div class="col-md-6 text-center ws-join-right">
            <button id="btn-join" name="btn-join" class=" btn btn-join" href="javascript:void(0)"><b>Gabung Sekarang</b></button>
        </div>
    </div>

    </div>

    <div class="ws-footer-page">
        <div class="ws-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3" style="width:30%;">
                                <div class="ws-footer-menu">
                                    INFORMASI </div>
                                <ul class="ws-menu-list">
                                    <li><a href="http://sicepat.com/faq">FAQ</a></li>
                                    <li><a href="http://sicepat.com/statusSicepat">Kode Status Pengantaran Paket</a></li>
                                    <li><a href="http://sicepat.com/termCond">Terms &amp; Conditions</a></li>
                                    <li><a href="http://sicepat.com/privacyPolicy">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3" style="width:23%;">
                                <div class="ws-footer-menu">
                                    PRODUK &amp; LAYANAN </div>
                                <ul class="ws-menu-list">
                                    <li><a href="http://sicepat.com/service">Regular</a></li>
                                    <li><a href="http://sicepat.com/service">BEST</a></li>
                                    <li><a href="http://sicepat.com/service">Cargo</a></li>
                                    <li><a href="http://sicepat.com/service">Cash On Delivery</a></li>
                                    <li><a href="http://sicepat.com/service">Sicepat Go</a></li>
                                    <li><a href="http://sicepat.com/service">Sicepat Syariah</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2" style="width:17%;">
                                <div class="ws-footer-menu">
                                    IKUTI KAMI </div>
                                <ul class="ws-menu-list">
                                    <li><a href="http://facebook.com/sicepatexpress">Facebook</a></li>
                                    <li><a href="https://twitter.com/sicepat_ekspres">Twitter</a></li>
                                    <li><a href="https://www.instagram.com/sicepat_ekspres">Instagram</a></li>
                                    <li><a href="https://www.youtube.com/channel/UC9DIPyaNoShFJ5oKsrv7AVg">Youtube</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3" style="width:30%;">
                                <div class="ws-footer-menu">
                                    INFO KONTAK </div>
                                <table class="contact-address-list">
                                    <tbody>
                                        <tr>
                                            <td><img class="footer-icon" src="http://sicepat.com/application/websicepat/assets/img/address-loc-white@2x.png"></td>
                                            <td>Jl. Ir. H. Juanda 3 No. 17-19, RT.008/RW.002, Kel. Kebon Kelapa Kec. Gambir, Jakarta Pusat 10120</td>
                                        </tr>
                                        <tr>
                                            <td><img class="footer-icon" src="http://sicepat.com/application/websicepat/assets/img/phone-white@2x.png"></td>
                                            <td>021-5020-0050</td>
                                        </tr>
                                        <tr>
                                            <td><img class="footer-icon" src="http://sicepat.com/application/websicepat/assets/img/line-white@2x.png"></td>
                                            <td>@sicepat</td>
                                        </tr>
                                        <tr>
                                            <td><img class="footer-icon" src="http://sicepat.com/application/websicepat/assets/img/message-white@2x.png"></td>
                                            <td>Support: customer.care@sicepat.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <div class="ws-store-title">
                            DOWNLOAD APP </div>
                        <div class="row ws-store-menu">
                            <div class="col-md-12 mb-2 ws-store-play">
                                <a href="https://play.google.com/store/apps/details?id=com.sicepat.android.pelanggan" target="blank">
                                    <img class="store-icon" src="http://sicepat.com/application/websicepat/assets/img/playstore@2x.png">
                                </a>
                            </div>
                            <div class="col-md-12 pt-2 ws-store-app">
                                <a href="https://itunes.apple.com/id/app/sicepat-express/id1037417977?l=id&amp;mt=8" target="blank">
                                    <img class="store-icon" src="http://sicepat.com/application/websicepat/assets/img/appstore@2x.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ws-footer-divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4 ws-footer-bottom">
                        <i class="fa fa-copyright"></i> 2018 PT. SiCepat Ekspres Indonesia. All rights reserved. 2018 PT. SiCepat Ekspres Indonesia. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 