 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">LAMAN GALERI NAGARI SUPAYANG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">

            <?php 
              include 'Admin/koneksi.php';
            $query = mysqli_query($kon,"SELECT * FROM tb_galeri");

            if(mysqli_num_rows($query) == 0) {
                echo "<h2>*Data Galeri Belum Ada*</h2>";
            } else {
            }
                while ($galeri = mysqli_fetch_array($query)){
            
          
        ?>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-3">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="<?php echo 'Admin/assets/images/'.$galeri['foto']; ?>" style="height: 200px; object-fit: cover;"></a>
                        </div>

                    
                    </div>
                </div>
                <?php } ?>
             
                
             
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>