<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('assets/img/maskot.png'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    <title>SiCepat</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/cekresi_style.css'); ?>">
    <!-- My jQuery -->
    

</head>

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
                            <a class="nav-link" href="<?= base_url('Sicepat/service'); ?>">SERVICE </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-danger active" href="<?= base_url('Sicepat/lokasi'); ?>">LOKASI </a>
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
<div class = "jumbotron " style="background-color : white">
    <div class="container pt-5"> 
        <div class="text-center">
            <span class="font-weight-bold" style="font-size : 24px"> Gerai & Perwakilan</span>
        </div>
        <p></p>
        <p></p>
            <div class="text-center pb-0">
                <span>Kami di sini untuk menjawab setiap pertanyaan yang Anda miliki tentang SiCepat.</span>
                <p>Hubungi kami dan kami akan merespon secepatnya </p>
            </div>

    <div class="container container-justified">
        <div class="row" style="widht: 100%">
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                JABODETABEK
                </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#">Jakarta</a>
                        <a class="dropdown-item" href="#">Bogor</a>
                        <a class="dropdown-item" href="#">Depok</a>
                        <a class="dropdown-item" href="#">Tanggerang</a>
                        <a class="dropdown-item" href="#">Bekasi</a>
                    </div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop2" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                JAWA
                </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                        <a class="dropdown-item" href="#">Jawa Barat</a>
                        <a class="dropdown-item" href="#">Jawa Tengah & Yogyakarta</a>
                        <a class="dropdown-item" href="#">Jawa Timur</a>
                    </div>
                </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop3" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                BALI NTB & NTT
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                    <a class="dropdown-item" href="#">Bali</a>
                    <a class="dropdown-item" href="#">NTB</a>
                    <a class="dropdown-item" href="#">NTT</a>
                </div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop4" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SUMATERA
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                    <a class="dropdown-item" href="#">Riau</a>
                    <a class="dropdown-item" href="#">Kepulauan Riau</a>
                    <a class="dropdown-item" href="#">Kepulauan Bangka Belitung</a>
                    <a class="dropdown-item" href="#">Bengkulu</a>
                    <a class="dropdown-item" href="#">Jambi</a>
                    <a class="dropdown-item" href="#">Sumatera Utara</a>
                    <a class="dropdown-item" href="#">Sumatera Barat</a>
                    <a class="dropdown-item" href="#">Sumatera Selatan</a>
                    <a class="dropdown-item" href="#">Bandar Lampung</a>
                </div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop5" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                KALIMANTAN
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop5">
                    <a class="dropdown-item" href="#">Kalimantan Timur</a>
                    <a class="dropdown-item" href="#">Kalimantan Selatan</a>
                    <a class="dropdown-item" href="#">Kalimantan Tengan</a>
                    <a class="dropdown-item" href="#">Kalimantan Barat</a>
                    <a class="dropdown-item" href="#">Kalimantan Utara</a>
                </div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop6" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SULAWESI
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop6">
                    <a class="dropdown-item" href="#">Sulawesi Utara</a>
                    <a class="dropdown-item" href="#">Sulawesi Tenggara</a>
                    <a class="dropdown-item" href="#">Sulawesi Selatan</a>
                    <a class="dropdown-item" href="#">Sulawesi Tengah</a>
                </div>
            </div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop7" style="border-radius: 0px" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MALUKU & PAPUA
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop7">
                    <a class="dropdown-item" href="#">Maluku</a>
                    <a class="dropdown-item" href="#">Papua</a>
                </div>
           </div>




       

        <div class="container awb-result" id="awb-result"></div>   
        <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    </div>
</div>