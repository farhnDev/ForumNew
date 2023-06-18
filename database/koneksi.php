<?php
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'forumnew'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; // Ganti dengan kata sandi database Anda

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Koneksi ke database berhasil";
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: " . $e->getMessage();
}
?>
