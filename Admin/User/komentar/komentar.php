<?php
include '../../koneksi.php';
?>
<div class="content-wrapper">
    <?php
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];

        switch ($aksi) {
            case "tambah":

                if (isset($_POST['save1'])) {
                    $nama=$_POST['nama'];
                    $komentar=$_POST['komentar'];
                    $email = $_POST['email'];

                    $save = mysqli_query($kon, "INSERT INTO tb_komentar (nama,komentar,email) VALUES ('$nama','$komentar','$email')");
                    if ($save) {
                        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=komentar/komen';
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
            Tambah Komentar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Komentar</li>
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
                    <form method="POST" class="form-horizontal" action="">
                        <div class="box-body">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="des" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="nama" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="des" class="col-sm-2 control-label">email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="editor" class="col-sm-2 control-label">Komentar</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="komentar" id="editor" class="form-control" rows="15"
                                            cols="80"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-md-offset-2">
                                        <button type="submit" name="save1"
                                            class="btn btn-primary btn-flat">Simpan</button>
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
            case "edit":
                if (isset($_GET['id_komentar'])) {
                    $sql = mysqli_query($kon, "SELECT * FROM tb_komentar where id_komentar='$_GET[id_komentar]'");
                    $data = mysqli_fetch_assoc($sql);
                }
                if (isset($_POST['save'])) {
                    $nama=$_POST['nama'];
                    $email=$_POST['email'];
                    $komentar=$_POST['komentar'];

                    $save = mysqli_query($kon, "UPDATE tb_komentar set nama='$nama', email='$email', komentar='$komentar' where id_komentar='$_GET[id_komentar]'");
                    if ($save) {
                        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=komentar/komen';
              </script>";
                    } else {
                        echo "<script>alert('Gagal');
              </script>";
                    }
                }
            ?>
    <section class="content-header">
        <h1>
            Komentar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Komentar</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">

                    </div>

                    <!-- form start -->
                    <form method="POST" class="form-horizontal" action="">
                        <div class="box-body">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="des" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="id_komentar" type="hidden" id="des" class="form-control"
                                            value="<?= $data['id_komentar'] ?>">
                                        <input name="nama" id="des" class="form-control" value="<?= $data['nama'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="des" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" type="email" id="des" class="form-control"
                                            value="<?= $data['email'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="editor" class="col-sm-2 control-label">Komentar</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="komentar" id="editor" class="form-control" rows="15"
                                            cols="80"><?= $data['komentar']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-md-offset-2">
                                        <button type="submit" name="save"
                                            class="btn btn-primary btn-flat">Simpan</button>
                                        <a href="?module=kontak/alamatbawaslu"
                                            class="btn btn-primary btn-flat">Kembali</a>
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
            case "hapus":

                if (isset($_GET['id_komentar'])) {
                    $lihat = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM id_komentar where id_komentar='$_GET[id_komentar]'"));

                    $del = mysqli_query($kon, "DELETE FROM tb_komentar where id_komentar='$_GET[id_komentar]'");
                    if ($del) {
                        echo "<script>
                    alert('Data Berhasil Dihapus');
                    window.location='index.php?module=komentar/komen';
                            </script>";
                    } else {
                        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=komentar/komen';
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