<?php include '../database/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <title>Home</title>
</head>


<body>
    <header class="sticky-top">
        <nav class="col-12">
            <div class="logo">
                <img src="../asset/image/logo.png" alt="Logo">
            </div>
            <div class="search">
                <label for="search">
                    <input type="text" placeholder="Search for Topics" id="search" />
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <div class="user">
                <div class="notification">
                    <div class="notification">
                        <button class="btn position-relative" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-bell" title="Notifikasi"></i>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        </button>
                        <ul class="dropdown-menu notifi-box" id="box" aria-labelledby="dropdownMenuButton1">
                            <h5>Notifications</h5>
                            <li><a class="dropdown-item" href="#">
                                    <div class="notifi-item">
                                        <img src="../asset/image/an.png" alt="img">
                                        <div class="text">
                                            <h4>Elias Abdurrahman</h4>
                                            <p>@lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="notifi-item">
                                        <img src="../asset/image/an.png" alt="img">
                                        <div class="text">
                                            <h4>Elias Abdurrahman</h4>
                                            <p>@lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="notifi-item">
                                        <img src="../asset/image/an.png" alt="img">
                                        <div class="text">
                                            <h4>Elias Abdurrahman</h4>
                                            <p>@lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="profil">
                    <a href="../user/profil.php">
                        <?php $_SESSION["id"] = 1;
                        $sessionId = $_SESSION["id"];

                        $stmt = $koneksi->prepare("SELECT * FROM users WHERE id_user = :sessionId");
                        $stmt->bindParam(":sessionId", $sessionId);
                        $stmt->execute();
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);

                        $id = $user["id_user"];
                        $name = $user["nama"];
                        $image = $user["images"]; ?>
                        <img src="../img/<?= $image; ?>" width="33px" height="33px" title="<?= $image; ?>">
                    </a>
                </div>
            </div>
        </nav>
    </header>