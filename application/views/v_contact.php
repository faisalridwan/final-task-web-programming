

<!-- MAIN CONTENT -->

<div class="ws-main-content">
    <div class="ws-contact-page">   
        <div class="contact-title text-center">       
            <div class="container">           Contact       </div>   
        </div>   
        
        <div class="contact-sub-title text-center">       
            <div class="container">           Kami di sini untuk menjawab setiap pertanyaan yang Anda miliki tentang SiCepat.
                <br>Hubungi kami dan kami akan merespon secepatnya       
            </div>   
        </div>   
        
        <div class="contact-content">       
            <div class="container">           
                <div class="row">               
                    <div class="col-md-4 contact-us-form" id="contact-us-form">
                        <form action="<?= base_url('index.php/sicepat/tambahcontact/')?>" class="form-horizontal ws-form check-form label-inside" method="post" accept-charset="utf-8">
                            <div class="row">   
                                <div class="col-md-12">
                                    <label class="contact-label">Nama<span style="color:#d0021b;"> *</span></label>
                                        <input id="name" type="text" name="namacontact" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">   
                                <div class="col-md-12"><label class="contact-label">Email<span style="color:#d0021b;"> *</span></label>
                                    <input id="email" type="email" name="emailcontact" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">   
                                <div class="col-md-12"><label class="contact-label">No Telfon<span style="color:#d0021b;"> *</span></label>
                                    <input id="notelfon" type="text" name="notlpcontact" class="form-control">
                                </div>
                            </div>
                        
                            <div class="row">   
                                <div class="col-md-12"><label class="contact-label">No Resi</label>
                                    <input id="noresi" type="text" name="noresicontact" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">   
                                <div class="col-md-12"><label class="contact-label">Pesan<span style="color:#d0021b;"> *</span></label>
                                    <textarea id="message" name="pesancontact" class="form-control"></textarea>
                                </div>
                            </div>
                                
                            <div class="row">   
                                <div class="col-md-12"><label class="contact-info-label"><span style="color:#d0021b;">* </span>Harus diisi</label></div>
                            </div>
                            
                            <div class="row">   
                                <div class="col-md-12" style="margin-bottom:20px">
                                    <div class="g-recaptcha" data-sitekey="6LeSjpYUAAAAAJ5jCxwU5XRdBRzSCRapm9ZaSfvr" data-theme="light" data-type="image" data-size="normal" style="display:inline-block; transform: scale(0.8); -webkit-transform:scale(0.8); transform-origin:0 0; -webkit-transform-origin:0 0;">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeSjpYUAAAAAJ5jCxwU5XRdBRzSCRapm9ZaSfvr&amp;co=aHR0cDovL3NpY2VwYXQuY29tOjgw&amp;hl=en&amp;type=image&amp;v=v1554100419869&amp;theme=light&amp;size=normal&amp;cb=p6d5s9y33u3a" width="304" height="78" role="presentation" name="a-jv966vv8o21m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="btn-wrapper text-right">
                                <button type="submit" id="btnongkir" class="btn btn-check" style=" margin-right: 80px;">Kirim Pesan</button>
                            </div>
                    
                        </form>
                        
                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&amp;hl=en" async="" defer=""></script>               
                    </div>               
                    
                    <div class="col-md-4">                   
                        <div class="contact-address pt-3">                       
                            <table class="contact-address-list">                            
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="contact-icon" src="<?= base_url('assets/img/address-loc@2x.png')?>">
                                        </td>
                                        
                                        <td>Jl. Ir. H. Juanda 3 No. 17-19, RT.008/RW.002, Kel. Kebon Kelapa Kec. Gambir, Jakarta Pusat 10120</td>
                                    </tr>                            
                                    
                                    <tr>
                                        <td>
                                            <img class="contact-icon" src="<?= base_url('assets/img/phone@2x.png')?>">
                                        </td>
                                        
                                        <td>021-5020-0050</td>
                                    </tr>                            
                                    
                                    <tr>
                                        <td>
                                            <img class="contact-icon" src="<?= base_url('assets/img/line@2x.png')?>">
                                        </td>
                                        
                                        <td>@sicepat</td>
                                    </tr>                            
                                    
                                    <tr>
                                        <td>
                                            <img class="contact-icon" src="<?= base_url('assets/img/message@2x.png')?>">
                                        </td>
                                        
                                        <td>Support: customer.care@sicepat.com</td>
                                    </tr>                       
                                </tbody>
                            </table>                   
                        </div>               
                    </div>               
                    
                    <div class="col-md-4">                   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.478455970495!2d106.81016362658819!3d-6.165666115349035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57417ac102d%3A0xd3f7283b9b9638c2!2sSICEPAT+EKSPRES+JUANDA!5e0!3m2!1sen!2sid!4v1548302441380" width="100%" height="504" frameborder="0" style="border:0; margin-top:21px" allowfullscreen=""></iframe>               
                    </div>           
                </div>       
            </div>   
        </div>
    </div>   
    
    <img src="<?= base_url('assets/img/background2.png'); ?>" class="img-responsive" style="width:100% !important; opacity:0.7;">
</div>