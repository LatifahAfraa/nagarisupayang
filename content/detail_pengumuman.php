<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">PENGUMUMMAN DAN HIMBAUAN NAGARI SUPAYANG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php 			
    $result = mysqli_query($kon,"SELECT * FROM tb_berita where judul_seo = '$_GET[title]'");
	$data = mysqli_fetch_array($result);

?>


 	

<br><br><br>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-8 blog-post-single">
                    <div class="blog-item"  style="overflow: hidden;">
						<div class="image-blog">
							<img class="img-fluid" src="<?php echo "admin/assets/images/".$data['gambar'] ?>">
						</div>
						<div class="post-content">
                            <br>
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <?= $data['tgl_posting']?> </span>	
							</div>
							<div class="blog-title">
								<h2><a href="#" title=""><?= $data['judul']?></a></h2>
							</div>
							<div class="blog-desc">
								<ul align="justify"><?= $data['isiberita']?></p>
							</div>							
						</div>
					</div>
                </div>
	  <!-- Sidebar Widget -->
      <div class="col-lg-4 ">
          <h1>===Late Post===</h1>

           <?php
                     // $jenis = strtoupper($_GET['page']);
                     $data = mysqli_query($kon, "SELECT * FROM tb_berita WHERE jenis='$data[jenis]' ORDER  BY tgl_posting DESC LIMIT 5");
                     while ($r = mysqli_fetch_assoc($data)) {
                 ?>
                             <div class="sidebar-area">
                             <div class="single-blog-post style-2 mb-5">
                             <!-- Blog Thumbnail -->
                             <div class="blog-thumbnail">
                                 <a href="index.php?page=detail_pengumummandanhimbauan&title=<?= $r['judul_seo'] ?>"><img src="admin/assets/images/<?= $r['gambar'] ?>" alt="amazing caves coverimage"  style="height: 200px; object-fit: cover;"></a>
                             </div>
     
                             <!-- Blog Content -->
                             <div class="blog-content">
                                 
                             <a href="index.php?page=detail_pengumummandanhimbauan&title=<?= $r['judul_seo'] ?>" class="post-title"><?=substr(strip_tags($r['judul']),0,50);?></a>
                                 <p align="justify"><?= substr(strip_tags($r['isiberita']),0,50);?></p>
     
                                 <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                             href="index.php?page=detail_pengumummandanhimbauan&title=<?= $r['judul_seo'] ?>">
                             <button type="button" class="btn btn-danger" href="index.php?page=detail_pengumummandanhimbauan&title=<?= $r['judul_seo'] ?>">selebihnya</button></a>
                             </div>
     
                             </div>  
              <?php } ?>                   
             </div><!-- end container -->
            
             </div><!-- end container -->
         </div><!-- end section -->
                 </div>
                     </div>
                     </div>
                     </div>
     </div>
    