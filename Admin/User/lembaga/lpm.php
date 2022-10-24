<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Lembaga Masyarakat
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Lembaga Masyarakat</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <a href="?module=lembaga/lpm_crud&aksi=tambahlembaga" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i>Tambah Lembaga Masyarakat</a>
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
                  $be = mysqli_query($kon, "SELECT * FROM tb_lembaga");

                  $no = 1;
                  while ($r = mysqli_fetch_assoc($be)) {
                  ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r["kategori"]; ?></td>
                      <td><?= $r["deskripsi"]; ?></td>
                      <td>
                        <a href="?module=lembaga/lpm_crud&aksi=editlembaga&id_lembaga=<?= $r['id_lembaga']; ?>" class="btn btn-flat btn-primary" style="border-radius:2px;">Edit</a>
                        <a href="?module=lembaga/lpm_crud&aksi=hapuslembaga&id_lembaga=<?= $r['id_lembaga']; ?>" class="btn btn-info">Hapus</a> 
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