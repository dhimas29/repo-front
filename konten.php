<?php
@$page = $_GET['page'];
@$aksi = $_GET['actions'];
//seleksi page atau halaman yang dipilih oleh pengguna
//Menggunakan IF
// if (empty($page)) {
//     if ($_SESSION['level'] == 'admin') {
//         require 'dashboard.php';
//     } elseif ($_SESSION['level'] == 'pasien') {
//         require "views/kuisioner_tambah.php";
//     } else {
//         require "views/laporan_tampil.php";
//     }
// } else {
//     $file = "views/" . $page . "_" . $aksi . ".php";
//     if (file_exists($file)) {
//         require "views/" . $page . "_" . $aksi . ".php";
//     } else {
//     }
// }
require 'dashboard.php';
