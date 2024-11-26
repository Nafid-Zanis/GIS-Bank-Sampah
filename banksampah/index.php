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
    <title>Bank Sampah</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    <a class="nav-link active" href="tentangkami.php">Tentang</a>
                    <a class="nav-link active" href="fitur.php">Fitur</a>
                    <a class="nav-link active" href="ulasanpengguna.php">Komunitas</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Beranda-->
    <div data-aos="fade-left" class="container px-4 mb-5 mt-5">
        <div class="row justify-content-center gx-5">
            <div class="col-md px-5">
                <img src="asset/Rectangle30.png" class="img-fluid">
            </div>
            <div class="col-md fs-5">
                <h1><strong>Selamat Datang di Website Bank Sampah !</strong></h1>
                <br>
                <p>Sebuah website yang menyediakan segala informasi terkait daur ulang sampah dan fasilitas terdekat
                    daur ulang sampah dan layanan konsultasi seperti tempat pengumpulan sampah dan jam operasional.
                </p>
                <a href="register.php" class="btn btn-outline-light" style="background-color: #276561; width: 200px; height: 40px;">Start</a>
            </div>
        </div>
    </div>
    <!--Akhir Beranda-->

    <!--Introduction-->
    <div data-aos="zoom-in" class="container mb-5">
        <div class="row text-center">
            <div class="col">
                <h2><strong>Features</strong></h2>
            </div>
        </div>
        <div class="row justify-content-evenly fs-5">
            <div class="col-sm text-center">
                <img src="asset/penjemputan.jpg" width="500" height="300">
                <h2><strong>Penjemputan Sampah</strong></h2>
                <p>Penjemputan sampah adalah proses pengumpulan dan pengangkutan sampah dari lokasi awalnya menuju tempat pembuangan akhir atau fasilitas pengelolaan sampah.</p>
            </div>
            <div class="col-sm text-center">
                <img src="asset/service.jpg" width="300" height="300">
                <h3><strong>Panduan Layanan</strong></h3>
                <p>Panduan layanan pada website bank sampah adalah fitur yang bertujuan untuk memberikan informasi dan bimbingan kepada pengguna tentang cara menggunakan layanan yang disediakan.</p>
            </div>
            <div class="col-sm text-center">
                <img src="asset/komunitas.jpg" width="400" height="300">
                <h3><strong>Komunitas</strong></h3>
                <p>Fitur yang mencakup informasi yang memfasilitasi kolaborasi, partisipasi aktif, dan pemahaman tentang peran komunitas dalam pengelolaan sampah.</p>
            </div>
        </div>
    </div>
    <!--Akhir Introduction-->

    <!--About Us-->
    <div data-aos="zoom-in" class="container mb-4">
        <div class="row text-center">
            <div class="col mb-4">
                <h2><strong>About</strong></h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 gap-3">
            <div class="col-4 text-center">
                <p>Website ini merupakan platform yang bertujuan untuk memberikan informasi, memfasilitasi interaksi antara bank sampah dan masyarakat, serta menyediakan layanan terkait pengelolaan sampah.</p>
            </div>
            <div class="col-4 text-center">
                <p>Melalui situs web ini, masyarakat dapat mengakses informasi mengenai profil bank sampah, informasi terkait sampah dan panduan tentang cara yang benar untuk memilah sampah, prosedur pengumpulan sampah, dan informasi terkait pengelolaan sampah.</p>
            </div>
        </div>
    </div>
    <!--Akhir About Us-->

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
</body>

</html>