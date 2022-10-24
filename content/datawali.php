<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;">Data Wali Nagari & Perangkat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 			
    include 'Admin/koneksi.php';
    $result = mysqli_query($kon,"SELECT * FROM tb_data where jenis = 'DATA WALI NAGARI DAN PERANGKAT/STAF'");


    
?>
<br><br>
<p class="post-title" style="font-size: 44px; color:black; text-align:center;">Data Wali Nagari & Perangkat</p>
<br><br>
<div class="row">
<div class="col-md-3 col-md-offset-2"></div>
<div  class="col-md-6 col-md-offset-2  ">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <?php $a=0; while(	$data = mysqli_fetch_array($result)){ ?>
    <li data-target="#carouselExampleCaptions" data-slide-to="<?= $a++ ?>" class="active"></li>';
   
  <?php } ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach($result as $r => $rr) : ?>
    <div class="carousel-item <?= $r==0 ? 'active' : ''?> ">
      <img src="Admin/assets/images/<?= $rr['gambar'] ?>" style="width: 576px;height: 786px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" >
        <h5><?= $rr['nama']; ?></h5>
        <p style="color: black;"><b><?= $rr['judul'];?></b></p>
      </div>
    </div>
   <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>
</div>
<br><br>

  
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>					
                