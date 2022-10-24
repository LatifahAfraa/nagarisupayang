<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahkeuangan":

        if (isset($_POST['save'])) {
          $namaanggaran = $_POST['namaanggaran'];
          $keterangan =$_POST['keterangan'];
          $lokasi_file = $_FILES['file']['tmp_name'];
          $nama_file = time() . "_" . ($_FILES['file']['name']);
          if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
          }


          $save = mysqli_query($kon, "INSERT INTO tb_keuangan(namaanggaran,keterangan,file) VALUES('$namaanggaran','$keterangan','$nama_file')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=keuangan/keuangan';
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
            Tambah Transparansi Keuangan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Transparansi Keuangan</li>
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
                        <label for="kdp" class="col-sm-2 control-label">Nama Anggaran</label>
                        <div class="col-sm-10">
                          <input type="text" name="namaanggaran" id="kdp" class="form-control">
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
                          <input type="file" name="file" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=keuangan/keuangan" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editkeuangan":
          if (isset($_GET['id_keuangan'])) {
            $sql = mysqli_query($kon, "SELECT * FROM tb_keuangan where id_keuangan='$_GET[id_keuangan]'");
            $data = mysqli_fetch_assoc($sql);
          }
          if (isset($_POST['upload'])) {
            $namaanggaran = $_POST['namaanggaran'];
            $keterangan =$_POST['keterangan'];
            $lokasi_file = $_FILES['file']['tmp_name'];
            $nama_file = time() . "_" . ($_FILES['file']['name']);
            if (!empty($lokasi_file)) {
              move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
            } else {
              $nama_file = $_POST["filelama"];
            }
  
            $save = mysqli_query($kon, "UPDATE tb_keuangan set namaanggaran='$namaanggaran', keterangan='$keterangan', file ='$nama_file' where id_keuangan='$_GET[id_keuangan]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='?module=keuangan/keuangan';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          }
      ?>
        <section class="content-header">
          <h1>
          Edit Transparansi Keuangan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Transparansi Keuangan</li>
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
                      <label for="jdl" class="col-sm-2 control-label">Nama Anggaran</label>
                      <div class="col-sm-10">
                        <input type="text" name="namaanggaran" id="jdl" class="form-control" value="<?= $data['namaanggaran']; ?>">
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
                        <iframe src="../assets/images/<?php echo $data['file'] ?>"></iframe>
                         <input name="filelama" type="hidden" class="form-control" value="<?= $data['file'] ?>" > 
                          <input type="file" name="file" class="form-control" id="file" placeholder="Masukan File">
                        </div>
                      </div>



                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="upload" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=keuangan/keuangan" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapuskeuangan":

        if (isset($_GET['id_keuangan'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_keuangan where id_keuangan='$_GET[id_keuangan]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_keuangan where id_keuangan='$_GET[id_keuangan]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=keuangan/keuangan';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=keuangan/keuangan';
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
      Transparansi Keuangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Transparansi Keuangan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=keuangan/keuangan&aksi=tambahkeuangan" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Transparansi Keuangan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Anggaran</th>
                      <th>Keterangan</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_keuangan");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>

                      <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r["namaanggaran"]; ?></td>
                      <td><?= $r["keterangan"]; ?></td>
                      <td><?= $r["file"];?></td>
                        <td><a href="?module=keuangan/keuangan&aksi=editkeuangan&id_keuangan=<?= $r['id_keuangan']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=keuangan/keuangan&aksi=hapuskeuangan&id_keuangan=<?= $r['id_keuangan']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      </tr>
                    <?php $no++;
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