<?php 
include '../database/koneksi.php'; 

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // Jika pengguna belum login, arahkan ke halaman login
  header("Location: login.php");
  exit;
}

$username = $_SESSION['username'];
?>
<?php include '../includes/header.php'; ?>
<div class="row">
    <?php include '../includes/sidebar.php'; ?>
    <?php
  $query = "SELECT nama FROM users WHERE username = :username";
  $stmt = $koneksi->prepare($query);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // Ambil nama pengguna
  $nama_user = $row['nama'];
  ?>
    <div class=" mt-4 col-9 m-auto">
        <form action="prosestambahdiskusi.php" method="POST">
            <h4 class="text-center">Hai <?php echo $nama_user; ?> apa yang ingin kamu tanyakan</h4>

            <div class="mb-3 ">
                <label for="judul_diskusi">Apa yang kamu ingin tanyakan </label>
                <input type="text" class="form-control" id="judul_diskusi" name="judul_diskusi" required>
            </div>
            <?php
      $query = "SELECT * FROM kategori";
      $stmt = $koneksi->prepare($query);
      $stmt->execute();
  
      $data_kategori = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>
            <div class="mb-3">
                <label for="">Kategori</label>
                <select class="form-select" id="" aria-label="Default select example" name="id_kategori">>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <?php foreach ($data_kategori as $kategori) : ?>
                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">save</button>
            </div>

        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>