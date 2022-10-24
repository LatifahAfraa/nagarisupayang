<?php
include_once "../../koneksi.php";
if (isset($_POST['save'])) {
    $kat       = $_POST['jenis'];
    $id_data = $_POST['id_data'];
    $judul = $_POST['judul'];

    
    $save = mysqli_query($kon, "UPDATE tb_data set jenis='$kat', judul= '$judul',deskripsi='$_POST[deskripsi]' where id_data='$id_data'");
    if ($save) {
        echo "<script>
      alert('Edit Data Berhasil');
      window.location='../index.php?module=datadesa/datanagari';
        </script>";
    } else {
        echo "<script>alert('Gagal');
        </script>";
    }
}
