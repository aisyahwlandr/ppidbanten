<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Page Berita</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">PPID Provinsi Banten</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                aria-expanded="false">Profile
                </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sejarah</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#">Dasar Hukum</a></li>
                    </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                aria-expanded="false">Berita
                </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                        <li><a class="dropdown-item" href="#">Olahraga</a></li>
                        <li><a class="dropdown-item" href="#">Politik</a></li>
                        <li><a class="dropdown-item" href="#">Alam</a></li>
                    </ul>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="index.php#announcement">Pengumuman</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="laporan.php">Laporan</a>
            </li>
            </ul>
            <form>
                <a class="btn btn-outline-success" href="login.php">Sign In for Admin</a>
                </form>
            </div>
        </div>
    </nav>

    
    <div class="container">
    <?php 
        $hasil = mysqli_query($db, "SELECT * FROM news WHERE id='$_GET[id]'"); 
        
        while ($row = mysqli_fetch_object($hasil)){
        ?>
        <div class="pt-5">
            <div>
                <img class="img-fluid" src="<?= $row->photo ?>">
                <h4 align="justify" ><?= $row->title ?></h4>
                <h6>Reporter : Rasyid Ridho  &nbsp; <?= $row->publish_at  ?></h6>
                <p align="justify"><?= $row->content?>
            </div>
            <?php
        }
        ?>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col col-lg-4 mb-3">
                <!-- <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                </a> -->
                <p align="justify" class="text-body-secondary">&copy; 2023 Kawasan Pusat Pemerintahan Provinsi Banten (KP3B) Jl. Syekh Nawawi Al Bantani, Palima Serang</p>
            </div>

            <div class="col col-lg-4  mb-3">
                <!-- <h5>Peta Lokasi</h5> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6791779483287!2d106.15396687448579!3d-6.173689960496787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4221f18dfc7fc9%3A0x6305978e56f71573!2sKawasan%20Pusat%20Pemerintahan%20Provinsi%20Banten%20(KP3B)!5e0!3m2!1sen!2sid!4v1689737922728!5m2!1sen!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
            </div>

            <div class="col mb-3">
                <h5>Kontak</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">EMail</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                </ul>
            </div>
            
        </footer>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>