<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahlembaga":

        if (isset($_POST['save1'])) {
          $kat = $_POST['kategori'];
          $save = mysqli_query($kon, "INSERT INTO tb_lembaga (kategori,deskripsi) VALUES ('$kat','$_POST[deskripsi]')");
          if ($save) {
            echo "<script>
              alert('Tambah Data Berhasil');
              window.location='?module=lembaga/lpm';
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
            Tambah Lembaga Masyarakat
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Lembaga Masyarakat</li>
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
                        <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                          <select name="kategori" class="form-control">
                            <option value="">--Pilih Kategori Lembaga--</option>
                            <option value="KAN">KAN</option>
                            <option value="LPMN">LPMN</option>
                            <option value="PKK">PKK</option>
                            <option value="Bundo Kanduang">Bundo Kanduang</option>
                            <option value="MUI">MUI</option>
                            <option value="Remaja Mesjid">Remaja Mesjid</option>
                            <option value="Pemuda Nagari">Pemuda Nagari</option>
                            <option value=" BUMNAG">BUMNAG</option>
                            <option value="Forum Paud">Forum Paud</option>
                          </select>
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
      case "editlembaga":
        if (isset($_GET['id_lembaga'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_lembaga where id_lembaga='$_GET[id_lembaga]'");
          $data = mysqli_fetch_assoc($sql);
        }
      ?>
        <section class="content-header">
          <h1>
            Edit Lembaga Masyarakat
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Lembaga Masyarakat</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form method="POST" class="form-horizontal" action="lembaga/edit_lpm.php" >
                  <div class="box-body">
                    <div class="col-sm-12">
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                          <select name="kategori" class="form-control">
                            <option value="<?=$data['kategori']?>"><?=$data['kategori']?></option>
                            <option value="">--Pilih Kategori Lembaga--</option>
                            <option value="KAN">KAN</option>
                            <option value="LPMN">LPMN</option>
                            <option value="PKK">PKK</option>
                            <option value="Bundo Kanduang">Bundo Kanduang</option>
                            <option value="MUI">MUI</option>
                            <option value="Remaja Mesjid">Remaja Mesjid</option>
                            <option value="Pemuda Nagari">Pemuda Nagari</option>
                            <option value=" BUMNAG">BUMNAG</option>
                            <option value="Forum Paud">Forum Paud</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control"><?= $data['deskripsi'] ?></textarea>
                        </div>
                      </div>

                      <input type="hidden" name="id_lembaga" value="<?= $_GET['id_lembaga'] ?>">


                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=lembaga/lpm_crud" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapuslembaga":

        if (isset($_GET['id_lembaga'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_lembaga where id_lembaga='$_GET[id_lembaga]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_lembaga where id_lembaga='$_GET[id_lembaga]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=lembaga/lpm';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=lembaga/lpm';
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