<?php
include('../koneksi.php');

$tabel = $_POST['tabel'];
if ($tabel == 'user') {
    $username = $_POST['username'];
    $id = $_POST['id'];
    $level_user = $_POST['level_user'];
    if (!isset($_POST['password']) == '') {
        $password = md5($_POST['password']);
        $data = array('user' => $username, 'pass' => $password, 'level' => $level_user, 'id' => $id);
        $querys = $koneksi->prepare("update tbl_users set username=:user,password=:pass,level_user=:level where id=:id");
    } else {
        $data = array('user' => $username, 'level' => $level_user, 'id' => $id);
        $querys = $koneksi->prepare("update tbl_users set username=:user,level_user=:level where id=:id");
    }
    $querys->execute($data);
    if ($querys) {
        echo "<script>alert('Ubah Data Berhasil');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    } else {
        echo "<script>alert('Ubah Data Gagal');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    }
} elseif ($tabel == '') {
}
