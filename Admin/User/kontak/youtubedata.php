<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahyoutube":

        if (isset($_POST['save1'])) {
          $youtube = anti_injection($_POST['youtube']);
          $link    = anti_injection($_POST['link']);
          $save    = mysqli_query($kon, "INSERT INTO youtube (idyoutube,youtube,link) VALUES ('','$youtube','$link')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=kontak/youtube';
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
            Youtube
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Youtube</li>
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
                <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Nama Youtube</label>
                        <div class="col-sm-8">
                          <input name="youtube" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-8">
                          <input name="link" type="text" class="form-control">
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


      <?php
        break;
      case "edityoutube":
        if (isset($_GET['idyoutube'])) {
          $sql = mysqli_query($kon, "SELECT * FROM youtube where idyoutube='$_GET[idyoutube]'");
          $data = mysqli_fetch_assoc($sql);
        }
      ?>
        <section class="content-header">
          <h1>
            Youtube
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Youtube</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form method="POST" class="form-horizontal" action="kontak/ytedit.php" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Nama Youtube</label>
                        <div class="col-sm-8">
                          <input name="idyoutube" type="hidden" id="des" class="form-control" value="<?= $data['idyoutube'] ?>">
                          <input name="youtube" id="des" class="form-control" value="<?= $data['youtube'] ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-8">

                          <input name="link" id="des" class="form-control" value="<?= $data['link'] ?>">
                          <input type="hidden" name="idyoutube" value="<?= $_GET['idyoutube'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=kontak/youtube" class="btn btn-primary btn-flat">Kembali</a>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "hapusyoutube":

        if (isset($_GET['idyoutube'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM youtube where idyoutube='$_GET[idyoutube]'"));

          $del = mysqli_query($kon, "DELETE FROM youtube where idyoutube='$_GET[idyoutube]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=kontak/youtube';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=kontak/youtube';
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