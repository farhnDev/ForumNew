<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "forumnew";
    
    // Menciptakan koneksi
    $koneksi = mysqli_connect($server, $username, $password, $dbname);
    
    // Cek koneksi
    if(!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    return $koneksi;
