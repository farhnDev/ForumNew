<?php 
include '../database/koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat_password'];

        // Hash password sebelum disimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $query = "INSERT INTO users (nama, username, password, email) VALUES (:name, :username, :password, :email)";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':name', $nama);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo "Registrasi berhasil.";
            header('Location: login.php');
            exit();
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }
}