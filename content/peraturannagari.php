<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Peraturan Nagari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">

            <?php 			
                $result = mysqli_query($kon,"SELECT * FROM tb_peraturan where  jenis = 'PERATURAN NAGARI'");
               while ($data = mysqli_fetch_array($result)) {    
            ?>

                <div class="col-12 col-sm-6 col-lg-4">
                  


            <div class="modal fade "  id="exampleModalLong<?=$data['id_peraturan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="width: 850px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $data['deskripsi']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <embed src="<?php echo 'Admin/assets/images/'.$data['file']; ?>" style="width:800px; height: 800px; object-fit: cover;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><embed src="<?php echo 'Admin/assets/images/'.$data['file']; ?>" style="height: 300px; object-fit: cover;"></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                        <a href="#" class="post-title"><?= $data['deskripsi']; ?></a>

           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong<?=$data['id_peraturan']?>">BUKA</button></a>
                          
                        </div>
                    </div>
                </div>
                <?php } ?>


      
                
               </div>
               </div>
                     </div>
  
    
