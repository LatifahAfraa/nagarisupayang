<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data</li>
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
              Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">

                      <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Judul"
                            required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                          <select name="jenis" class="form-control">
                            <option value="">--Pilih Jenis--</option>
                            <option value="DATA WALI NAGARI DAN PERANGKAT/STAF">DATA WALI NAGARI DAN PERANGKAT/STAF</option>
                            <option value="DATA BPN DAN ANGGOTA">DATA BPN DAN ANGGOTA</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="editor" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea type="text" name="deskripsi" id="editor"
                            class="form-control"><?= $data['deskripsi'] ?></textarea>
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
  # code...
  $judul= $_POST['judul'];
  $jenis = $_POST['jenis'];
  $deskripsi= $_POST['deskripsi'];

  $simpan= mysqli_query($kon, "INSERT INTO tb_data (judul, jenis, deskripsi) VALUES ('$judul','$jenis','$deskripsi')");
  if ($simpan) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='?module=datadesa/datanagari'</script>";
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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_data");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r["jenis"];?></td>
                    <td><?= $r["judul"]; ?></td>
                    <td><?= $r["deskripsi"]; ?></td>
                    <td>
                      <a href="?module=datadesa/data&aksi=editdata&id_data=<?= $r['id_data']; ?>"
                        class="btn btn-flat btn-primary" style="border-radius:2px;">Edit</a>
                      <a href="?module=datadesa/data&aksi=hapusdata&id_data=<?= $r['id_data']; ?>"
                        class="btn btn-info">Hapus</a>
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