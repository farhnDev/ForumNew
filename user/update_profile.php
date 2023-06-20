<?php
require '../database/koneksi.php';
if (isset($_FILES["images"]["name"])) {
    $id = $_POST["id_user"];
    $name = $_POST["nama"];

    $imageName = $_FILES["images"]["name"];
    $imageSize = $_FILES["images"]["size"];
    $tmpName = $_FILES["images"]["tmp_name"];

    //validate img
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    if (!in_array($imageExtension, $validImageExtension)) {
        echo "
                        <script>
                        alert('invalid');
                        document.location.href ='../user/profil.php';
                        </script>
                        ";
    } else {
        $newImgName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa");
        $newImgName .= "." . $imageExtension;

        $query = "UPDATE users SET images = :newImgName WHERE id_user = :id";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':newImgName', $newImgName);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        move_uploaded_file($tmpName, '../img/' . $newImgName);

        echo
        "
                        <script>
                        document.location.href ='../user/profil.php';
                        </script>
                        ";
    }
}
