<?php
require 'koneksi.php';

$hasil = mysqli_query($koneksi, 'SELECT * FROM tbl_data');

$data = [];
while ($d = mysqli_fetch_assoc($hasil)) {
  $data[] = $d;
}

if (isset($_GET['method'])) {
  $method = $_GET['method'];
  $id = $_GET['id'];
  if ($method == 'hapus') {
    mysqli_query($koneksi, 'DELETE FROM tbl_data WHERE id=' . $id);
    if (mysqli_affected_rows($koneksi) > 0) {
      header('Location: fitur.php');
    }
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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Fitur</title>
  <style>
    #map {
      height: 40vh;
    }
  </style>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark shadow mb-5 sticky-top" style="background-color: #276561;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="asset/LOGOTRASHHUB.png" style="height: 10%; width: 10%;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto fs-5">
          <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          <a class="nav-link active" href="tentangkami.php">Tentang</a>
          <a class="nav-link active" href="#">Fitur</a>
          <a class="nav-link active" href="ulasanpengguna.php">Komunitas</a>
        </div>
      </div>
    </div>
  </nav>
  <!--Akhir Navbar-->

  <!--Fitur-->
  <div class="container-fluid justify-content-space-between mt-5">
    <div class="row text-center mb-2">
      <div class="col">
        <h3><strong>Anda membutuhkan penjemputan sampah ?</strong></h3>
        <br>
      </div>
    </div>
    <div class="row d-flex justify-content-evenly text-center mb-4">
      <a href="panduan.html" class="btn btn-outline-light rounded-pill" style="background-color: #276561; width: 200px; height: 40px;">Pelajari Lebih Lanjut</a>
      <a href="#" class="btn btn-outline-light rounded-pill" style="background-color: #276561; width: 200px; height: 40px;"><i class="bi bi-telephone-plus-fill"></i>
        </svg>Kontak Kami</a>

    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 mb-4">
        <input class="form-control form-control-lg rounded-pill" type="text" placeholder="Ketikkan Pesan Disini" aria-label=".form-control-lg example">
      </div>
    </div>
  </div>

  <!--Map-->
  <div id="map" class="m-5"></div>
  <!--Akhir Map-->

  <div class="container-fluid">
    <div class="row m-5">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <h1>Data</h1>
        <a href="tambah.php" class="btn btn-success">Tambah Data</a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Latitude</th>
          <th scope="col">Longitude</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $banksampah) : ?>
          <tr>
            <th scope="row"><?php echo $banksampah['id'] ?></th>
            <td><?= $banksampah['nama'] ?></td>
            <td><?= $banksampah['alamat'] ?></td>
            <td><?= $banksampah['latitude'] ?></td>
            <td><?= $banksampah['longitude'] ?></td>
            <td>
              <a href="update.php?id=<?= $banksampah['id'] ?>" class="btn btn-warning">Edit</a>
              <a href="?id=<?= $banksampah['id'] ?>&method=hapus" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <!--Footer-->
  <footer>
    <section id="kontak">
      <div data-aos="zoom-in" class="container-fluid" style="background-color: #276561;">
        <div class="row" style="color: white;">
          <div class="col">
            <img src="asset/LOGOTRASHHUB.png" style="width: 50px; height: 50px;">
            <br>
            <p>Semua Layanan</p>
            <p>Hubungi Kami</p>
            <p>Saran dan Masukan</p>
          </div>
          <div class="col mt-5">
            <p>Panduan Pengguna</p>
            <p>Produk</p>
            <p>Email: ...@gmail.com</p>
          </div>
          <div class="col mt-5">
            <p>Media Sosial</p>
            <a href="" style="text-decoration: none; color:white"><i class="bi bi-whatsapp" style="font-size: 1.5rem; letter-spacing: 2rem;"></i></a>
            <a href="" style="text-decoration: none; color:white"><i class="bi bi-instagram" style="font-size: 1.5rem; letter-spacing: 2rem;"></i></a>
            <a href="" style="text-decoration: none; color:white"><i class="bi bi-facebook" style="font-size: 1.5rem; letter-spacing: 2rem;"></i></a>
            <a href="" style="text-decoration: none; color:white"><i class="bi bi-discord" style="font-size: 1.5rem; letter-spacing: 2rem;"></i></a>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!--Akhir Footer-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    getLocation();

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      }
    }

    function showPosition(position) {
      let lat = position.coords.latitude;
      let long = position.coords.longitude
      // initialize the map on the "map" div with a given center and zoom
      var map = L.map('map', {
        center: [lat, long],
        zoom: 11
      });

      var myIcon = L.icon({
        iconUrl: 'my-icon.png',
        iconSize: [38, 95],
        iconAnchor: [22, 94],
        popupAnchor: [-3, -76],
        shadowUrl: 'my-icon-shadow.png',
        shadowSize: [68, 95],
        shadowAnchor: [22, 94]
      });

      L.marker([lat, long]).addTo(map);

      let data = <?php echo json_encode($data); ?>;

      data.map(function(d) {
        L.marker([d.latitude, d.longitude], {

        }).addTo(map).bindPopup(`
        <p>
          <i class="fa-solid fa-building-wheat"></i>
          <b>Nama TPS </b>: ${d.nama}
        </p>
        <p>
          <i class="fa-solid fa-location-dot"></i>
          <b>Alamat </b>: ${d.alamat}
        </p>
        `);
      })

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {
        foo: 'bar',
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
    }
  </script>
</body>

</html>