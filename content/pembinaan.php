 
 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;"> KABA PEMBINAAN NAGARI SUPAYANG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
  
    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
            <?php
                $jenis = strtoupper($_GET['page']);
                $data = mysqli_query($kon, "SELECT * FROM tb_berita where jenis='$jenis'");
                while ($r = mysqli_fetch_assoc($data)) {
            ?>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="index.php?page=detail_pembinaan&title=<?= $r['judul_seo'] ?>"><img src="Admin/assets/images/<?= $r['gambar'] ?>" alt="amazing caves coverimage"  style="height: 200px; object-fit: cover;"></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                           
                            <a href="index.php?page=detail_pembinaan&title=<?= $r['judul_seo'] ?>" class="post-title"><?=substr($r['judul'],0,50);?></a>
                            <p align="left"><?= limit_word(strip_tags($r['isiberita']),15);?></p>
                            <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="index.php?page=detail_pembinaan&title=<?= $r['judul_seo'] ?>">
                        <button type="button" class="btn btn-danger" href="index.php?page=detail_pembinaan&title=<?= $r['judul_seo'] ?>">selebihnya</button></a>
                        </div>
                    </div>
                </div>
                <?php }
                ?> 

              
                        <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

                
  
  
    
</body>

</html>