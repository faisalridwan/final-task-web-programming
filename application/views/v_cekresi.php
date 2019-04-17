

    <!-- MAIN CONTENT -->

    <div class="jumbotron jumbotron-fluid bg-white" style="
    padding-bottom: 0px;
    margin-bottom: 0px;">
        <div class="container"> 
            <div class="row justify-content-center">
                <div class="col-md-5 ws-home-check-left">
                    <form action="#" class="ws-form form-horizontal check-form " method="post">
                        <div class="pt-5 text-center pb-5 ">
                            <img class="check-fee-icon2" src="<?= base_url('assets/img/location@2x.png') ?>" width=8%> Cek Resi
                        </div>

                        <div class="row"></div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" name="resi" placeholder="No resi">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" name="resi" placeholder="No resi">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white pr-1"><img src="<?= base_url('assets/img/doc@2x.png')?>" width=50% > </span>
                                </div>
                                <input type="text" class="form-control" name="resi" placeholder="No resi">
                            </div>

                            
                        <div class="row mt-4">
                            <div class="col-md-7">
                                <button class="nodisp" style="color:#cd2028;"> <img src="<?= base_url('assets/img/add@2x.png')?>" width=7%>  Tambah resi baru</button>
                            </div>
                            <div class="col-md-5">
                                <button type="submit" id="btnresi" class="btn btn-danger float-right"><b>Lacak</b></button>
                            </div>   
                        </div>
                    </form> 
                    <div class="boxresi">

                    </div>  
                        
                </div> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#btnresi").click(function(){
                            $(".boxresi").html(<?php  $this->load->view('Alerts/dataongkir') ?>);
            
                        });
                    });
                </script>  
            </div> 
        </div>         
            <div class="container awb-result" id="awb-result"></div>   
            
    </div>
    <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
    <!-- FOOTER  -->

   