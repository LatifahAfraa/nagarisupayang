<?php
include '../../koneksi.php';
?>
<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahsurat":

        if (isset($_POST['save1'])) {
          $nama=$_POST['nama'];
          $nik=$_POST['nik'];
          $email=$_POST['email'];
          $jenis=$_POST['jenis'];
          $komentar=$_POST['komentar'];

          $save = mysqli_query($kon, "INSERT INTO tb_surat (nama,nik,email,jenis,komentar) VALUES ('$nama', '$nik', '$email', '$jenis', '$komentar')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=surat/surat';
            </script>";
            exit;
          } else {
            echo "<script>alert('Gagal');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            SURAT ONLINE
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Surat Online</li>
          </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>
                <!-- form start -->
                <form method="POST" class="form-horizontal" action="">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group row">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                          <input name="nama" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-10">
                          <input name="nik" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input name="email" type="email" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 control-label">jenis</label>
                        <div class="col-sm-10">
                          <input name="jenis" type="text" class="form-control">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">komentar</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="komentar" id="editor" class="form-control"></textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save1" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </section>


      <!-- <?php
        break;
      case "editalamat":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_surat where id_surat='$_GET[id_surat]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $nama=$_POST['nama'];
          $nik=$_POST['nik'];
          $email=$_POST['email'];
          $jenis=$_POST['jenis'];
          $komentar=$_POST['komentar'];


          $save = mysqli_query($kon, "UPDATE tb_surat set nama='$nama', nik='$nik' where id_surat='$_GET[id_surat]'");
          if ($save) {
            echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=surat/surat';
              </script>";
          } else {
            echo "<script>alert('Gagal');
              </script>";
          }
        }
      ?>
        <section class="content-header">
          <h1>
            Surat Online
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Online</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                
                <form method="POST" class="form-horizontal" action="">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-8">
                          <input name="id" type="hidden" id="des" class="form-control" value="<?= $data['id'] ?>">
                          <input name="nama" id="des" class="form-control" value="<?= $data['alamat'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=kontak/alamatbawaslu" class="btn btn-primary btn-flat">Kembali</a>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </section> -->
      <?php
        break;
      case "hapus":

        if (isset($_GET['id_surat'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_surat where id_surat='$_GET[id_surat]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_surat where id_surat='$_GET[id_surat]'");
          if ($del) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='index.php?module=surat/surat';
                </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=surat/surat';
              </script>";
          }
        }
      ?>
  <?php
        break;
    }
  }
  ?>
</div>