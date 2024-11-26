<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    echo 'berhasil';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $hasil = mysqli_query($koneksi, "INSERT INTO tbl_data VALUES('','$nama','$alamat','$latitude','$longitude')");

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
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Latitude</label>
                <input type="text" name="latitude" class="form-control">
            </div>
            <div class="mb-3">
                <label class="fw-bold">Longitude</label>
                <input type="text" name="longitude" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

</html>