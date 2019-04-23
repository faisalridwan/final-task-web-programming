

    <!-- MAIN CONTENT -->

    <div class="jumbotron jumbotron-fluid bg-white" style="margin-bottom: 0px;padding-bottom: 0px;">
        <div class="container"> 
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="<?= base_url('Sicepat/cekresi/') ?> " class="ws-form form-horizontal check-form " method="post">
                            <div class="pt-5 text-center pb-5 ">
                                <img class="check-fee-icon2" src="<?= base_url('assets/img/location@2x.png') ?>" width=8%> <b> Cek Resi</b>
                            </div>

                            <div class="row"></div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1">
                                        <img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > 
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="noresi" placeholder="No resi" required>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-7">
                                    <button class="nodisp"> <img src="<?= base_url('assets/img/add@2x.png')?>" alt="" width=7%>  Tambah resi baru</button>
                                </div>

                                <div class="col-md-5">
                                <button type="submit" onclick="myFunction()" id="btnresi" class="btn btn-danger float-right"><b>Lacak</b></a>
                                </div>   
                            </div>
                    </form>    
                    
                    
                    
                </div>
                <div id="myDIV">

                </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
                    <script>
                        function myFunction() {
                        var x = document.getElementById("myDIV");
                        x.innerHTML=' <div class="container"> <table class="table table-bordered"> <thead> <tr> <th class="text-center">No Resi</th> <th class="text-center">Layanan</th> <th class="text-center">Asal</th> <th class="text-center">Tujuan</th> <th class="text-center">Nama Pengirim</th> <th class="text-center">Tanggal Pengiriman</th> <th class="text-center">Nama Penerima</th> <th class="text-center">Tanggal Penerima</th> <th class="text-center">Status</th> </tr> </thead> <tbody> <?php foreach ($dataresi as $c ) {?> <tr> <td class="hidden-xs"> <?php echo $c->noresi;?> </td> <td class="hidden-xs"> <?php echo $c->layanan;?> </td> <td class="hidden-xs"> <?php echo $c->asal;?> </td> <td class="hidden-xs"> <?php echo $c->tujuan;?> </td> <td class="hidden-xs"> <?php echo $c->pengirim;?> </td> <td class="hidden-xs"> <?php echo $c->tglpengiriman;?> </td> <td class="hidden-xs"> <?php echo $c->namapenerima;?> </td> <td class="hidden-xs"> <?php echo $c->tglpenerimaan;?> </td> <td class="hidden-xs"> <?php echo $c->status;?> </td> </tr> <?php } ?> </tbody> </table> </div>';
                        
                        }
                    </script>
                </div>
        </div>  
            <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">        
    </div>