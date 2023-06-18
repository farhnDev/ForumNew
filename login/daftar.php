<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="../asset/css/style.css">
    <style>
    .text {
        font-weight: bold;
    }

    body {
        background-image: url("../asset/image/bg-utama.png");
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f1f1f1;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="register-container">
        <div class="login-image">
            <img class="pict-login" src="../asset/image/img-login.png" alt="Gambar" />
        </div>

        <div class="login-form">
            <div class="text-center">
                <img src="../asset/image/logo.png" style="height: 40px;" alt="logo">
            </div>
            <h5 class="fw-normal mt-3" style="letter-spacing: 1px;">Register New account</h5>
            <form action="prosesdaftar.php" method="post">
                <input type="text" name="name" placeholder="Name" required />
                <input type="text" name="username" placeholder="Username" required />
                <input type="text" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="repeat_password" placeholder="Repeat Password" required />
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                        aria-describedby="registerCheckHelpText" required/>
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Resgister</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/13b3eecf4b.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- cdn ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
</body>

</html>