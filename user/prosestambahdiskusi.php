<?php 
include '../database/koneksi.php'; 

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $judul_diskusi = $_POST['judul_diskusi'];
    $id_kategori = $_POST['id_kategori'];
    $isi = $_POST['isi'];
    // Dapatkan id_user dari sesi pengguna yang sedang login
    $id_user = $_SESSION['id_user'];

    // Query untuk menambahkan data ke tabel postingan
    $query = "INSERT INTO postingan (id_user, id_kategori, judul, isi) VALUES (:id_user, :id_kategori, :judul, :isi )";
    $stmt = $koneksi->prepare($query);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':id_kategori', $id_kategori);
    $stmt->bindParam(':judul', $judul_diskusi);
    $stmt->bindParam(':isi', $isi);
    $stmt->execute();

    // Redirect ke halaman sukses atau halaman lain yang Anda inginkan
    header("Location: home_fix.php");
    exit;
}
?>