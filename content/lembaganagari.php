<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                    <p class="post-title" style="font-size: 44px;">Lembaga Nagari Desa Nagari Supayang </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'KAN'");
	$data = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'PKK'");
	$data1 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'Bundo Kanduang'");
	$data2 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'LPMN'");
	$data3 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'Forum Paud'");
	$data4 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'Pemuda Nagari'");
	$data5 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'LINMAS'");
	$data6 = mysqli_fetch_array($result);

?>
<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'Remaja Mesjid'");
	$data7 = mysqli_fetch_array($result);

?>

<?php 			
      include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_lembaga where kategori = 'Remaja Mesjid'");
	$data8 = mysqli_fetch_array($result);

?>

	<br><br><br>
    <div id="overviews" class="section wb mb-6">
        <div class="container">
            <div class="row"> 
           
            <div class="col-md-2 col-md-offset-2"></div>
                <div class="col-md-9 blog-post-single">
                    <div class="blog-item"  style="overflow: hidden;">
						
                        <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data['deskripsi']?></ul></p>
							</div>	
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data1['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data2['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data3['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data4['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data5['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data6['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data7['deskripsi']?></ul></p>
							</div>
                            <div class="blog-desc" style="overflow: hidden;">
								<p><ul><?= $data8['deskripsi']?></ul></p>
							</div>	
					
					</div>
                </div>
	  
         </div><!-- end section -->
                 </div>
                     </div>

                     <br><br>
                     </div>
                     </div>
     </div>
         
         
     
    
    
