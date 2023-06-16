<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous" />
    <title>Home</title>
</head>


<body>
    <header class="sticky-top">
        <nav class="col-12 ">
            <div class="logo">
                <h4>My Profil</h4>
            </div>
            <div class="logo">
                <a href="home_fix.php">
                    <h4>Kembali</h4>
                </a>
            </div>
        </nav>
    </header>
    <div class="container3">
        <div class="card5" data-tilt>
            <img src="asset/image/an.png" alt="">
            <h2>My Profile</h2>
            <p>Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Molestias minus et quasi, officiis,
                esse dolorum pariatur obcaecati culpa rem dolores praesentium
                nulla iusto laborum, animi quaerat ipsa amet! Suscipit,
                temporibus.</p>
            <div class="edit-profil">
                <a href="#"><i class="fas fa-user-edit"></i>Edit</a>
                <a href=""><i class="fas fa-sign-out"></i>Keluar</a>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>