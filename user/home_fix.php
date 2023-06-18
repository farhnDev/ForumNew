<?php 
include '../database/koneksi.php'; 
session_start();
include '../includes/header.php'; 

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
 } // Mengarahkan ke halaman login jika pengguna belum login
    ?>

<div class="row">
    <?php include '../includes/sidebar.php'; ?>

    <div class="content col-8 mt-3">
        <?php
         $query = "SELECT p.id_post, u.nama, k.nama_kategori, p.judul, p.isi
         FROM postingan p
         JOIN users u ON p.id_user = u.id_user
         JOIN kategori k ON p.id_kategori = k.id_kategori";
         $stmt = $koneksi->prepare($query);
         $stmt->execute();
         
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

         <?php foreach ($data as $postingan) : ?>
         <!-- $id_postingan = $postingan['id_postingan'];
         $nama    = $postingan['nama'];
         $judul    = $postingan['judul'];
         $isi    = $postingan['isi']; -->
        <div class="card mt-2" style="border-radius: 15px;top:20px;">
            <div class="card-body p-4">
                <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                        <img src="../asset/image/an.png" alt="Generic placeholder image" class="img-fluid"
                            style="width: 90px; border-radius: 10px;">
                        <p class="mb-1 text-center"><?= $postingan['nama']; ?></p>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="mb-1"><?= $postingan['judul']; ?></h5>
                        <p class="mb-2 pb-1" style="color: #2b2a2a;"><?= $postingan['isi']; ?></p>
                    </div>
                </div>
            </div>
        </div>
         <?php endforeach; ?>
    </div>
    <div class="col-2 mt-3">
        <div class="sidebar-kanan"><button type="button" id="tombolId" class="btn btn-primary">+ Mulai Diskusi
                Baru</button>
            <ul class="list-group mt-2 me-4">
                <h5 class="title text-start">Player in Forum</h5>
                <li class="list-group-item">Rizki Ramadhan</li>
                <li class="list-group-item">Andara Juansa</li>
                <li class="list-group-item">Farhan Maulana</li>
                <li class="list-group-item">Icha Pusppitasari</li>
                <li class="list-group-item">Rizki Ramadhan</li>
            </ul>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>