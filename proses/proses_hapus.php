<?php
include('../koneksi.php');
$tabel = $_GET['tabel'];
if ($tabel == 'user') {
    $data = $koneksi->exec("delete FROM tbl_users where id='$_GET[id]'");
    if ($data) {
        echo "<script>alert('Hapus Data Berhasil');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    } else {
        echo "<script>alert('Hapus Data Gagal');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    }
} elseif ($tabel == '') {
}
