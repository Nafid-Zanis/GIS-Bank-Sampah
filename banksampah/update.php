<?php
require 'koneksi.php';

$data;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $hasil = mysqli_query($koneksi, 'SELECT * FROM tbl_data WHERE id=' . $id);
    $data = mysqli_fetch_assoc($hasil);
}

if (isset($_POST['submit'])) {
    echo 'berhasil';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $hasil = mysqli_query($koneksi, "UPDATE tbl_data SET nama='$nama', alamat='$alamat', latitude='$latitude', longitude='$longitude' WHERE id=" . $id);

    if (mysqli_affected_rows($koneksi) > 0) {
        header('Location: fitur.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Tambah Data</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Tambah Data</h1>
                <a href="fitur.php" class="btn btn-success">Kembali</a>
            </div>
        </div>
        <form class=" m-5" method="POST" action="">
            <div class="mb-3">
                <label class="fw-bold">Nama</label>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Alamat</label>
                <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Latitude</label>
                <input type="text" name="latitude" value="<?= $data['latitude'] ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Longitude</label>
                <input type="text" name="longitude" value="<?= $data['longitude'] ?>" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>

</html>