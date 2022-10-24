 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Kondisi Umum Nagari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php 			
    $result = mysqli_query($kon,"SELECT * FROM tb_profil where kategori = 'kondisi nagari'");
	$data = mysqli_fetch_array($result);

    
?>
<div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
						
							
							<div class="blog-desc">
								<p><ul><?= $data['deskripsi']?></ul></p>
							</div>							
						</div>
					</div>
                    <div class="col-lg-3 col-12 right-single">
                    <div class="widget-search">
                        <div class="site-search-area">
                            <form method="get" id="site-searchform" action="#">
                                <div>
                                   
                                   
                                </div>
                            </form>
                        </div>
                    </div>
					 <!-- Sidebar Widget -->
                   

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
</section>
					
 
    
