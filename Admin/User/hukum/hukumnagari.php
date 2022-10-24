<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Produk Hukum Nagari
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Poduk Hukum Nagari</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i
                class="fa fa-plus"></i>
              Tambah Produk Hukum Nagari
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk Hukum Nagari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                          <select name="jenis" class="form-control">
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
                            class="form-control"></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="file" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10">
                          <input type="file" name="file" class="form-control" id="file" placeholder="Masukan File">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-check">
                              Save</i></button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times">
                               Close</i></button>
                        </div>
                      </div>
                    </form>
                    <?php


        if (isset($_POST['submit'])) {
          $jenis= $_POST['jenis'];
          $deskripsi= $_POST['deskripsi'];

          $originalname = $_FILES['file']['name'];
          $lokasi_file = $_FILES['file']['tmp_name'];
          $nama_file = time() . "_" . $originalname;
          
          if($originalname == "")
          {
            $simpan= mysqli_query($kon, "INSERT INTO tb_peraturan (jenis, deskripsi, file) VALUES ('$jenis','$deskripsi', '')");

         
            if ($simpan == True) {
              move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
              echo "<script>
              alert('Tambah Data Berhasil');
              window.location='?module=hukum/hukumnagari';
              </script>";
              exit;
            } else {
              echo "<script>alert('Gagal');
              </script>";
            }
          }
          else{
            $simpan= mysqli_query($kon, "INSERT INTO tb_peraturan (jenis, deskripsi, file) VALUES ('$jenis','$deskripsi', '$nama_file')");

         
          if ($simpan == True) {
            move_uploaded_file($lokasi_file, "../assets/images/" . $nama_file);
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=hukum/hukumnagari';
            </script>";
            exit;
          } else {
            echo "<script>alert('Gagal');
            </script>";
          }
          }
      
          

          
        }
  ?>
                    
                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="box-body">
            <div class="table table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_peraturan");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r["jenis"]; ?></td>
                    <td><?= $r["deskripsi"]; ?></td>
                    <td><?= $r["file"];?></td>
                    <td>
                      <a href="?module=hukum/hukum&aksi=edithukum&id_peraturan=<?= $r['id_peraturan']; ?>"
                        class="btn btn-flat btn-primary" style="border-radius:2px;">Edit Peraturan</a>
                      <a href="?module=hukum/hukum&aksi=hapushukum&id_peraturan=<?= $r['id_peraturan']; ?>"
                        class="btn btn-info">Hapus Peraturan</a>
                    </td>
                  </tr>
                  <?php 
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>