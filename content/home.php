<?php 
include 'Admin/koneksi.php';

if(!isset($_SESSION['okay'])){
    $_SESSION['okay']=session_id();

    $query = mysqli_query($kon, "SELECT * FROM tb_visitor");
    if(mysqli_num_rows($query) > 0) {
        mysqli_query($kon,"UPDATE tb_visitor SET visitor = visitor+1");
    } else {
        mysqli_query($kon,"INSERT INTO tb_visitor (visitor) VALUES(1)");
    }
}
    $data = mysqli_query($kon,"SELECT * FROM tb_visitor LIMIT 1");
    
    $tampil = mysqli_fetch_array($data);

    $visitor = $tampil['visitor'];

?>
  
 
 
 <!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Berita Terbaru</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">

                        
                            <ul>
                            <?php 
                            include 'Admin/koneksi.php';
                            $query = mysqli_query($kon,"SELECT * FROM tb_berita ORDER BY idberita DESC");

                            while ($terbaru = mysqli_fetch_array($query)){
                        ?>
                                <li><a href="#"><?= $terbaru['judul']; ?></a></li>
                                <?php } ?>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- ##### Breaking News Area End ##### -->
   
   
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                
                            </div>
                        </div>
                        
                       
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Slideshow -->
            <div class="video-slideshow py-5" style="background-image: url(img/bg-img/88.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Slides -->
                        <div class="video-slides owl-carousel">

                        <?php 
                            include 'Admin/koneksi.php';
                            $query = mysqli_query($kon,"SELECT * FROM tb_berita ORDER BY idberita DESC LIMIT 3");

                            while ($berita1 = mysqli_fetch_array($query)){
                        ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail" style="height: 17em;">
                                    <a href="index.php?page=detail_pemerintahan&title=<?= $berita1['judul_seo'] ?>"><img src="<?php echo 'Admin/assets/images/'.$berita1['gambar']; ?>" style="height: 100%; object-fit: cover;"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                   
                                <a href="index.php?page=detail_pemerintahan&title=<?= $berita1['judul_seo'] ?>" class="post-title"><?= $berita1['judul']; ?></a>
                                <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="index.php?page=detail_pemerintahan&title=<?= $berita1['judul_seo'] ?>">
                        <button type="button" class="btn btn-danger" href="index.php?page=detail_pemerintahan&title=<?= $berita1['judul_seo'] ?>">Read More</button></a>
                                </div>
                            </div>
                            <?php } ?>
                    


                           
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

  
   
    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>All the news</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                    <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Local</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">

                         <?php 
                            include 'Admin/koneksi.php';
                            $query = mysqli_query($kon,"SELECT * FROM tb_berita ORDER BY idberita DESC LIMIT 2");

                            while ($berita = mysqli_fetch_array($query)){
                        ?>
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="index.php?page=detail_pemerintahan&title=<?= $berita['judul_seo'] ?>"><img src="<?php echo 'Admin/assets/images/'.$berita['gambar']; ?>" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                               
                                                <a href="index.php?page=detail_pemerintahan&title=<?= $berita['judul_seo'] ?>" class="post-title"><?= $berita['judul']; ?></a>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                
                                    <?php 
                            include 'Admin/koneksi.php';
                            $query = mysqli_query($kon,"SELECT * FROM tb_berita ORDER BY idberita DESC LIMIT 10");

                            while ($berita2 = mysqli_fetch_array($query)){
                        ?>
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="index.php?page=detail_pemerintahan&title=<?= $berita2['judul_seo'] ?>"><img src="<?php echo 'Admin/assets/images/'.$berita2['gambar']; ?>" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                
                                                  <a href="index.php?page=detail_pemerintahan&title=<?= $berita2['judul_seo'] ?>" class="post-title"><?= $berita2['judul']; ?></a>
                                            </div>
                                        </div>
                            </div>
                                <?php } ?>
                                   
                                   
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>


    
	
                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                    <div class="single-widget-area add-widget mb-30" style="width: 425px; height:350">
                    <button type="submit" class="btn newsbox-btn w-100 mb-20"><b class="fa fa-user" style="font-size:30px">Kunjungan: &nbsp;<?= $visitor; ?></b></button>
                    </div>   
                    <!-- Newsletter Widget -->
                        <div class="single-widget-area add-widget mb-30" style="width: 425px; height:350">
                      
    		        	<div id="gpr-kominfo-widget-container"></div>
                                
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=100.62652587890625%2C-1.0216743684873772%2C100.91491699218751%2C-0.7587211108570728&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=12/-0.8902/100.7707">Lihat peta lebih besar</a></small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area End ##### -->

    <!-- ##### Video Area Start ##### -->
    <section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/88.jpg);height: 25em">
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                           
                            <h3 class="video-title">NAGARI SUPAYANG</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <h2><center>WISATA NAGARI SUPAYANG</center></h2>
        <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
           <!-- Single News Area -->
           <?php 
              include 'Admin/koneksi.php';
            $query = mysqli_query($kon,"SELECT * FROM tb_info ORDER BY id_info DESC LIMIT 3");

            while ($info = mysqli_fetch_array($query)){
        ?>

           <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-3">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="<?php echo 'Admin/assets/images/'.$info['gambar']; ?>" style="height: 200px; object-fit: cover;"></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                        <h3><?= $info['nama_wisata']; ?></h3>
                        <a  href="index.php?page=detail_infowisata&slug=<?= $info['slug']; ?>" class="btn btn-danger">Read More</a>
                            
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

					
                        
						
					</div>
                </div><!-- end col -->

                
                  

               
            </div><!-- end row -->

           
           
        </div><!-- end container -->
    </div><!-- end section -->

   
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

   

    	