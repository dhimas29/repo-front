<?php
include('../koneksi.php');

$tabel = $_POST['tabel'];
if ($tabel == 'user') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $level_user = $_POST['level_user'];
    //buat sql
    $data = array('user' => $username, 'pass' => $password, 'email' => $email, 'level' => $level_user);
    $querys = $koneksi->prepare("INSERT into tbl_users(username,password,email,level_user) value(:user,:pass,:email,:level)");
    $querys->execute($data);
    if ($querys) {
        echo "<script>alert('Tambah Data Berhasil');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    } else {
        echo "<script>alert('Tambah Data Gagal');window.location.assign('../index.php?page=user&actions=tampil')</script>";
    }
} elseif ($tabel == '') {
}
