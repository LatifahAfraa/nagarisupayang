<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;"> Info Wisata Nagari Supayang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 			
    $result = mysqli_query($kon,"SELECT * FROM tb_info where slug = '$_GET[slug]'");
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
							<div class="blog-title">
								<h2><a href="#" title=""><?= $data['nama_wisata']?></a></h2>
							</div>
							<div class="blog-desc">
								<p align="justify"><?= $data['keterangan']?></p>
							</div>							
						</div>
					</div>
                </div>
                <div class="col-lg-4 ">
                <div class="sidebar-area">
                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                            <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                        </form>
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>
                </div>
                </div>  
            </div>
        </div>
    </div>
    </div><!-- end section -->
            </div>
</div>
    			
				
