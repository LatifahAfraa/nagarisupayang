<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Profil Nagari
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Profil Nagari</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#exampleModal"><i class="fa fa-plus"></i>
                        Tambah Profil
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Profil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        
                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kategori" class="form-control" id="kategori"
                                                    placeholder="Masukan Kategori" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="editor" class="control-label">Deskripsi</label>
                                          <div class="col-sm-12">
                                            <textarea type="text" name="deskripsi" id="editor" class="form-control"><?= $data['deskripsi'] ?></textarea>
                                          </div>
                                        </div>
                                        
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button class="btn btn-success" type="submit"
                                                    name="submit"><i class="fa fa-check"> Save</i></button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"> Close</i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
if (isset($_POST['submit'])) {
  # code...
  $kategori= $_POST['kategori'];
  $deskripsi= $_POST['deskripsi'];

  $simpan= mysqli_query($kon, "INSERT INTO tb_profil (kategori, deskripsi) VALUES ('$kategori','$deskripsi')");
  if ($simpan) {
    # code...
    echo "<script>alert('Data Berhasil Disimpan'); window.location.href='?module=profil/profilnagari'</script>";
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
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_profil");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r["kategori"]; ?></td>
                      <td><?= $r["deskripsi"]; ?></td>
                      <td>
                        <a href="?module=profil/profil&aksi=editprofil&id_profil=<?= $r['id_profil']; ?>" class="btn btn-flat btn-primary" style="border-radius:2px;">Edit Profil</a>
                      <a href="?module=profil/profil&aksi=hapusprofil&id_profil=<?= $r['id_profil']; ?>" class="btn btn-info">Hapus Profil</a>
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