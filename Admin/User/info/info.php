<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahinfo":

        if (isset($_POST['save'])) {
          $nama_wisata = $_POST['nama_wisata'];
          $keterangan = $_POST['keterangan'];
          $nmberkas  = $_FILES["gambar"]["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $namfoto = time() . "_"  . $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg', 'JPG');
          @list($txt, $ext) = explode(".", $namfoto);
          if (in_array($ext, $valid)) {
            if (!empty($lokberkas)) {
              move_uploaded_file($lokberkas, "../assets/images/$namfoto");
            }

            $save = mysqli_query($kon, "INSERT INTO tb_info (nama_wisata, keterangan, gambar) VALUES ('$nama_wisata', '$keterangan','$namfoto')");

            if ($save) {
              echo "<script>
            alert('Tambah Data Berhasil');
            window.location='index.php?module=info/info';
            </script>";
              exit;
            } else {
              echo "<script>alert('Gagal');
            </script>";
            }
          } else {
            echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            INFORMASI PUBLIK
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Informasi Publik</li>
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
                    
                      <div class="form-group row">
                        <label for="kdp" class="col-sm-2 control-label">Nama Wisata</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama_wisata" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>


                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=info/info" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editinfo":
        if (isset($_GET['id_info'])) {
          $sql= mysqli_query($kon, "SELECT * FROM tb_info where id_info='$_GET[id_info]'");
          $r = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['upload'])) {
          $nama_wisata = $_POST['nama_wisata'];
          $keterangan    = $_POST['keterangan'];
          $nmberkas = $_FILES['gambar']["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $namfoto   = time() . "_"  .  $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg');

          if (empty($lokberkas)) {
            $save = mysqli_query($kon, "UPDATE tb_info set nama_wisata='$nama_wisata', keterangan='$keterangan' where id_info='$_GET[id_info]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='index.php?module=info/info';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          } else if (!empty($lokberkas)) {
            list($txt, $ext) = explode(".", $namfoto);
            if (in_array($ext, $valid)) {

              move_uploaded_file($lokberkas, "../assets/images/" . $namfoto);
              $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_info where id_info='$_GET[id_info]'"));

              unlink("../assets/images/" . $lihat['gambar']);

              $save = mysqli_query($kon, "UPDATE tb_info set nama_wisata='$nama_wisata', keterangan='$keterangan', gambar='$namfoto' where id_info='$_GET[id_info]'");
              if ($save) {
                echo "<script>
            alert('Edit Data Berhasil');
            window.location='index.php?module=info/info';
              </script>";
              } else {
                echo "<script>alert('Gagal');
              </script>";
              }
            } else {
              echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
              </script>";
            }
          }
        }
      ?>
        <section class="content-header">
          <h1>
        Informasi Wisata
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Informasi Wisata </li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <div class="box-body ">
                  

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Wisata </label>
                      <div class="col-sm-10">
                        <input type="text" name="nama_wisata" id="jdl" class="form-control" value="<?= $r['nama_wisata']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"><?= $r['keterangan']; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-4">
                      <img src="../assets/images/<?php echo $r['gambar'] ?>" width="200"></br><br>
                        <input type="file" name="gambar" id="gam" class="form-control">
                        <input type="hidden" name="gambarlama" id="jdl" class="form-control" value="<?= $r['gambar']; ?>">
                      </div>
                    </div>



                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="upload" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=info/info" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapusinfo":

        if (isset($_GET['id_info'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_info where id_info='$_GET[id_info]'"));

          unlink("../../img/blog/" . $lihat['gambar']);
          $del = mysqli_query($kon, "DELETE FROM tb_info where id_info='$_GET[id_info]'");
          if ($del) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='index.php?module=info/info';
                  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=info/info';
              </script>";
          }
        }
      ?>
    <?php
        // break;
    }
  } else {
    ?>

    <section class="content-header">
      <h1>
        Informasi Wisata
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Informasi Wisata</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=info/info&aksi=tambahinfo" class="btn btn-flat btn-primary">Tambah Info Wisata</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Wisata</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($kon, "SELECT * FROM tb_info");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>

                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?=$r['nama_wisata'];?></td>
                        <td><img src="../assets/images/<?= $r["gambar"]; ?>" style="width:100px;"></td>
                        <td><?= $r["keterangan"]; ?></td>
                        <td><a href="?module=info/info&aksi=editinfo&id_info=<?= $r['id_info']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=info/info&aksi=hapusinfo&id_info=<?= $r['id_info']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      </tr>
                    <?php
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>
  <?php } ?>

</div>