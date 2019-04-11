<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSSaaaaaaa -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('assets/img/maskot.png'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    <title>SiCepat</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/cekresi_style.css'); ?>">
    <!-- My jQuery -->
    

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
                        <li class="nav-item bg-danger active">
                            <a class="nav-link" href="<?= base_url('Sicepat/cekresi'); ?>">CEK RESI </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/ongkir'); ?>">ONGKIR </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Sicepat/service'); ?>">SERVICE </a>
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
        <div class="container"> 
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="#" class="ws-form form-horizontal check-form " method="post">
                        <div class="pt-5 text-center pb-5 ">
                            <img class="check-fee-icon" src="<?= base_url('assets/img/location@2x.png') ?>" width=8%> Cek Resi
                        </div>

                        <div class="row"></div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" placeholder="No resi">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" placeholder="No resi">
                            </div>
                            <div class="input-group tambahresi">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" placeholder="No resi">
                            </div>

                            
                        <div class="row mt-4">
                            <div class="col-md-7">
                                <button class="nodisp"> <img src="<?= base_url('assets/img/add@2x.png')?>" alt="" width=7%>  Tambah resi baru</button>
                            </div>
                            <div class="col-md-5">
                                <a class="btn btn-danger float-right" href="#" role="button">Lacak</a>
                            </div>   
                        </div>
                    </form>       
                </div>   
            </div> 
        </div>         
            <div class="container awb-result" id="awb-result"></div>   
            <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    </div>

        </div>
    </div>
    <!-- FOOTER  -->

   