<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
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
                    <a class="nav-link" href="#announcement">Pengumuman</a>
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
        </div>
    </nav>

    <div class="container my-5">
        <div class="p-5 text-center bg-warning rounded-3">
            <h1 class="text-body-emphasis">BANTEN YANG MAJU, MANDIRI, BERDAYA SAING, SEJAHTERA DAN BERAKHLAKUL KARIMAH</h1>
            <p class="lead">Memberikan Pelayanan Informasi yang Ramah, Cepat, Tepat dan Akurat.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="text-center rounded-3">
        <iframe width="100%" height="433" src="https://www.youtube.com/embed/jag7XRbq6zA" title="Apa sih PPID ? Kenalan Yuk!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>



    <div class="container">
        <h2>Berita Terkini</h2>
        <div class="row">
        <?php 
        $hasil = mysqli_query($db, "SELECT * FROM news"); 
        
        while ($row = mysqli_fetch_object($hasil)){
        ?>
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo $row->photo ?>">
                <a class="h4" style="text-decoration:none" align="justify" href="page.php?id=<?= $row->id ?>"><?php echo $row->title ?></a>
                <h6 class="pt-2">Reporter : Rasyid Ridho  &nbsp; <?php echo $row->publish_at  ?></h6>
                <p align="justify" ><?php $row->content;
                $limitedcontent = substr($row->content, 0, 300);
                echo $limitedcontent.'...';
                ?>
                <a href="page.php?id=<?= $row->id ?>">[Baca Selengkapnya]</a>
                <!-- <a href="page.php?id='.$row['id_artikel'].'" target="_blank">[Baca Selengkapnya]</a> -->
            </div>
        <?php
        }
        ?>

        
            <!-- <div class="col-md-4">
                <img class="img-fluid" src="img/berita2.jpg">
                <h4 align="justify" >Pendaftaran PPDB Ditutup Malam Ini, Pj Gubernur Banten: Banyak Titipan agar Anak Lolos</h4>
                <h6>Reporter : Rasyid Ridho  &nbsp; 06 Juli 2023</h6>
                <p align="justify">Penjabat Gubernur Banten Al Muktabar mengungkapkan, dirinya banyak mendapatkan permintaan tolong dari warga untuk menitipkan anaknya masuk ke SMA/SMK Negeri. Diketahui proses Penerimaan Peserta Didik Baru (PPDB) untuk jenjang SMA jalur Zonasi, Perpindahan Tugas Orangtua, dan Prestasi ditutup Kamis (6/7/2023) malam ini.
                    <a href="#">Baca Selengkapnya</a></p>
            </div> -->
            <!-- <div class="col-md-4">
                <img class="img-fluid" src="img/berita3.jpg">
                <h4 align="justify" >Gempa Magnitudo 5,2 Guncang Bayah Banten, Terasa sampai Jakarta</h4>
                <h6>Reporter : Fabian Januarius &nbsp; 07 Februari 2023</h6>
                <p align="justify" >Gempa bermagnitudo 5,7 terjadi di wilayah Bayah, Banten, Selasa (7/2/2023). Berdasarkan akun Twitter BMKG, gempa bumi terjadi tepatnya pada pukul 07.35 WIB. Adapun pusat gempa berlokasi di 7,49 lintang selatan dan 105,95 bujur timur alias 70 kilometer sebelah barat daya daerah Bayah, Banten.
                    <a href="#">Baca Selengkapnya</a></p>
            </div> -->
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <h2 id="announcement">Pengumuman Terbaru</h2>
        <div class="row d-flex">
            <div class="col-md-4">
                <img class="img-fluid" src="img/p1.jpg">
                <h4 align="justify" >Suhu Panas Banten Capai 34,4 Derajat Celsius, Ini Penyebabnya</h4>
                <h6>Reporter : Rasyid Ridho  &nbsp; 12 Januari 2023</h6>
                <p align="justify" >Badan Meteorologi, Klimatologi dan Geofisika (BMKG) mengungkapkan, potensi cuaca ekstrem berupa hujan lebat disertai angin kencang dan petir di wilayah Provinsi Banten pada awal tahun 2023 berkurang. Banten justru mengalami cuaca panas yang mencapai suhu 34,4 derajat Celsius.
                    <a href="#">Baca Selengkapnya</a></p>
            </div>
        
            <div class="col-md-4">
                <img class="img-fluid" src="img/p2.jpg">
                <h4 align="justify" >Jadwal dan Lokasi Penukaran Uang Baru di Banten untuk Lebaran 2023</h4>
                <h6>Reporter : Puspasari  &nbsp; 28 Maret 2023</h6>
                <p align="justify" >Layanan penukaran uang baru di Banten kembali dibuka untuk masyarakat selama periode Ramadhan 2023 atau jelang Hari Raya Idul Fitri 1444 Hijriah.
                    <a href="#">Baca Selengkapnya</a></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="img/p3.png">
                <h4 align="justify" >Jadwal Imsak dan Buka Puasa Ramadhan 2023 di Provinsi Banten</h4>
                <h6>Reporter : Dini Daniswari  &nbsp; 23 Maret 2023</h6>
                <p align="justify" >Bagi Anda yang tinggal di wilayah Provinsi Banten, simak jadwal imsak dan waktu buka puasa Ramadhan 2023 di Kota Anda. Sebelumnya, pemerintah telah menetapkan 1 Ramadhan 1444 Hijriyah jatuh pada Kamis, 23 Maret 2023.
                    <a href="#">Baca Selengkapnya</a></p>
            </div>
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
                    <li class="nav-item mb-2"><a href="https://www.instagram.com" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="https://www.twitter.com" class="nav-link p-0 text-body-secondary">Twitter</a></li>
                    <li class="nav-item mb-2"><a href="https://www.facebook.com" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                </ul>
            </div>
            
        </footer>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>