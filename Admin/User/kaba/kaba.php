<?php
error_reporting(E_ALL);
?>
<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahkaba":

        if (isset($_POST['save'])) {

          function judul_seo($s) {  
            $c = array (' ');  
            $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');  
            $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d  
            
            $s = str_replace("+", "-", urlencode(strtolower(str_replace($c, '-', $s)))); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua  
            return $s;  
          }  
          
          $tglskrg = date('Y-m-d H:i:s');
          $judul = $_POST['judul'];
          $judulseo = judul_seo($_POST['judul']);
          $postby = $_POST['postby'];
          $jenis = $_POST['jenis'];
          $nam=$_FILES["gambar"]["name"];
          $nmberkas  = time() . "_" .$nam;
          $ukuran=$_FILES['gambar']['size'];
          
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $nmfoto = date("YmdHis") . $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg', 'JPG');

          if($nam == "")
{
  $save = mysqli_query($kon, "INSERT INTO tb_berita (judul, isiberita, posting_by, tgl_posting, judul_seo,jenis, gambar) VALUES ('$judul', '$_POST[deskripsi]', '$postby', '$tglskrg', '$judulseo','$jenis','')");
}

else{
  if($ukuran <= 2000000){
    @list($txt, $ext) = explode(".", $nmfoto);
  if (in_array($ext, $valid)) {
    if (!empty($lokberkas)) {
      move_uploaded_file($lokberkas, "../assets/images/$nmfoto");
    }

    $save = mysqli_query($kon, "INSERT INTO tb_berita (judul, isiberita, posting_by, tgl_posting, judul_seo,jenis, gambar) VALUES ('$judul', '$_POST[deskripsi]', '$postby', '$tglskrg', '$judulseo','$jenis','$nmfoto')");
    if ($save) {
      echo "<script>
    alert('Tambah Data Berhasil');
    window.location='index.php?module=kaba/kaba';
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
  else{
    echo "<script>
    alert('Format ukuran foto Foto Tidak Mendukung);
  </script>";
  }

}

          
          
        }
  ?>
        <section class="content-header">
          <h1>
            Kaba Pemerintahan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Kaba Pemerintahan</li>
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
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                          <select name="jenis" class="form-control">
                            <option value="">--Pilih Jenis--</option>
                            <option value="PEMERINTAHAN">PEMERINTAHAN</option>
                            <option value="PEMBANGUNAN">PEMBANGUNAN</option>
                            <option value="PEMBINAAN">PEMBINAAN</option>
                            <option value="PEMBERDAYAAN">PEMBERDAYAAN</option>
                            <option value="BANTUANSOSIAL">BANTUAN SOSIAL</option>
                            <option value="INOVASINAGARI">INOVASI NAGARI</option>
                            <option value="PENGUMUMMANDANHIMBAUAN">PENGUMUMMAN DAN HIMBAUAN</option>
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
                        <label for="editor" class="col-sm-2 control-label">Isi Berita</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="postby" class="col-sm-2 control-label">Posting By</label>
                        <div class="col-sm-4">
                          <input type="text" name="postby" id="postby" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                          <a href="?module=kaba/kaba" class="btn btn-primary btn-flat">Kembali</a>
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
      case "editkaba":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($kon, "SELECT * FROM tb_berita where idberita='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        
        function judul_seo($s) {  
          $c = array (' ');  
          $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');  
          $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d  
          
          $s = str_replace("+", "-", urlencode(strtolower(str_replace($c, '-', $s)))); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua  
          return $s;  
        }  

        if (isset($_POST['save'])) {
          $judulseo = judul_seo($_POST['judul']);
          $judul    = $_POST['judul'];
          $jenis    = $_POST['jenis'];
          $postby   = $_POST['postby'];
          $nmberkas = time() . "_" .($_FILES['foto']["name"]);
          $lokberkas = $_FILES["foto"]["tmp_name"];
          $nmfoto   = date("YmdHis") . $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg');

          if (empty($lokberkas)) {
            $save = mysqli_query($kon, "UPDATE tb_berita set judul='$judul',jenis='$jenis', isiberita='$_POST[deskripsi]', posting_by='$postby', judul_seo='$judulseo' where idberita='$_GET[id]'");
            if ($save) {
              echo "<script>
              alert('Edit Data Berhasil');
              window.location='index.php?module=kaba/kaba';
                </script>";
            } else {
              echo "<script>alert('Gagal');
                </script>";
            }
          } else if (!empty($lokberkas)) {
            list($txt, $ext) = explode(".", $nmfoto);
            if (in_array($ext, $valid)) {

              move_uploaded_file($lokberkas, "../assets/images/" . $nmfoto);
              $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_berita where idberita='$_GET[id]'"));

              unlink("../assets/images/" . $lihat['gambar']);

              $save = mysqli_query($kon, "UPDATE tb_berita set judul='$judul',jenis='$jenis', isiberita='$_POST[deskripsi]', gambar='$nmfoto', posting_by='$postby', judul_seo='$judulseo' where idberita='$_GET[id]'");
              if ($save) {
                echo "<script>
            alert('Edit Data Berhasil');
            window.location='index.php?module=kaba/kaba';
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
            Kaba Pemerintahan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Kaba Pemerintahan</li>
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
                  <div class="form-group row">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                          <select name="jenis" class="form-control">
                            <option><?= $data['jenis'] ?></option>
                            <option value="">--Pilih Jenis--</option>
                            <option value="PEMERINTAHAN">PEMERINTAHAN</option>
                            <option value="PEMBANGUNAN">PEMBANGUNAN</option>
                            <option value="PEMBINAAN">PEMBINAAN</option>
                            <option value="PEMBERDAYAAN">PEMBERDAYAAN</option>
                            <option value="BANTUANSOSIAL">BANTUAN SOSIAL</option>
                            <option value="INOVASINAGARI">INOVASI NAGARI</option>
                            <option value="PENGUMUMMANDANHIMBAUAN">PENGUMUMMAN DAN HIMBAUAN</option>
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
                      <label for="editor" class="col-sm-2 control-label">Isi Berita</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['isiberita']; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="postby" class="col-sm-2 control-label">Posting By</label>
                      <div class="col-sm-10">
                        <input type="text" name="postby" id="postby" class="form-control" value="<?= $data['posting_by']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-4">
                      <img src="../assets/images/<?php echo $data['gambar'] ?>" width="200"></br><br>
                        <input type="file" name="foto" id="gam" class="form-control">
                        <input type="hidden" name="gambarlama" id="jdl" class="form-control" value="<?= $data['gambar']; ?>">
                      </div>
                    </div>



                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        <a href="?module=kaba/kaba" class="btn btn-primary btn-flat">Kembali</a>
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
      case "hapuskaba":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM tb_berita where idberita='$_GET[id]'"));

          unlink("../../img/blog/" . $lihat['gambar']);
          $del = mysqli_query($kon, "DELETE FROM tb_berita where idberita='$_GET[id]'");
          if ($del) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='index.php?module=kaba/kaba';
                  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=kaba/kaba';
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
        Kaba Pemerintahan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kaba Pemerintahan</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=kaba/kaba&aksi=tambahkaba" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Kaba Pemerintahan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Isi Berita</th>
                      <th>Posting By</th>
                      <th>Tanggal Posting</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($kon, "SELECT * FROM tb_berita ORDER BY tgl_posting DESC");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>

                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?=$r['jenis'];?></td>
                        <td><img src="../assets/images/<?= $r["gambar"]; ?>" style="width:100px;"></td>
                        <td><?= $r["judul"]; ?></td>
                        <td><?=$r["isiberita"]; ?></td>
                        <td><?= $r["posting_by"]; ?></td>
                        <td><?= $r["tgl_posting"]; ?></td>
                        <td><a href="?module=kaba/kaba&aksi=editkaba&id=<?= $r['idberita']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=kaba/kaba&aksi=hapuskaba&id=<?= $r['idberita']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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