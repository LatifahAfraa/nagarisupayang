<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahproker":

        if (isset($_POST['save'])) {
          $namaprogram = $_POST['namaprogram'];
          $keterangan =$_POST['keterangan'];

          $save = mysqli_query($kon, "INSERT INTO tb_programkerja(namaprogram,keterangan) VALUES('$namaprogram','$keterangan')");
          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=proker/programkerja';
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
           Program Kerja
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Program Kerja</li>
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
                <form method="POST" class="form-horizontal" action="" >
                  <div class="box-body">
                    <div class="col-sm-12">
                    

                      <div class="form-group row">
                        <label for="kdp" class="col-sm-2 control-label">Nama Program Kerja</label>
                        <div class="col-sm-10">
                          <input type="text" name="namaprogram" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=informasi/informasipublic" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editproker":
          if (isset($_GET['id_program'])) {
            $sql = mysqli_query($kon, "SELECT * FROM tb_programkerja where id_program='$_GET[id_program]'");
            $data = mysqli_fetch_assoc($sql);
          }
          if (isset($_POST['upload'])) {
            $namaprogram = $_POST['namaprogram'];
            $keterangan =$_POST['keterangan'];
  
            $save = mysqli_query($kon, "UPDATE tb_programkerja set namaprogram='$namaprogram', keterangan='$keterangan' where id_program='$_GET[id_program]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='?module=proker/programkerja';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          }
      ?>
        <section class="content-header">
          <h1>
            Program Kerja
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Program kerja</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form action="" method="POST" class="form-horizontal" >
                  <div class="box-body ">
                  

                    <div class="form-group">
                      <label for="jdl" class="col-sm-2 control-label">Nama Program Kerja</label>
                      <div class="col-sm-10">
                        <input type="text" name="namaprogram" id="jdl" class="form-control" value="<?= $data['namaprogram']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="editor" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="keterangan" id="editor" class="form-control" rows="15" cols="80"><?= $data['keterangan']; ?></textarea>
                      </div>
                    </div>

                                        
                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="upload" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=proker/programkerja" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapusproker":

        if (isset($_GET['id_program'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_programkerja where id_program='$_GET[id_program]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_programkerja where id_program='$_GET[id_program]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=proker/programkerja';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=proker/programkerja';
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
        Program Kerja
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Program Kerja</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=proker/programkerja&aksi=tambahproker" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Program Kerja</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Program Kerja</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_programkerja");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>

                      <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r["namaprogram"]; ?></td>
                      <td><?= $r["keterangan"]; ?></td>
                        <td><a href="?module=proker/programkerja&aksi=editproker&id_program=<?= $r['id_program']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=proker/programkerja&aksi=hapusproker&id_program=<?= $r['id_program']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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