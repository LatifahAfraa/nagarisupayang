<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahloker":

        if (isset($_POST['save'])) {
          $namaloker = $_POST['namaloker'];
          $keterangan =$_POST['keterangan'];
          $lokasi_file = $_FILES['gambar']['tmp_name'];
          $nama_file = time() . "_" . ($_FILES['gambar']['name']);
          if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
          }


          $save = mysqli_query($kon, "INSERT INTO tb_loker(namaloker,keterangan,gambar) VALUES('$namaloker','$keterangan','$nama_file')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=loker/loker';
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
            Informasi Loker
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Informasi Loker</li>
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
                        <label for="kdp" class="col-sm-2 control-label">Nama Loker</label>
                        <div class="col-sm-10">
                          <input type="text" name="namaloker" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="gam" class="col-sm-2 control-label">File</label>
                        <div class="col-sm-10">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=loker/loker" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editloker":
          if (isset($_GET['id_loker'])) {
            $sql = mysqli_query($kon, "SELECT * FROM tb_loker where id_loker='$_GET[id_loker]'");
            $data = mysqli_fetch_assoc($sql);
          }
          if (isset($_POST['upload'])) {
            $namaloker = $_POST['namaloker'];
            $keterangan =$_POST['keterangan'];
            $lokasi_file = $_FILES['gambar']['tmp_name'];
            $nama_file = time() . "_" . ($_FILES['gambar']['name']);
            if (!empty($lokasi_file)) {
              move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
            } else {
              $nama_file = $_POST["gambarlama"];
            }
  
            $save = mysqli_query($kon, "UPDATE tb_loker set namaloker='$namaloker', keterangan='$keterangan', gambar ='$nama_file' where id_loker='$_GET[id_loker]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='?module=loker/loker';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          }
      ?>
        <section class="content-header">
          <h1>
            Informasi Loker
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Informasi Loker</li>
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
                      <label for="jdl" class="col-sm-2 control-label">Nama Loker</label>
                      <div class="col-sm-10">
                        <input type="text" name="namaloker" id="jdl" class="form-control" value="<?= $data['namaloker']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"><?= $data['keterangan']; ?></textarea>
                      </div>
                    </div>

                    

                    <div class="form-group row">
                        <label for="file" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10">
                            
                         <img src="../assets/images/<?php echo $data['gambar'] ?>" width="200"></br><br>
                        <input name="gambarlama" type="hidden" class="form-control" value="<?= $data['gambar'] ?>" >
                          <input type="file" name="gambar" class="form-control" id="file" placeholder="Masukan File">
                        </div>
                      </div>



                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="upload" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=loker/loker" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapusloker":

        if (isset($_GET['id_loker'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_loker where id_loker='$_GET[id_loker]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_loker where id_loker='$_GET[id_loker]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=loker/loker';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=loker/loker';
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
        Informasi Loker
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Informasi Loker</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=loker/loker&aksi=tambahloker" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Informasi Loker</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Loker</th>
                      <th>Keterangan</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_loker");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>

                      <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r["namaloker"]; ?></td>
                      <td><?= $r["keterangan"]; ?></td>
                      <td><img src="../assets/images/<?= $r["gambar"]; ?>" style="width:100px;"></td>
                        <td><a href="?module=loker/loker&aksi=editloker&id_loker=<?= $r['id_loker']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=loker/loker&aksi=hapusloker&id_loker=<?= $r['id_loker']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      </tr>
                    <?php ;
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