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
    <title>Panduan Pengguna</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark shadow sticky-top" style="background-color: #276561;">
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
                    <a class="nav-link active" href="fitur.php">Fitur</a>
                    <a class="nav-link active" href="ulasanpengguna.php">Komunitas</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->
    <div class="container">
        <div class="row ">
            <p><strong>Panduan Penjemputan</strong></p>
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/truk.png">
                </div>
                <p>Pengguna Menuliskan Alamat</p>
            </div>
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/Arrow 1.png">
                </div>
            </div>
            <div class="col align-self-center">
                <div class="text-center">
                    <img src="asset/location 1.png" class="center">
                </div>
                <p>Website akan mencarikan lokasi Bank Sampah Terdekat</p>
            </div>
            <div class="col align-self-center">
                <div class="text-center">
                    <img src="asset/Arrow 1.png" alt="">
                </div>
            </div>
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/notif.png" alt="">
                </div>
                <p>Pihak Bank Sampah akan mendapatkan Notifikasi</p>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/terima.png">
                </div>
                <p>Konfirmasi Penjemputan oleh Pihak Pengantaran</p>
            </div>
            <div class="col align-self-center">
                <div class="text-center">
                    <img src="asset/Arrow 1.png">
                </div>
            </div>
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/distribution 1.png">
                </div>
                <p>Pengguna dapat melihat lokasi penjemputan terkini pada menu maps</p>
            </div>
            <div class="col align-self-center">
                <div class="text-center">
                    <img src="asset/Arrow 1.png" alt="">
                </div>
            </div>
            <div class="col align-self-center">
                <div class="text-center mb-2">
                    <img src="asset/Verified.png" alt="">
                </div>
                <p>Pengguna akan mendapatkan konfirmasi penerimaan oleh bank sampah</p>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="fixed-bottom">
        <section id="kontak">
            <div class="container-fluid" style="background-color: #276561;">
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
</body>

</html>