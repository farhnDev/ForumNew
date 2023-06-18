<?php
include '../database/koneksi.php'; 
session_start(); // Memulai session


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencari pengguna berdasarkan username
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $koneksi->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Memeriksa apakah pengguna ditemukan dan password cocok
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];

        if ($user['role'] === 'admin') {
            header('Location: ../admin/admin.php'); // Mengarahkan ke halaman admin jika role adalah admin
            exit();
        } elseif ($user['role'] === 'member') {
            header('Location: ../user/home_fix.php'); // Mengarahkan ke halaman home_fix.php jika role adalah member
            exit();
        }
    } else {
        $errorMessage = "Username atau password salah.";
    }
}

?>