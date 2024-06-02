<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GAF.siet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/title1.png" type="image/png">
    <!-- Link to Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Style for the map container -->
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="judul">GAF.siet</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a class="nav" href="#hero" class="">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li class="dropdown"><a href="#analisis"><span>Analisis</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#analisis"><span>Peta Titik</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="januari1.html">Curah Hujan Januari</a></li>
                                        <li><a href="februari1.html">Curah Hujan Februari</a></li>
                                        <li><a href="maret1.html">Curah Hujan Maret</a></li>
                                        <li><a href="april1.html">Curah Hujan April</a></li>
                                        <li><a href="mei1.html">Curah Hujan Mei</a></li>
                                        <li><a href="juni1.html">Curah Hujan Juni</a></li>
                                        <li><a href="juli1.html">Curah Hujan Juli</a></li>
                                        <li><a href="agustus1.html">Curah Hujan Agustus</a></li>
                                        <li><a href="september1.html">Curah Hujan September</a></li>
                                        <li><a href="oktober1.html">Curah Hujan Oktober</a></li>
                                        <li><a href="november1.html">Curah Hujan November</a></li>
                                        <li><a href="desember1.html">Curah Hujan Desember</a></li>
                                        <li><a href="tahunan1.html">Curah Hujan Tahunan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#analisis"><span>Peta Buffer</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="januari2.html">Curah Hujan Januari</a></li>
                                        <li><a href="februari2.html">Curah Hujan Februari</a></li>
                                        <li><a href="maret2.html">Curah Hujan Maret</a></li>
                                        <li><a href="april2.html">Curah Hujan April</a></li>
                                        <li><a href="mei2.html">Curah Hujan Mei</a></li>
                                        <li><a href="juni2.html">Curah Hujan Juni</a></li>
                                        <li><a href="juli2.html">Curah Hujan Juli</a></li>
                                        <li><a href="agustus2.html">Curah Hujan Agustus</a></li>
                                        <li><a href="september2.html">Curah Hujan September</a></li>
                                        <li><a href="oktober2.html">Curah Hujan Oktober</a></li>
                                        <li><a href="november2.html">Curah Hujan November</a></li>
                                        <li><a href="desember2.html">Curah Hujan Desember</a></li>
                                        <li><a href="tahunan2.html">Curah Hujan Tahunan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#analisis"><span>Peta Thiessen</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="januari3.html">Curah Hujan Januari</a></li>
                                        <li><a href="februari3.html">Curah Hujan Februari</a></li>
                                        <li><a href="maret3.html">Curah Hujan Maret</a></li>
                                        <li><a href="april3.html">Curah Hujan April</a></li>
                                        <li><a href="mei3.html">Curah Hujan Mei</a></li>
                                        <li><a href="juni3.html">Curah Hujan Juni</a></li>
                                        <li><a href="juli3.html">Curah Hujan Juli</a></li>
                                        <li><a href="agustus3.html">Curah Hujan Agustus</a></li>
                                        <li><a href="september3.html">Curah Hujan September</a></li>
                                        <li><a href="oktober3.html">Curah Hujan Oktober</a></li>
                                        <li><a href="november3.html">Curah Hujan November</a></li>
                                        <li><a href="desember3.html">Curah Hujan Desember</a></li>
                                        <li><a href="tahunan3.html">Curah Hujan Tahunan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#analisis"><span>Curah Hujan Bulanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="januari.html">Curah Hujan Januari</a></li>
                                        <li><a href="februari.html">Curah Hujan Februari</a></li>
                                        <li><a href="maret.html">Curah Hujan Maret</a></li>
                                        <li><a href="april.html">Curah Hujan April</a></li>
                                        <li><a href="mei.html">Curah Hujan Mei</a></li>
                                        <li><a href="juni.html">Curah Hujan Juni</a></li>
                                        <li><a href="juli.html">Curah Hujan Juli</a></li>
                                        <li><a href="agustus.html">Curah Hujan Agustus</a></li>
                                        <li><a href="september.html">Curah Hujan September</a></li>
                                        <li><a href="oktober.html">Curah Hujan Oktober</a></li>
                                        <li><a href="november.html">Curah Hujan November</a></li>
                                        <li><a href="desember.html">Curah Hujan Desember</a></li>
                                        <li><a href="tahunan.html">Curah Hujan Tahunan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <li><a href="#services">Portofolio</a></li>
                        <li><a href="#team">Team</a></li>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>

        </div>

    </header>

    <main class="main">

        <img src="ikon/bird.png" id="bird" class="awal">
        <img src="ikon/sun.png" id="sun" class="awal">
        <img src="ikon/mountbehind.png" id="mountbehind" class="awal">
        <img src="ikon/mountfront.png" id="mountfront" class="awal">
        <img src="ikon/cloudleft.png" id="cloudleft" class="awal">
        <img src="ikon/cloudright.png" id="cloudright" class="awal">

        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-start">
                    <div class="col-lg-8">
                        <h2 class="">Welcome To GAF.siet</h2>
                        <a href="#about" class="btn-get-started">Explore</a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <script>
            let bird = document.getElementById('bird');
            let sun = document.getElementById('sun');
            let mountbehind = document.getElementById('mountbehind');
            let text = document.getElementById('text');
            let btn = document.getElementById('btn')
            let mountfront = document.getElementById('mountfront')
            let cloud1 = document.getElementById('cloudleft')
            let cloud2 = document.getElementById('cloudright')
            let header = document.querySelector('header');

            window.addEventListener('scroll', function () {
                let value = window.scrollY;
                bird.style.top = value * 0.75 + 'px';
                sun.style.top = value * 0.5 + 'px';
                mountbehind.style.top = value * 0 + 'px';
                cloud1.style.left = value * 0 + 'px';
                cloud2.style.left = value * 0 + 'px';
                mountfront.style.top = value * 0 + 'px';
                text.style.marginTop = value * 0.25 + 'px';
                btn.style.marginTop = value * 0.5 + 'px';
                header.styletop = value * 0.5 + 'px';
            })
        </script>


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="sec" id="sec" data-aos="fade-up">
                <h2>About</h2>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class=" order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-center">GAF.siet</h3>
                        <p class="fst-italic">
                            GAF.siet merupakan singkatan dari nama anggota kelompok 12 yaitu Ganesha Akbar Taruna Dwa
                            (12822009), Adil Berjaya
                            Suherman (12822043), dan Febrya Bagus Saputra (12822056).
                            Sedangkan untuk "siet" merupakan singkatan dari Sistem Informasi Meteorologi. Sistem
                            Informasi Meteorologi merupakan
                            salah satu mata kuliah yang ada di program studi Meteorologi ITB.
                            Apa saja yang dipelajari di dalam mata kuliah ini? <br><br>
                            Pertama, terkait dengan pendahuluan berupa definisi Sistem Informasi
                            Geografi dan Sistem Informasi Meteorologi,
                            Keunggulan Sistem Informasi, dan Ruang Lingkup Aplikasi Sistem Informasi Meteorologi. Kedua,
                            terkait dengan konsep
                            database meteorologi dan struktur serta dimensi data
                            dalam Sistem Informasi Meteorologi. Ketiga, terkait dengan manajemen data dalam Sistem
                            Informasi Meteorologi. Keempat
                            terkait dengan manipulasi dan analisis data.
                            Kelima, terkait dengan hubungan Sistem Infoemasi Meteorologi dengan remote sensing. Dan yang
                            terakhir terkait dengan
                            pengaplikasian Sistem Informasi Meteorologi.
                            <br><br>Adapun beberapa luaran (outcomes) yang ingin dicapai pada mata kuliah Sistem
                            Informasi Meteorologi adalah sebagai
                            berikut:<br>1. Mahasiswa mampu menjelaskan
                            konsep data, konsep sistem informasi geografi, dan sistem informasi meteorologi untuk
                            memahami fenomena di
                            atmosfer.<br>2. Mahasiswa mampu mengolah data-data meteorologi
                            menjadi suatu basis data dengan menggunakan teknologi GIS dan teknologi informasi untuk
                            kepentingan meteorologi.<br>3.
                            Mahasiswa mampu menginterpretasi informasi meteorologi
                            dari suatu sistem informasi meteorologi yang dibangun berbasis multimedia dan teknologi
                            informasi.<br><br>Dalam website
                            yang kami buat ini berisikan perjalanan kami dalam
                            mata kuliah Sistem Informasi Meteorologi. Mulai dari awal semester hingga tugas akhir menuju
                            UAS. Selain dari pemenuhan
                            terhadap tugas UAS, website yang kami buat ini diharapkan
                            dapat menjadi media pembelajaran ataupun referensi untuk adik tingkat selanjutnya yang akan
                            mengambil mata kuliah Sistem
                            Informasi Meteorologi. Selamat menjelajah website kami!!!
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
        </div>

        </section><!-- /Clients Section -->

        <section id="#analisis" class="about section"></section>
        <div class="analisis" id="analisis">
            <h2>Curah Hujan DKI Jakarta Tahun 2018</h2>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHJAN18.JPG" alt="" data-href="januari1.html">
                <img src="peta/IMG BUFF/CHBUFFJAN18.JPG" alt="" data-href="januari2.html">
                <img src="peta/IMG TISEN/CHTISJAN18.JPG" alt="" data-href="januari3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHFEB18.JPG" alt="" data-href="februari1.html">
                <img src="peta/IMG BUFF/CHBUFFFEB18.JPG" alt="" data-href="februari2.html">
                <img src="peta/IMG TISEN/CHTISFEB18.JPG" alt="" data-href="februari3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHMAR18.JPG" alt="" data-href="maret1.html">
                <img src="peta/IMG BUFF/CHBUFFMAR18.JPG" alt="" data-href="maret2.html">
                <img src="peta/IMG TISEN/CHTISMAR18.JPG" alt="" data-href="maret3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHAPR18.JPG" alt="" data-href="april1.html">
                <img src="peta/IMG BUFF/CHBUFFAPR18.JPG" alt="" data-href="april2.html">
                <img src="peta/IMG TISEN/CHTISAPR18.JPG" alt="" data-href="april3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHMEI18.JPG" alt="" data-href="mei1.html">
                <img src="peta/IMG BUFF/CHBUFFMEI18.JPG" alt="" data-href="mei2.html">
                <img src="peta/IMG TISEN/CHTISMEI18.JPG" alt="" data-href="mei3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHJUN18.JPG" alt="" data-href="juni1.html">
                <img src="peta/IMG BUFF/CHBUFFJUN18.JPG" alt="" data-href="juni2.html">
                <img src="peta/IMG TISEN/CHTISJUN18.JPG" alt="" data-href="juni3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHJUL18.JPG" alt="" data-href="juli1.html">
                <img src="peta/IMG BUFF/CHBUFFJUL18.JPG" alt="" data-href="juli2.html">
                <img src="peta/IMG TISEN/CHTISJUL18.JPG" alt="" data-href="juli3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHAGS18.JPG" alt="" data-href="agustus1.html">
                <img src="peta/IMG BUFF/CHBUFFAGS18.JPG" alt="" data-href="agustus2.html">
                <img src="peta/IMG TISEN/CHTISAGS18.JPG" alt="" data-href="agustus3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHSEP18.JPG" alt="" data-href="september1.html">
                <img src="peta/IMG BUFF/CHBUFFSEP18.JPG" alt="" data-href="september2.html">
                <img src="peta/IMG TISEN/CHTISSEP18.JPG" alt="" data-href="september3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHOKT18.JPG" alt="" data-href="oktober1.html">
                <img src="peta/IMG BUFF/CHBUFFOKT18.JPG" alt="" data-href="oktober2.html">
                <img src="peta/IMG TISEN/CHTISOKT18.JPG" alt="" data-href="oktober3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHNOV18.JPG" alt="" data-href="november1.html">
                <img src="peta/IMG BUFF/CHBUFFNOV18.JPG" alt="" data-href="november2.html">
                <img src="peta/IMG TISEN/CHTISNOV18.JPG" alt="" data-href="november3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHDES18.JPG" alt="" data-href="desember1.html">
                <img src="peta/IMG BUFF/CHBUFFDES18.JPG" alt="" data-href="desember2.html">
                <img src="peta/IMG TISEN/CHTISDES18.JPG" alt="" data-href="desember3.html">
            </div><br><br>
            <div class="petanya" data-aos="fade-up" data-aos-delay="100">
                <img src="peta/IMG FIKS/CHTAHUN18.JPG" alt="" data-href="tahunan1.html">
                <img src="peta/IMG BUFF/CHBUFFTHN18.JPG" alt="" data-href="tahunan2.html">
                <img src="peta/IMG TISEN/CHTISTHN18.JPG" alt="" data-href="tahunan3.html">
            </div>
        </div>
        </section>

        <script>
            document.querySelectorAll('.petanya img').forEach(img => {
                img.addEventListener('click', () => {
                    window.location.href = img.getAttribute('data-href');
                });
            });
        </script>

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="porto" data-aos="fade-up" data-aos-delay="100">
                <h2>Semester 4 Bersama GAF.siet</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-map"></i>
                            </div>
                            <a href="prak1.html" class="stretched-link">
                                <h3>Praktikum Modul 1</h3>
                            </a>
                            <p>Pengenalan Leaflet dan Membuat Peta Interaktif Sederhana</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <a href="Praktikum/Prak2/Leaflet.html" class="stretched-link">
                                <h3>Praktikum Modul 2</h3>
                            </a>
                            <p>Leaflet Overlay dan GeoJSON</p>
                            <a href="Praktikum/Prak2/Leaflet.html" class="stretched-link"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <a href="prak3.html" class="stretched-link">
                                <h3>Praktikum Modul 3</h3>
                            </a>
                            <p>Introducing Mobile Apps</p>
                            <a href="prak3.html" class="stretched-link"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <a href="prak4.html" class="stretched-link">
                                <h3>Praktikum Modul 4</h3>
                            </a>
                            <p>Peta Dasar dan Input Data Sederhana</p>
                            <a href="prak4.html" class="stretched-link"></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-map"></i>
                            </div>
                            <a href="prak5.html" class="stretched-link">
                                <h3>Praktikum Modul 5</h3>
                            </a>
                            <p>Data Vektor, Georeferencing, Data Raster, Mozaik, dan Clipping</p>
                            <a href="prak5.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-youtube"></i>
                            </div>
                            <a href="https://www.youtube.com/watch?v=iqMQicU7vwE" class="stretched-link">
                                <h3>Video Multimedia</h3>
                            </a>
                            <p>Video Kebencanaan Peristiwa Hidrometeorologi</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Pricing Section -->
        <!-- Team Section -->
        <section id="team" class="team section">

            <div class="team" id="team">
                <h2>Tim GAF.siet</h2>
                <div class="container">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="img/Mpeb.JPG" alt="">
                        </div>
                        <div class="content">
                            <h3>Febrya Bagus Saputra</h3>
                            <h3>12822056</h3>
                            <div class="social">
                                <a href="https:/wa.me/6287735278754"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.instagram.com/rystrz"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="img/Ganes.JPG" alt="">
                        </div>
                        <div class="content">
                            <h3>Ganesha Akbar Taruna Dwa</h3>
                            <h3>12822009</h3>
                            <div class="social">
                                <a href="https:/wa.me/6282218907391"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.instagram.com/ganeshaakbrtd"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="img/Adil.JPG" alt="">
                        </div>
                        <div class="content">
                            <h3>Adil Berjaya Suherman</h3>
                            <h3>12822043</h3>
                            <div class="social">
                                <a href="https:/wa.me/6281214203918"><i class="bi bi-whatsapp"></i></a>
                                <a href="https://www.instagram.com/aderusweebs"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="kontak" data-aos="fade-up" data-aos-delay="100">
                <h2>GAF.siet dapat dihubungi melalui</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p class="text-center">Jalan Ganesa No.10,Kelurahan Lb. Siliwangi, Kecamatan Coblong, Kota
                                Bandung, Jawa Barat 40132</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>gafsiet128@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.2145854534793!2d107.60944891616376!3d-6.88918291752139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6582bd180ef%3A0x23c8ddd5c7798f12!2sSekretariat%20HMME%20Atmosphaira%20ITB!5e0!3m2!1sid!2sid!4v1716823492658!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="Name" class="form-control" placeholder="Nama Lengkap"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="Email" placeholder="Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="Subject" placeholder="Kategori"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="Message" rows="6" placeholder="Pesan"
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Memuat...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan terkirim. Terimakasih!</div>

                                    <button type="Submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> Member<strong class="px-1 sitename">2024 <span>All Rights Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="app.js"></script>


</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Email, Subject, Message, Submit FROM website";
$result = $conn->query($sql);
$conn->close();
?>