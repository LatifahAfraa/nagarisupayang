
<!-- ======= Footer ======= -->
<?php
                $data = mysqli_query($kon, "SELECT * FROM alamat");
                while ($r = mysqli_fetch_assoc($data)) {
            ?>

<footer id="footer">
<div class="card mb-15"style="background-image: url(img/bg-img/88.jpg); height: 25em" >
    <div class="container ">
     <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br>
                            <h4>NAGARI SUPAYANG</h4>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Lambang_Kabupaten_Solok.png" width="100px">
                        </div> 
                        
            <div class="footer-right">
             
            
            </div>            
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br>
                            <h4>Hubungi</h4>
                        </div>
                       <a>
                       <?php
                $data = mysqli_query($kon, "SELECT * FROM notelp");
                while ($x = mysqli_fetch_assoc($data)) {
            ?>
                          <li>No. Telp: <?=$x['telp']?></li>
                          <?php }
                          ?>
                          <?php
                $data = mysqli_query($kon, "SELECT * FROM email");
                while ($q = mysqli_fetch_assoc($data)) {
            ?>
                          <li>Email   : <?=$q['email']?></li>
                          <?php }?>
                          <li>Alamat  : <?=$r['alamat']?></li>
                          <?php }
                          ?>
                       </a>
                    </div><!-- end clearfix -->
                    
                </div><!-- end col -->
                
        
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br>
                            <h4>Detail Lokasi</h4>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d822.5913502468658!2d100.81099171312246!3d-0.8798476171111315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b3822f08952f1%3A0x86934188df9e9802!2sSupayang%2C%20Payung%20Sekaki%2C%20Solok%2C%20Sumatera%20Barat%2C%20Indonesia!5e0!3m2!1sid!2snl!4v1634955029260!5m2!1sid!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div><!-- end clearfix -->
                </div><!-- end col -->
                
     </div>
     
    </div>
    
</div>

            </div><!-- end row -->
    </div>
</footer>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  