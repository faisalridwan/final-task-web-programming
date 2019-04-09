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
    <link rel="stylesheet" href="<?= base_url('assets/css/cekresi_style.css'); ?>">

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
                            <a class="nav-link  " href="<?= base_url(); ?>">HOME</a>
                        </li>
                        <li class="nav-item bg-danger active">
                            <a class="nav-link" href="<?= base_url('Sicepat/cekresi'); ?>">CEK RESI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/ongkir'); ?>">ONGKIR</a>
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

    <!-- MAIN CONTENT -->

    <div class="ws-main-content">
        <div class="check-awb-container pt-5">   
            <div class="title"><img class="check-awb-icon" src="<?= base_url('assets/img/location@2x.png'); ?>" style="margin-right: 17px;margin-bottom: 4px;"> Cek Resi</div>   
                <div class="check-awb-content">       
                    <div class="container">
                        <form action="" method="post" accept-charset="utf-8">
                            
                            <div class="check-awb-wrapper">   
                                
                                <div class="awb-input-field">       
                                    <div class="row ">       
                                        <div class="col-md-3"></div>       
                                            <div class="col-md-6">           
                                                <div class="input-group">               
                                                    <div class="input-group-addon"><img src="<?= base_url('assets/img/doc@2x.png'); ?>" style="width:17px; height:20px;"></div>               
                                                        <input type="text" name="awb[]" class="form-control input-awb" placeholder="No resi" value="">           
                                                </div>       
                                            </div>       
                                        <div class="col-md-3"></div>   
                                    </div>   
                                        
                                    <div class="row ">       
                                        <div class="col-md-3"></div>       
                                            <div class="col-md-6">           
                                                <div class="input-group">               
                                                    <div class="input-group-addon"><img src="<?= base_url('assets/img/doc@2x.png'); ?>" style="width:17px; height:20px;"></div>               
                                                        <input type="text" name="awb[]" class="form-control input-awb" placeholder="No resi" value="">           
                                                </div>       
                                            </div>       
                                        <div class="col-md-3"></div>   
                                    </div>   
                                                    
                                    <div class="row ">       
                                        <div class="col-md-3"></div>       
                                            <div class="col-md-6">          
                                                <div class="input-group">               
                                                    <div class="input-group-addon"><img src="<?= base_url('assets/img/doc@2x.png'); ?>" style="width:17px; height:20px;"></div>               
                                                        <input type="text" name="awb[]" class="form-control input-awb" placeholder="No resi" value="">           
                                                </div>       
                                            </div>       
                                        <div class="col-md-3"></div>   
                                    </div>                 
                                </div>   
                            
                                <div class="row" style="margin-top:16px;">       
                                    <div class="col-md-3"></div>       
                                        <div class="col-md-6">           
                                            <div class="row">               
                                                <div class="col-md-6 text-danger"><a id="new-resi" name="new-resi" class=" " href="javascript:void(0)"><img src="<?= base_url('assets/img/add@2x.png'); ?>" style="margin-bottom:2px; width:18px">&nbsp;&nbsp;&nbsp;Tambah resi baru</a></div>          
                                
                                        <div class="col-md-6">                   
                                            <div class="btn-wrapper text-right"><input id="btn-check" type="button" class="btn btn-primary btn-check" value="Lacak"></div>               
                                        </div>           
                                    </div>       
                                </div>       
                                
                                <div class="col-md-3"></div>   
                            
                            </div></div>
                        </form>       
                    </div>   
                </div> 
        </div>         
            <div class="container awb-result" id="awb-result"></div>   
            <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    </div>

    <!-- FOOTER  -->

    <div class="ws-footer-page">
    <div class="ws-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3" style="width:30%;">
                            <div class="ws-footer-menu">
                                INFORMASI                            </div>
                            <ul class="ws-menu-list">
                                <li><a href="http://sicepat.com/faq">FAQ</a></li>
                                <li><a href="http://sicepat.com/statusSicepat">Kode Status Pengantaran Paket</a></li>
                                <li><a href="http://sicepat.com/termCond">Terms &amp; Conditions</a></li>
                                <li><a href="http://sicepat.com/privacyPolicy">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="width:23%;">
                            <div class="ws-footer-menu">
                                PRODUK &amp; LAYANAN                            </div>
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
                                IKUTI KAMI                            </div>
                            <ul class="ws-menu-list">
                                <li><a href="http://facebook.com/sicepatexpress">Facebook</a></li>
                                <li><a href="https://twitter.com/sicepat_ekspres">Twitter</a></li>
                                <li><a href="https://www.instagram.com/sicepat_ekspres">Instagram</a></li>
                                <li><a href="https://www.youtube.com/channel/UC9DIPyaNoShFJ5oKsrv7AVg">Youtube</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="width:30%;">
                            <div class="ws-footer-menu">
                                INFO KONTAK                            </div>
                            <table class="contact-address-list">
                                <tbody><tr>
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
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="ws-store-title">
                        DOWNLOAD APP                    </div>
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
                <div class="col-md-12"><div class="ws-footer-divider"></div></div>
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