 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Layanan Pengaduan Nagari Supayang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
            <div id="overviews" class="section wb">
                    <div class="container">
                        <div class="row"> 
                        <?php 			
    $result = mysqli_query($kon, "SELECT * FROM `tb_layanan` WHERE jenis='LAYANAN PENGADUAN' AND judul != '' AND judul IS NOT NULL");
    if(mysqli_num_rows($result) == 0) {
        echo "<h4>*Data Layanan Pengaduan Belum Ada*</h4>";
    } else {
        
        while ($data = mysqli_fetch_assoc($result)) { 
            ?>
                            <div class="col-lg-8 blog-post-single">
                                <div class="blog-content">										
                                        <div class="blog-desc" style="overflow: hidden;">
                                        <h2><?=$data['judul']?></h2>
                                            <p><ul><?= $data['deskripsi']?></ul></p>
                                        </div>							
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
                            <?php 
            }
    }
    ?>
         <!-- Sidebar Widget -->
                <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                    <!-- <div class="sidebar-area"> -->

                        <!-- Newsletter Widget -->
                        <!-- <div class="single-widget-area newsletter-widget mb-100">
                            <h4>Subscribe to our newsletter</h4> 
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div> -->


                            
					
                    </div>
            </div>
        </div>
</div>
    

                