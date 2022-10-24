<?php 
  include "conf/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/ec727a9ce6.js" crossorigin="anonymous"></script>
    
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Website Nagari Supayang</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body id="body">

    <?php
include "component/header.php"?>

 
<?php
  if(isset($_GET['page'])){
    if($_GET['page']=='home'){
      include "content/home.php";
    }else if($_GET['page'] == 'sejarah'){
      include "content/sejarah.php";
        }else if($_GET['page'] == 'visimisi'){
      include "content/visimisi.php";
        }else if($_GET['page'] == 'demografi'){
      include "content/demografi.php";
    }else if($_GET['page'] == 'topografi'){
      include "content/topografi.php";
    }else if($_GET['page'] == 'kondisiumum'){
      include "content/kondisiumum.php"; 
    }else if($_GET['page'] == 'programkerja'){
      include "content/programkerja.php";  
    }else if($_GET['page'] == 'peraturannagari'){
      include "content/peraturannagari.php";  
    }else if($_GET['page'] == 'peraturanwali'){
      include "content/peraturanwali.php";  
    }else if($_GET['page'] == 'databpn'){
      include "content/databpn.php";  
    }else if($_GET['page'] == 'datawali'){
      include "content/datawali.php";   
    }else if($_GET['page'] == 'galeri'){
      include "content/galeri.php";
    }else if($_GET['page'] == 'infowisata'){
      include "content/infowisata.php";
    }else if($_GET['page'] == 'detail_infowisata'){
      include "content/detail_infowisata.php";
    }else if($_GET['page'] == 'pemerintahan'){
      include "content/pemerintahan.php";
    }else if($_GET['page'] == 'pembangunan'){
      include "content/pembangunan.php";
    }else if($_GET['page'] == 'pembinaan'){
      include "content/pembinaan.php";
    }else if($_GET['page'] == 'pemberdayaan'){
      include "content/pemberdayaan.php";
    }else if($_GET['page'] == 'pengumummandanhimbauan'){
      include "content/pengumuman.php";
    }else if($_GET['page'] == 'detail_pemerintahan'){
      include "content/detail_pemerintahan.php";
    }else if($_GET['page'] == 'detail_pemberdayaan'){
      include "content/detail_pemberdayaan.php";
    }else if($_GET['page'] == 'detail_pembangunan'){
      include "content/detail_pembangunan.php";
    }else if($_GET['page'] == 'detail_pembinaan'){
      include "content/detail_pembinaan.php";
    }else if($_GET['page'] == 'detail_pengumummandanhimbauan'){
      include "content/detail_pengumuman.php";
    }else if($_GET['page'] == 'inovasinagari'){
      include "content/inovasi.php";
    }else if($_GET['page'] == 'detail_inovasinagari'){
      include "content/detail_inovasi.php";
     }else if($_GET['page'] == 'bantuansosial'){
      include "content/bantuansosial.php";
        }else if($_GET['page'] == 'detail_bantuansosial'){
      include "content/detail_bantuansosial.php";
    }else if($_GET['page'] == 'jumlahpenduduk'){
      include "content/jumlahpenduduk.php";
    }else if($_GET['page'] == 'datapendidikan'){
      include "content/datapendidikan.php";
    }else if($_GET['page'] == 'datakerja'){
      include "content/datakerja.php";
    }else if($_GET['page'] == 'apbnagari'){
      include "content/apbnagari.php";
    }else if($_GET['page'] == 'danadesa'){
      include "content/danadesa.php";
    }else if($_GET['page'] == 'laporandana'){
      include "content/laporandana.php";
    }else if($_GET['page'] == 'rpjm'){
      include "content/rpjm.php";
    }else if($_GET['page'] == 'kebijakan'){
      include "content/kebijakan.php";
    }else if($_GET['page'] == 'layananpublik'){
      include "content/layananpublik.php";
    }else if($_GET['page'] == 'layananinformasi'){
      include "content/layananinformasi.php";
    }else if($_GET['page'] == 'layananpengaduan'){
      include "content/layananpengaduan.php";
    }else if($_GET['page'] == 'lembaganagari'){
      include "content/lembaganagari.php";
    }else if($_GET['page'] == 'layananbpjs'){
      include "content/layananbpjs.php";
    }else if($_GET['page'] == 'bumnag'){
      include "content/bumnag.php";
    }
  }else{
    include "content/home.php";
  }
  ?>
  
  <?php
  

  
  ?>
  <?php 
  include "component/footer.php"?>



<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

  

  

  

   
   

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