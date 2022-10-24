 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Kebijakan Dan Program Nagari Supayang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
   
<div id="overviews" class="section wb">
        <div class="container">
            <div class="row"> 

            <?php 			
    $result = mysqli_query($kon,"SELECT * FROM tb_rencana where namarencana = 'KEBIJAKAN DAN PROGRAM'");
    
    if(mysqli_num_rows($result)==0){
        echo "<h2>Data Belum Ada</h2>";

    }else{
       
    }
    while ($data = mysqli_fetch_array($result)){
?>

                <div class="col-lg-9 blog-post-single">
                    <div class="blog-content">	
                    <p class="post-title" style="font-size: 44px; text-align:center;">Kebijakan Dan Program</p>				
                    <div class="blog-thumbnail">
                        
                         <iframe src="<?php echo 'Admin/assets/images/'.$data['file']; ?>" height="700px" width="1000px"></iframe>
                        </div>
                        <br><br>						
						</div>
					</div>
                    <?php }?>
         <!-- Sidebar Widget -->
                <div class="col-6 col-sm-4 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                      
                     </div>
            </div>
        </div>
</div>
</div>
</section>
	
    

                