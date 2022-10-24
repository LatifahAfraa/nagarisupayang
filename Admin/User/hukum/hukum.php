<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {

      case "edithukum":
        if (isset($_GET['id_peraturan'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_peraturan where id_peraturan='$_GET[id_peraturan]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['upload'])) {
            $jenis= $_POST['jenis'];
            $deskripsi= $_POST['deskripsi'];

          $lokasi_file = $_FILES['file']['tmp_name'];
          $nama_file = time() . "_" .($_FILES['file']['name']);
          if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
          } else {
            $nama_file = $_POST["filelama"];
          }

          $save = mysqli_query($kon, "UPDATE tb_peraturan set jenis='$_POST[jenis]',deskripsi='$_POST[deskripsi]',file='$nama_file' where id_peraturan='$_GET[id_peraturan]'");
          if ($save) {
            echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=hukum/hukumnagari';
              </script>";
          } else {
            echo "<script>alert('Gagal');
              </script>";
          }
        }
      ?>
        <section class="content-header">
          <h1>
            Produk Hukum Nagari
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Produk Hukum Nagari</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>

                <!-- form start -->
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                          <select name="jenis" class="form-control">
                            <option><?= $data['jenis'] ?></option>
                            <option value="">--Pilih Jenis--</option>
                            <option value="PERATURAN NAGARI">PERATURAN NAGARI</option>
                            <option value="PERATURAN WALI NAGARI">PERATURAN WALI NAGARI</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label ">Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="deskripsi" id="editor"
                            class="form-control" value=""> <?= $data['deskripsi'] ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="file" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10">
                            
                         <!-- <img src="../assets/images/<?php echo $data['file'] ?>" width="200"></br><br> -->
                         <iframe src="../assets/images/<?php echo $data['file'] ?>"></iframe> <!--tampil file, video, gambar-->
                        <input name="filelama" type="hidden" class="form-control" value="<?= $data['file'] ?>" >
                          <input type="file" name="file" class="form-control" id="file" placeholder="Masukan File">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button class="btn btn-success" type="submit" name="upload"><i class="fa fa-check">
                              Save</i></button>
                        </div>
                      </div>
                    </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "hapushukum":

        if (isset($_GET['id_peraturan'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_peraturan where id_peraturan='$_GET[id_peraturan]'"));

          $del = mysqli_query($kon, "DELETE FROM tb_peraturan where id_peraturan='$_GET[id_peraturan]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=hukum/hukumnagari';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=hukum/hukumnagari';
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