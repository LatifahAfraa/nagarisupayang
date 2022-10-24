<?php
include_once "../../koneksi.php";
if (isset($_POST['save'])) {
    $kat       = $_POST['kategori'];
    $id_lembaga = $_POST['id_lembaga'];

    // echo "UPDATE tb_profil set kategori='$kat', deskripsi='$_POST[deskripsi]' where id_profil='$id_profil'";
    // exit;
    $save = mysqli_query($kon, "UPDATE tb_lembaga set kategori='$kat', deskripsi='$_POST[deskripsi]' where id_lembaga='$id_lembaga'");
    if ($save) {
        echo "<script>
      alert('Edit Data Berhasil');
      window.location='../index.php?module=lembaga/lpm';
        </script>";
    } else {
        echo "<script>alert('Gagal');
        </script>";
    }
}
