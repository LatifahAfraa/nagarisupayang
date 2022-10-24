<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahprofil":

        if (isset($_POST['save1'])) {
          $kat = $_POST['jenis'];
          $save = mysqli_query($kon, "INSERT INTO tb_data (id_data,jenis, judul,deskripsi) VALUES ('','$kat','$_POST[judul]' ,'$_POST[deskripsi]')");
          if ($save) {
            echo "<script>
              alert('Tambah Data Berhasil');
              window.location='?module=datadesa/datanagari ';
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
            Data
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Data</li>
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
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-8">
                          <input name="jenis" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="judul" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input name="judul" type="text" class="form-control">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control"></textarea>
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
      case "editdata":
        if (isset($_GET['id_data'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_data where id_data='$_GET[id_data]'");
          $data = mysqli_fetch_assoc($sql);
        }
      ?>
        <section class="content-header">
          <h1>
            Edit Data
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Data</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form method="POST" class="form-horizontal" action="datadesa/dataedit.php">
                  <div class="box-body">
                    <div class="col-sm-12">
                    <div class="form-group">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-8">
                          <select name="jenis" class="form-control">
                            <option value="<?=$data['jenis']?>"><?=$data['jenis']?></option>
                            <option value="">--Pilih Jenis--</option>
                            <option value="DATA WALI NAGARI DAN PERANGKAT/STAF">DATA WALI NAGARI DAN PERANGKAT/STAF</option>
                            <option value="DATA BPN DAN ANGGOTA">DATA BPN DAN ANGGOTA</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="judul" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input name="id_data" type="hidden" id="judul" class="form-control" value="<?= $data['id_data'] ?>">
                          <input name="judul" id="judul" class="form-control" value="<?= $data['judul'] ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control"><?= $data['deskripsi'] ?></textarea>
                        </div>
                      </div>

                      <input type="hidden" name="id_data" value="<?= $_GET['id_data'] ?>">


                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=datadesa/datanagari" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapusdata":

        if (isset($_GET['id_data'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_data where id_data='$_GET[id_data]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_data where id_data='$_GET[id_data]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=datadesa/datanagari';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=datadesa/datanagari';
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