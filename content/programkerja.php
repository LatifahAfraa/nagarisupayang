<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Program Kerja</p>
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
            $query = mysqli_query($kon,"SELECT * FROM tb_programkerja");

            if(mysqli_num_rows($query) == 0) {
                echo "<h2>*Data Program Kerja Belum Ada*</h2>";
            } else {
            }
                while ($program = mysqli_fetch_array($query)){
            
          
        ?>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-3">
                        <!-- Blog Thumbnail -->
                        <div class="post-content">
							<div class="blog-title">
								<h2><a href="#" title=""><?= $program['namaprogram'];?></a></h2>
							</div>
							<div class="blog-desc">
								<p align="justify"><?= $program['keterangan'];?></p>
							</div>							
						</div>

                    
                    </div>
                </div>
                <?php } ?>
             
                
             
                    </div>
                </div>

            </div>
        </div>
    </div>