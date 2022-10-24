 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">INFO WISATA NAGARI SUPAYANG</p>
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
            $query = mysqli_query($kon,"SELECT * FROM tb_info ORDER BY id_info DESC LIMIT 3");

            while ($info = mysqli_fetch_array($query)){
        ?>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-3">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="<?php echo 'Admin/assets/images/'.$info['gambar']; ?>" style="height: 200px; object-fit: cover;"></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                        <h3><?= $info['nama_wisata']; ?></h3>
                      <a  href="?page=detail_infowisata&slug=<?= $info['slug']; ?>" class="btn btn-danger">Read More</a>
                          
                        </div>
                    </div>
                </div>
                <?php } ?>
             
                
             
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->
           
        </div><!-- end container -->
    </div><!-- end section -->
                </section>

    
