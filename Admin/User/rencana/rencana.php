<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahrencana":

        if (isset($_POST['save'])) {
          $namarencana = $_POST['namarencana'];
          $keterangan =$_POST['keterangan'];
          $lokasi_file = $_FILES['file']['tmp_name'];
          $nama_file = time() . "_" . ($_FILES['file']['name']);
          $lokasi_gambar = $_FILES['gambar']['tmp_name'];
          $nama_gambar = time() . "_" . ($_FILES['gambar']['name']);
          if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
          }
          if (!empty($lokasi_gambar)) {
            move_uploaded_file($lokasi_gambar, "../assets/images/" . $nama_gambar);
          }


          $save = mysqli_query($kon, "INSERT INTO tb_rencana(namarencana,keterangan,file, gambar) VALUES('$namarencana','$keterangan','$nama_file', '$nama_gambar')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=rencana/rencana';
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
            Tambah Perencanaan nagari
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Perencanaan Nagari</li>
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
                        <label for="kdp" class="col-sm-2 control-label">Nama Rencana</label>
                        <div class="col-sm-10">
                          <input type="text" name="namarencana" id="kdp" class="form-control">
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

                      <div class="form-group row">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=rencana/rencana" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editrencana":
          if (isset($_GET['id_rencana'])) {
            $sql = mysqli_query($kon, "SELECT * FROM tb_rencana where id_rencana='$_GET[id_rencana]'");
            $data = mysqli_fetch_assoc($sql);
          }
          if (isset($_POST['upload'])) {
              
            $namarencana = $_POST['namarencana'];
            $keterangan =$_POST['keterangan'];
            $lokasi_file = $_FILES['file']['tmp_name'];
            $nama_file = time() . "_" . ($_FILES['file']['name']);
            $lokasi_gambar = $_FILES['gambar']['tmp_name'];
            $nama_gambar = time() . "_" . ($_FILES['gambar']['name']);
            if (!empty($lokasi_file)) {
              move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
            } else {
              $nama_file = $_POST["filelama"];
            }
            if (!empty($lokasi_gambar)) {
                move_uploaded_file($lokasi_gambar, "../assets/images/" . $nama_gambar);
              } else {
                $nama_gambar = $_POST["gambarlama"];
              }
  
            $save = mysqli_query($kon, "UPDATE tb_rencana set namarencana='$namarencana', keterangan='$keterangan', file ='$nama_file', gambar='$nama_gambar' where id_rencana='$_GET[id_rencana]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='?module=rencana/rencana';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          }
      ?>
        <section class="content-header">
          <h1>
          Edit Perencanaan Nagari
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Perencanaan Nagari</li>
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
                      <label for="jdl" class="col-sm-2 control-label">Nama Rencana</label>
                      <div class="col-sm-10">
                        <input type="text" name="namarencana" id="jdl" class="form-control" value="<?= $data['namarencana']; ?>">
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
                        <b>*File Lama ===>  </b> <input name="filelama" type="hidden" class="form-control" value="<?= $data['file'] ?> "><?= $data['file'] ?> 
                          <input type="file" name="file" class="form-control" id="file" placeholder="Masukan File">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                        <b>*Gambar Lama ===>  </b> <input name="gambarlama" type="hidden" class="form-control" value="<?= $data['gambar'] ?>" ><?= $data['gambar'] ?> 
                          <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Masukan Gambar">
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
      case "hapusrencana":

        if (isset($_GET['id_rencana'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_rencana where id_rencana='$_GET[id_rencana]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_rencana where id_rencana='$_GET[id_rencana]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=rencana/rencana';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=rencana/rencana';
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
      Perencanaan Nagari
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Perencanaan Nagari</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=rencana/rencana&aksi=tambahrencana" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Perencanaan Nagari</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Rencana</th>
                      <th>Keterangan</th>
                      <th>File</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_rencana");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>

                      <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r["namarencana"]; ?></td>
                      <td><?= $r["keterangan"]; ?></td>
                      <td><?= $r["file"];?></td>
                      <td><img style="width:75px;height:75px;" src="../assets/images/<?= $r['gambar'] ?>"></td>
                        <td><a href="?module=rencana/rencana&aksi=editrencana&id_rencana=<?= $r['id_rencana']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=rencana/rencana&aksi=hapusrencana&id_rencana=<?= $r['id_rencana']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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