<?php
  $profil = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jprofil FROM tb_profil"));
  $data = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jdata FROM tb_data"));
  $hukum = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jhukum FROM tb_peraturan"));
  $kaba = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jkaba FROM tb_berita"));
  $info = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jinfo FROM tb_info"));
  $galeri = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jgaleri FROM tb_galeri"));
  $layanan = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jlayanan FROM tb_layanan"));
  $publik = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jpublik FROM informasipublic"));
  $proker = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jproker FROM tb_programkerja"));
  $lembaga = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jlembaga FROM tb_lembaga"));
  $rencana = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jrencana FROM tb_rencana"));
  $loker = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jloker FROM tb_loker"));
  $keuangan = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jkeuangan FROM tb_keuangan"));
  $tautan = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jtautan FROM tb_tautan"));
  $slider = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jslider FROM tb_slider"));


  
  
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      HOME
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">

          <div class="inner">
            <h3><?= $profil['jprofil'] ?></h3>
            <p>Profil Nagari</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <a href="?module=profil/profilnagari" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">

          <div class="inner">
            <h3><?= $data['jdata'] ?></h3>
            <p>Data Nagari</p>
          </div>
          <div class="icon">
            <i class="fa fa-list"></i>
          </div>
          <a href="?module=datadesa/datanagari" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">

          <div class="inner">
            <h3><?= $hukum['jhukum'] ?></h3>
            <p>Produk Hukum</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <a href="?module=hukum/hukumnagari" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">

          <div class="inner">
            <h3><?= $kaba['jkaba'] ?></h3>
            <p>Kaba Pemerintahan</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper-o"></i>
          </div>
          <a href="?module=kaba/kaba" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">

          <div class="inner">
            <h3><?= $info['jinfo'] ?></h3>
            <p>Info Wisata</p>
          </div>
          <div class="icon">
            <i class="fa fa-info"></i>
          </div>
          <a href="?module=info/info" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">

          <div class="inner">
            <h3><?= $galeri['jgaleri'] ?></h3>
            <p>Galeri Nagari</p>
          </div>
          <div class="icon">
            <i class="fa fa-camera"></i>
          </div>
          <a href="?module=galeri/galeribawaslu" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">

          <div class="inner">
            <h3><?= $layanan['jlayanan'] ?></h3>
            <p>Layanan</p>
          </div>
          <div class="icon">
            <i class="fa fa-bars"></i>
          </div>
          <a href="?module=layanan/layanannagari" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">

          <div class="inner">
            <h3><?= $publik['jpublik'] ?></h3>
            <p>Informasi Publik</p>
          </div>
          <div class="icon">
            <i class="fa fa-file"></i>
          </div>
          <a href="?module=informasi/informasipublik" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">

          <div class="inner">
            <h3><?= $proker['jproker'] ?></h3>
            <p>Program Kerja</p>
          </div>
          <div class="icon">
            <i class="fa fa-file"></i>
          </div>
          <a href="?module=proker/programkerja" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">

          <div class="inner">
            <h3><?= $lembaga['jlembaga'] ?></h3>
            <p>Lembaga Masyarakat</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="?module=lembaga/lpm" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">

          <div class="inner">
            <h3><?= $rencana['jrencana'] ?></h3>
            <p>Perencanaan Nagari</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-o"></i>
          </div>
          <a href="?module=rencana/rencana" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">

          <div class="inner">
            <h3><?= $loker['jloker'] ?></h3>
            <p>Lowongan Kerja</p>
          </div>
          <div class="icon">
            <i class="fa fa-tasks"></i>
          </div>
          <a href="?module=loker/loker" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">

          <div class="inner">
            <h3><?= $keuangan['jkeuangan'] ?></h3>
            <p>Transparansi Keuangan</p>
          </div><div class="icon">
            <i class="fa fa-file-text"></i>
          </div>
          <a href="?module=keuangan/keuangan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-navy">

          <div class="inner">
            <h3><?= $tautan['jtautan'] ?></h3>
            <p>Tautan</p>
          </div>
          <div class="icon">
            <i class="fa fa-tasks"></i>
          </div>
          <a href="?module=tautan/tautan" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">

          <div class="inner">
            <h3><?= $slider['jslider'] ?></h3>
            <p>Slider</p>
          </div>
          <div class="icon">
            <i class="fa fa-sliders"></i>
          </div>
          <a href="?module=slider/sliderbawaslu" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-navy">

          <div class="inner">
            <br><br><p>Logout</p></br>
          </div>
          <div class="icon">
            <i class="fa fa-sign-out"></i>
          </div>
          <a href="logout.php" class="small-box-footer">Selengkapnya <i
              class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>



    </div>

    <?php 
      $tahun = date('Y');
      $sql = mysqli_query($kon, "SELECT MONTH(tanggal) as bulan, SUM(hits) AS tot FROM statistik WHERE YEAR(tanggal)='$tahun' GROUP BY bulan");

      $statistik = '';
      while($pecah = mysqli_fetch_assoc($sql)){
        echo $pecah['bulan'];

        // $bulan = getBulan($pecah['bulan']);

        // $statistik .= "{bulan:'".$bulan."', tot:".$pecah["tot"]."},";
      }

     ?>

    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="chart" id="bar-chart" style="height: 300px; width: 100%;"></div>
      </div>
    </div>

  </section>
</div>

<link rel="stylesheet" href="assets/a/morris/morris.css">
<script src="assets/a/jquery.min.js"></script>
<script src="assets/a/raphael.min.js"></script>
<script src="assets/a/morris/morris.min.js"></script>

<!-- <script>
      $(function () {
        "use strict";

            var bar = new Morris.Bar({
            element: 'bar-chart',
            resize: true,
            data: [ <?php echo $statistik ?> ],
            xkey: ['bulan'],
            ykeys: ['tot'],
            labels: ['Total Pengunjung'],
            lineColors: ['#3c8dbc'],
            hideHover: 'auto'
          });
      });
    </script>
     -->