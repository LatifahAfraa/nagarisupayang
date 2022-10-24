<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "editprofil":
        if (isset($_GET['id_profil'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_profil where id_profil='$_GET[id_profil]'");
          $data = mysqli_fetch_assoc($sql);
        }
      ?>
        <section class="content-header">
          <h1>
            Profil
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Profil</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form method="POST" class="form-horizontal" action="profil/profiledit.php" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-8">
                          <input name="id_profil" type="hidden" id="des" class="form-control" value="<?= $data['id_profil'] ?>">
                          <input name="kategori" id="des" class="form-control" value="<?= $data['kategori'] ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control"><?= $data['deskripsi'] ?></textarea>
                        </div>
                      </div>

                      <input type="hidden" name="id_profil" value="<?= $_GET['id_profil'] ?>">


                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=profil/profilnagari" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapusprofil":

        if (isset($_GET['id_profil'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_profil where id_profil='$_GET[id_profil]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_profil where id_profil='$_GET[id_profil]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=profil/profilnagari';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=profil/profilnagari';
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