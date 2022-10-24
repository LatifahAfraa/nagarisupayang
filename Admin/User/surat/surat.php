<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Surat Online
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Surat Online</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
          <a href="?module=surat/suratdata&aksi=tambahsurat" class="btn btn-flat btn-primary">Tambah surat</a>
          </div>
          <div class="box-body">
            <div class="table table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>Email</th>
                    <th>Jenis Surat</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM tb_surat");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r["nama"]; ?></td>
                      <td><?= $r["nik"]; ?></td>
                      <td><?= $r["email"]; ?></td>
                      <td><?= $r["jenis"]; ?></td>
                      <td><?= $r["komentar"]; ?></td>
                      <td>
                        <!-- <a href="?module=surat/suratdata&aksi=edit&id=<?= $r['id']; ?>" class="btn btn-flat btn-primary" style="border-radius:2px;">Edit Alamat</a> -->
                        <a href="?module=surat/suratdata&aksi=hapus&id_surat=<?= $r['id_surat']; ?>" class="btn btn-danger">Hapus Surat</a>
                      </td>
                    </tr>
                  <?php $no++;
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