

    <!-- MAIN CONTENT -->
    <div class="jumbotron jumbotron-fluid bg-white" style="
    padding-bottom: 0px;
    margin-bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="#" class="ws-form form-horizontal check-form " method="post">
                        <div class="pt-5 text-center ">
                            <img class="check-fee-icon" src="<?= base_url('assets/img/cek-ongkir@2x.png') ?>" style="margin-right: 17px; margin-bottom: 4px;">Cek Tarif
                        </div>
                        <div class="form-group row pt-4 ">
                                <label class="col-sm-2 col-form-label ">Asal</label>
                                <div class="col-sm-10">
                                    <input type="text" list="asallist" name="asal" class="form-control px-2" placeholder="Pilih Asal">
                                    <datalist id="asallist">
                                    <?php foreach ($datakota as $c ) {?>
                                        <option value="<?php echo $c->namakota; ?>">
                                    <?php } ?>
                                    </datalist>
                                </div>
                            </div>                          
                            <div class="form-group row ">
                                <label class=" col-sm-2 control-label">Tujuan</label>
                                <div class="col-sm-10">
                                    <input type="text" list="asallist" name="tujuan" class="form-control" placeholder="Pilih Tujuan" required>
                                </div>  
                            </div>
                            <div class="form-group row ">
                                <label class=" col-sm-2 control-label">Layanan</label>
                                <div class="col-sm-10">
                                <select class="form-control" id="formGroupExampleInput2" name="idlayanan" required>
                                    <?php foreach ($datapengiriman as $c ) {?>
                                        <option value="<?php echo $c->idlayanan ?>"> <?php echo $c->layanan;  ?></option>
                                    <?php } ?>
                                </select> 
                                </div>  
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Berat</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="weight" class="form-control" placeholder="00">
                                        <div class="input-group-prepend ">
                                        <span class="input-group-text bg-white">Kg</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Dimensi</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="length" class="form-control" placeholder="L" required>
                                                <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">cm</span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="width" class="form-control" placeholder="W" required>
                                                <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">cm</span></div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" name="height" class="form-control" placeholder="H" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white">cm</span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                <button type="submit" id="btnongkir" class="btn btn-danger float-right"><b>Cek Harga</b></button>
                                </div>
                            </div>
                            
                    </form>
                    <div class="boxongkir">

                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#btnongkir").click(function(){
                            $(".boxongkir").html(<?php  $this->load->view('Alerts/dataongkir') ?>);
            
                        });
                    });
                </script>
                
            </div>
        </div>  
            <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    </div>
