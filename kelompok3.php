<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kelompok3.css">
    <title>SISTEM RESERVASI HOTEL</title>
</head>

<body>
<header>
<!-- Bagian Logo -->  
<img class="logokelompok3" src="logo-hotel.png" alt="logo hotel">
    <!-- Bagian Navigasi Menu --> 
    <nav>
      <a href="#profilkelompok3">Profil</a>
      <a href="#fasilitaskelompok3">Fasilitas</a>
        <!-- Bagian Dropdown Layanan --> 
        <div class="dropdownkelompok3">
          <button class="dropbtnkelompok3">Layanan</button>
          <div class="dropdowncontentkelompok3">
            <a href="kelompok3.php?page=pendaftaran">Form Pendaftaran Akun</a>
            <a href="kelompok3.php?page=reservasi">Form Reservasi Kamar Hotel</a>
            <a href="kelompok3.php?page=pembatalan">Form Pembatalan Kamar Hotel</a>
            <a href="kelompok3.php?page=ulasan">Form Ulasan Pelanggan</a>
          </div>
        </div>
      <a href="#galerikelompok3">Galeri</a>
    </nav>
</header>

<!-- Halaman Profil -->
<section id="profilkelompok3">
    <div class="profilcontentkelompok3">
      <h2>THREE HOTEL</h2>
      <p>Discover a haven of luxury and tranquility at Three Hotel, where every detail is crafted to ensure an unforgettable stay. Nestled in the heart of Solo, our hotel combines modern elegance with timeless hospitality, offering a perfect retreat for both business and leisure travelers.</p>
    </div>
</section>

<!-- Halaman fasilitas -->
<section id="fasilitaskelompok3">
    <h3>FASILITAS</h3>
    <p class="paragraphkelompok3">
    Discover a wealth of amenities and services at Three Hotel, designed to enhance your stay and cater to your every need
</section>

<!-- Bagian Icon -->
<section id="iconkelompok3" class="iconcontentkelompok3">
    <!-- Icon SPA -->
    <div>
      <img  class="gambariconkelompok3"src="spa.png" />
      <h6>SPA</h6>
    </div>
    <!-- Icon WIFI-->
    <div>
      <img  class="gambariconkelompok3" src="wifi.png" />
      <h6>WIFI 5G</h6>
    </div>
    <!-- Icon POOL-->
    <div>
      <img  class="gambariconkelompok3" src="pool.png" />
      <h6>POOL</h6>
    </div>
    <!-- Icon GYM-->
    <div>
      <img  class="gambariconkelompok3" src="gym.png" />
      <h6>GYM AREA</h6>
    </div>
</section>

<!-- Halaman Galeri-->
<section id="galerikelompok3">
    <h3>GALERI</h3>
      <p class="paragraphkelompok3">Dive into the world of three hotel through our captivating gallery</p>
        <!-- baris pertama-->
        <div class="galerikontenkelompok3">
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
        </div>
        <!-- baris kedua-->
        <div class="galerikontenkelompok3">
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
        </div>
        <!-- baris ketiga-->
        <div class="galerikontenkelompok3">
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
          <div><img src="hotel.jpg" /></div>
        </div>
</section>

<!-- Halaman Form-->
<!-- Menyambungkan Page -->
<?php
    if ($_GET){
    if($_GET['page'] == "pendaftaran"){
        include("pendaftaran505.php");
    }else if ($_GET['page'] == "reservasi"){
        include("reservasi502.php");
    }else if ($_GET['page'] == "pembatalan"){
        include("pembatalan496.php");
    }else if ($_GET['page'] == "ulasan"){
        include("ulasan484.php");
}}
?>


<!-- Halaman Footer -->
<footer class="footerkelompok3">
    <p>Bumiku Indonesia Planet Mars, Jl. Kihajar No. 123, Kota Bandung</p>
    <p>Kontak: (012) 345-6789 | Email: info@threehotel.com</p>
</footer>

</body>
</html>