<?php
// $koneksi = mysqli_connect("localhost", "root", "", "rekrut") or die("Tidak bisa terhubungan ke database");
try {
    $user = 'root';
    $pass = '';
    $koneksi = new PDO('mysql:host=localhost;dbname=rekrut', $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}
