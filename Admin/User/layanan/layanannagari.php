
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahlayanan":

        if (isset($_POST['save'])) {

          
          $judul = $_POST['judul'];
          $jenis = $_POST['jenis'];

          $save = mysqli_query($kon, "INSERT INTO tb_layanan (judul, deskripsi, jenis) VALUES ('$judul', '$_POST[deskripsi]', '$jenis')");
          if ($save) {
            echo "<script>
              alert('Tambah Data Berhasil');
              window.location='index.php?module=layanan/layanannagari';
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
            Layanan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Layanan</li>
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
                    <div class="form-group">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-8">
                          <select name="jenis" class="form-control">
                            <option value="">--Pilih Jenis Layanan--</option>
                            <option value="LAYANAN PUBLIK">LAYANAN PUBLIK</option>
                            <option value="LAYANAN INFORMASI">LAYANAN INFORMASI</option>
                            <option value="LAYANAN PENGADUAN">LAYANAN PENGADUAN</option>
                            <option value="LAYANAN BPJS MANDIRI">LAYANAN BPJS MANDIRI</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input type="text" name="judul" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>

                      

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=layanan/layanannagari" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editlayanan":
        if (isset($_GET['id_layanan'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_layanan where id_layanan='$_GET[id_layanan]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $judul = $_POST['judul'];
          $jenis = $_POST['jenis'];
          $save = mysqli_query($kon, "UPDATE tb_layanan set judul='$judul',jenis='$jenis', deskripsi='$_POST[deskripsi]' where id_layanan='$_GET[id_layanan]'");
          if ($save) {
            echo "<script>
              alert('Tambah Data Berhasil');
              window.location='index.php?module=layanan/layanannagari';
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
            Layanan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Layanan</li>
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
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-8">
                          <select name="jenis" class="form-control">
                            <option><?= $data['jenis'] ?></option>
                            <option value="">--Pilih Jenis Layanan--</option>
                            <option value="LAYANAN PUBLIK">LAYANAN PUBLIK</option>
                            <option value="LAYANAN INFORMASI">LAYANAN INFORMASI</option>
                            <option value="LAYANAN PENGADUAN">LAYANAN PENGADUAN</option>
                            <option value="LAYANAN BPJS MANDIRI">LAYANAN BPJS MANDIRI</option>
                          </select>
                        </div>
                      </div>

                    <div class="form-group">
                      <label for="jdl" class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul" id="jdl" class="form-control" value="<?= $data['judul']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['deskripsi']; ?></textarea>
                      </div>
                    </div>



                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=layanan/layanannagari" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapuslayanan":

        if (isset($_GET['id_layanan'])) {
          
          $del = mysqli_query($kon, "DELETE FROM tb_layanan where id_layanan='$_GET[id_layanan]'");
          if ($del) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='index.php?module=layanan/layanannagari';
                  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=layanan/layanannagari';
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
        Layanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Layanan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=layanan/layanannagari&aksi=tambahlayanan" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Layanan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($kon, "SELECT * FROM tb_layanan ");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                      
                    ?>

                      <tr>
                        <td><?= $no; ?></td>
                        <td><?=$r['jenis'];?></td>
                        <td><?= $r["judul"]; ?></td>
                        <td><?= $r["deskripsi"]; ?></td>
                        <td><a href="?module=layanan/layanannagari&aksi=editlayanan&id_layanan=<?= $r['id_layanan']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=layanan/layanannagari&aksi=hapuslayanan&id_layanan=<?= $r['id_layanan']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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