<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPIM 2021</title>

    <!-- Plugin Style -->
    <link href="{{asset('dist/aos/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet"
      href="{{asset('/dist/filepond/filepond-plugin-image-preview.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/filepond/filepond.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/font-awesome/css/all.min.css')}}">

    <!-- Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet">

    <!-- User Style -->
    <link rel="stylesheet" href="{{asset('dist/css/styles.css')}}" />
</head>

<body class="no-scroll" style="overflow: hidden">
  <header id="header" class="fixed-top d-flex align-items-center shadow-sm" style="overflow: hidden;">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <a href="/"><img src="{{asset('img/logoo.png')}}" height="50" alt="" /></a>
        <a href="/" ><img src="{{asset('img/logo_epim.png')}}" height="40" alt="" style="padding-left: 10px"/></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown">
            <a class="nav-link scrollto active" href="#">
              <span>Beranda</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#tentang">Tentang</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#event">Event</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#timeline">Timeline</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="nav-link scrollto" href="#">
              <span>Produk</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Mobile</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Website</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Desktop</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">IOT</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="nav-link scrollto" href="#">Pengumuman</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#faq">FAQ</a>
          </li>
          <li class="dropdown">
            <a class="nav-link scrollto" href="#">
              <span>My Account</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="">Login</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="">Register</a>
              </li>
            </ul>
          </li>
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
      </nav>

      {{-- <div class="navbar-social-media d-flex align-items-center">
        <a href="https://www.facebook.com/hmjti.polije" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCcIzhQvQ4t_-9ejb-aK0Raw" class="youtube"><i
            class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/hmjti_polije" class="instagram"><i class="fab fa-instagram"></i></a>
      </div> --}}


    </div>
  </header>
<div class="overlay coming-soon">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 wrapper-image-countdown mt-5">
                <img src="{{asset('img/EPIM 2.png')}}" alt="maskot-epim" class="img-countdown" />
            </div>
            <div class="col-lg-12">
                <div class="cs-desc">
                    <h1 class="cs-title">
                        EXPO PEKAN ILMIAH MAHASISWA 2021
                        POLITEKNIK NEGERI JEMBER
                    </h1>
                    <p><i>"Millennial optimization to create creative, competitive, and realistic technologies innovations for Indonesian golden 2045"</i></p>
                    <p class="cs-date">13-17 September 2021</p>
                </div>
                <div class="col-lg-12 cs-countdown-box">

                    <div class="top-box">
                        <p>COMING SOON</p>
                    </div>
                    <div class="row cs-countdown align-items-end">
                        <div class="col-lg-12">
                            <ul id="countdown">
                                <li><span class="days">00</span>
                                    <p class="clock-name">Days</p>
                                </li>
                                <li class="seperator">:</li>
                                <li><span class="hours">00</span>
                                    <p class="clock-name">Hours</p>
                                </li>
                                <li class="seperator">:</li>
                                <li><span class="minutes">00</span>
                                    <p class="clock-name">Minutes</p>
                                </li>
                                <li class="seperator">:</li>
                                <li><span class="seconds">00</span>
                                    <p class="clock-name">Seconds</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-3 justify-content-center">
                        <div class="col-lg-4 sponsor-countdown">
                            <p>
                                Sponsorship
                            </p>
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-4 sponsor-countdown">
                            <p>
                                Mediapartner
                            </p>
                            <div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<section id="hero" style="overflow: hidden">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active " data-bs-interval="10000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-12 order order-lg-2" data-aos="zoom-in-up">
                            <div class="hero-img">
                                <img src="{{asset('img/EPIM 2.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1" data-aos="zoom-in">
                            <h1 class="hero-title">
                                EXPO PEKAN ILMIAH MAHASISWA 2021 (EPIM 2021)
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>"Millennial optimization to create creative, competitive, and realistic technologies innovations for Indonesian golden 2045"</i></p>
                            <p class="hero-desc">

                                Organized by <b>Himpunan Mahasiswa Jurusan Teknologi Informasi.</b>

                            </p>
                            <a href="#more" class="hero-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-12 order order-lg-2">
                            <div class="hero-img">
                                <img src="{{asset('img/AOM.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1">
                            <h1 class="hero-title">
                                EXPO PRODUK IT
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Expo Produk IT adalah kegiatan pameran
                                produk Mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember. Kegiatan ini dilaksanakan dalam 2 konsep acara yaitu Online (daring) dan Offline (luring). Expo Produk IT memberikan kesempatan kepada Mahasiswa Jurusan teknologi Informasi untuk memamerkan hasil karya dan inovasi mereka dibidang teknologi kepada khalayak serta meningkatkan jiwa kompotitif dan kreatifitas mahasiswa.</i></p>
                            <a href="#" class="hero-btn">Selengkapnya</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item " data-bs-interval="6000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-12 order order-lg-2">
                            <div class="hero-img">
                                <img src="{{asset('img/TN2.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1">
                            <h1 class="hero-title">
                                LOMBA KONFIGURASI JARINGAN
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Lomba Konfigurasi Jaringan adalah ajang perlombaan konfigurasi jaringan yang menggambarkan berbagai kegiatan yang berhubungan dengan membangun dan mempertahankan jaringan data. Konfigurasi Jaringan mencakup isu-isu yang berkaitan dengan memungkinkan protokol dari perspektif perangkat lunak, dan isu-isu yang berkaitan dengan router, switch, dan firewall dari perspektif hardware, dan peserta diikuti oleh siswa/siswi SMK Tingkat Nasional</i></p>
                            <a href="#" class="hero-btn">Selengkapnya</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item " data-bs-interval="6000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-12 order order-lg-2">
                            <div class="hero-img">
                                <img src="{{asset('img/tcp.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1">
                            <h1 class="hero-title">
                                LOMBA BISNIS TIK
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Lomba Bisnis TIK merupakan perlombaan atau kompetisi pembuatan proposal business plan yang ditujukan kepada mahasiswa aktif yang terdaftar dalam program Diploma/S1 Se-Indonesia di perguruan tinggi negeri maupun swasta. Lomba ini memberikan kesempatan kepada peserta yang memiliki ide bisnis, start up, dan pengembangan usaha serta inovasi dan kreatifitas siswa, baik berupa jasa atau produk yang berorientasi pada bidang Teknologi Informasi.</i></p>
                            <a href="#" class="hero-btn">Selengkapnya</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="button-control-wrapper">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

</section>
<main style="overflow: hidden">
    <section class="section-1" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 embed-video">
                    <div class="embed-responsive" data-aos="fade-right">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tlEk0is6-X8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 embed-description" data-aos="fade-left">
                    <p class="title-1">Teaser EPIM 2021</p>
                    <p class="desc-1">Expo dan Pekan Ilmiah Mahasiswa adalah kegiatan perwujudan kreativitas mahasiswa yang dilaksanakan perguruan tinggi yang terjadwal, guna meningkatkan budaya kompetisi akademik dan unjuk prestasi di kalangan mahasiswa. EPIM sebagai media pertemuan nasional dan wadah untuk saling berkomunikasi, bertukar fikiran serta pengalaman antar mahasiswa, siswa dan siswi aktif seluruh indonesia
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2" id="event">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 title-section-2">
                    <p class="title-1">SERANGKAIAN KEGIATAN EPIM 2021</p>
                </div>
            </div>
            <div class="row justify-content-around text-center">
                <div class="col-lg-5 epim">
                    <p class="title-1">EPIM SESI 1</p>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <a href="/detail_page.html">
                                <img class="proker-img" src="{{asset('img/EXPOed.png')}}" alt="Gambar Expo">
                            </a>
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">EXPO PRODUK IT</p>
                            <p class="desc-1">Expo Produk IT adalah kegiatan pameran
                                produk Mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember. Kegiatan ini dilaksanakan dalam 2 konsep acara yaitu Online (daring) dan Offline (luring). Expo Produk IT memberikan kesempatan kepada Mahasiswa Jurusan teknologi Informasi untuk memamerkan hasil karya dan inovasi mereka dibidang teknologi kepada khalayak serta meningkatkan jiwa kompotitif dan kreatifitas mahasiswa.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <a href="/lomba_it.html">
                                <img class="proker-img" src="{{asset('img/TN.png')}}" alt="Gambar Lomba IT">
                            </a>
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">LOMBA KONFIGURASI JARINGAN</p>
                            <p class="desc-1">Lomba Konfigurasi Jaringan adalah ajang perlombaan konfigurasi jaringan yang menggambarkan berbagai kegiatan yang berhubungan dengan membangun dan mempertahankan jaringan data. Konfigurasi Jaringan mencakup isu-isu yang berkaitan dengan memungkinkan protokol dari perspektif perangkat lunak, dan isu-isu yang berkaitan dengan router, switch, dan firewall dari perspektif hardware, dan peserta diikuti oleh siswa/siswi SMK Tingkat Nasional</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <a href="/tcp_it.html">
                                <img class="proker-img" src="{{asset('img/tcp.png')}}" alt="Gambar TCP IT">
                            </a>
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">LOMBA BISNIS TIK</p>
                            <p class="desc-1">Lomba Bisnis TIK merupakan perlombaan atau kompetisi pembuatan proposal business plan yang ditujukan kepada mahasiswa aktif yang terdaftar dalam program Diploma/S1 Se-Indonesia di perguruan tinggi negeri maupun swasta. Lomba ini memberikan kesempatan kepada peserta yang memiliki ide bisnis, start up, dan pengembangan usaha serta inovasi dan kreatifitas siswa, baik berupa jasa atau produk yang berorientasi pada bidang Teknologi Informasi.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 epim">
                    <p class="title-1">EPIM SESI 2</p>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <img class="proker-img" src="{{asset('img/Talkshow.png')}}" alt="Gambar Expo">
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">TALKSHOW NASIONAL</p>
                            <p class="desc-1">Talkshow Nasional merupakan kegiatan yang dilakukan untuk memberikan wawasan serta berbagi pengalaman tentang kewirausahaan, bisnis, dan teknologi informasi yang dilakukan oleh orang yang sudah berkompeten dalam bidang tersebut yang bertujuan untuk dapat memberikan motivasi serta semangat kepada para untuk dapat menumbuhkan semangat berwirausaha di era digital seperti sekarang ini.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <img class="proker-img" src="{{asset('img/AOM.png')}}" alt="Gambar Expo">
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">ART OF MANUNGGALANG</p>
                            <p class="desc-1">AOM (Art Of Manunggalan) merupakan kegiatan keakraban seluruh mahasiswa baru Teknologi Informasi dan ucapan selamat datang Kepada Mahasiswa Baru sebagai anggota keluarga besar Jurusan Teknologi Informasi Politeknik Negeri Jember</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3" id="timeline">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <p class="title-1">TIMELINE KEGIATAN EPIM SESI 1 2021</p>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up">
                    <div class="card card-timeline">
                        <div class="card-body">
                            <h5 class="card-title">EXPO PRODUK IT</h5>
                            <h6 class="card-subtitle mb-2">Pendaftaran Peserta</h6>
                            <p class="card-text">19 Juli - 9 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Hasil Seleksi</h6>
                            <p class="card-text">17 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Technical Meeting</h6>
                            <p class="card-text">21 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumpulan Berkas Pendukung Expo</h6>
                            <p class="card-text">23 Agustus - 1 September 2021
                            </p>
                            <h6 class="card-subtitle mb-2">Acara Expo</h6>
                            <p class="card-text">13-17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Final dan Penutupan</h6>
                            <p class="card-text">17 September 2021</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up">
                    <div class="card card-timeline">
                        <div class="card-body">
                            <h5 class="card-title">LOMBA KONFIGURASI JARINGAN</h5>
                            <h6 class="card-subtitle mb-2">Pendaftaran dan Pembayaran Gelombang 1</h6>
                            <p class="card-text">28 Juni - 27 Juli 2021</p>
                            <h6 class="card-subtitle mb-2">Pendaftaran dan Pembayaran Gelombang 2</h6>
                            <p class="card-text">28 Juli – 18 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Panduan Seleksi Online</h6>
                            <p class="card-text">22 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Seleksi Online Jaringan</h6>
                            <p class="card-text">29 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Finalis</h6>
                            <p class="card-text">1 September 2021</p>
                            <h6 class="card-subtitle mb-2">Technical Meeting</h6>
                            <p class="card-text">5 September 2021</p>
                            <h6 class="card-subtitle mb-2">Pembukaan EPIM 1</h6>
                            <p class="card-text">13 September 2021</p>
                            <h6 class="card-subtitle mb-2">Acara Final</h6>
                            <p class="card-text">14 September 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Final dan Penutupan</h6>
                            <p class="card-text">17 September 2021</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up">
                    <div class="card card-timeline">
                        <div class="card-body">
                            <h5 class="card-title">LOMBA BISNIS TIK </h5>
                            <h6 class="card-subtitle mb-2">Pendaftaran dan Pengumpulan Proposal</h6>
                            <p class="card-text">28 Juni - 15 Agustus 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Finalis</h6>
                            <p class="card-text">1 September 2021</p>
                            <h6 class="card-subtitle mb-2">Technical Meeting</h6>
                            <p class="card-text">4 September 2021</p>
                            <h6 class="card-subtitle mb-2">Pembukaan EPIM 1</h6>
                            <p class="card-text">13 September 2021</p>
                            <h6 class="card-subtitle mb-2">Final Lomba Bisnis TIK</h6>
                            <p class="card-text">16 September 2021</p>
                            <h6 class="card-subtitle mb-2">Pengumuman Final dan Penutupan</h6>
                            <p class="card-text">17 September 2021</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-4" id="faq">
        <div class="container faq">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-title">
                        <h1 class="title-1">Frequently Answered Question</h1>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="zoom-in-up">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Apakah ada batasan usia untuk peserta yang mengikuti lomba Bisnis TIK?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tidak ada. Sejauh peserta terdaftar sebagai mahasiswa dibuktikan dari kartu mahasiswa yang masih aktif.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Apakah satu tim boleh mengirimkan lebih dari 1 proposal Bisnis TIK?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Boleh, Namun untuk pembayaran registrasi tetap berlaku per proposal. Yaitu Rp. 100.000 untuk Mahasiswa Umum dan Rp. 70.000 untuk Mahasiswa Politeknik Negeri Jember
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Apakah boleh mengirim karya yang pernah menang di lomba lain?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tidak. Karya yang dikirimkan harus merupakan karya yang belum pernah menang di ajang perlombaan apapun.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Jika kami sebagai tim (2 / 3 orang), apakah semuanya harus mendaftar?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Untuk tim, cukup ketua yang mendaftar, lalu isikan data ketua dan anggota dengan lengkap dan benar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Jika kami tidak memiliki dosen pembimbing, apakah tidak masalah bila dikosongkan?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Setiap tim harus memiliki dosen pembimbing dan tidak boleh dikosongkan
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Apakah seluruh peserta mendapatkan sertifikat peserta ?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Iya, mendapatkan, seluruh peserta yang terdaftar akan mendapatkan e-sertifikat individu
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                    Apakah Mahasiswa Luar Politeknik Negeri Jember dapat mendaftar sebagai perserta Expo/Pameran?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tidak, Peserta Expo Produk IT hanya berasal dari mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEight" aria-expanded="false"
                                    aria-controls="flush-collapseEight">
                                    Bagaimana cara mengunjungi Expo secara Online?
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Dengan cara mengunjungi tautan <a href="http://expo.epimjti.com" target="_blank">http://expo.epimjti.com/</a>. atau dengan cara klik kategori pada navigasi bar website ini.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseNine" aria-expanded="false"
                                    aria-controls="flush-collapseNine">
                                    Apakah ada batasan usia untuk peserta yang mengikuti lomba?
                                </button>
                            </h2>
                            <div id="flush-collapseNine" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tidak ada. Sejauh peserta terdaftar sebagai siswa SMK dibuktikan dari kartu tanda pelajar  yang masih aktif.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTen" aria-expanded="false"
                                    aria-controls="flush-collapseTen">
                                    Apakah seluruh peserta mendapatkan sertifikat peserta ?
                                </button>
                            </h2>
                            <div id="flush-collapseTen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Iya mendapatkan, semua peserta mendapatkan sertifikat sebagai peserta
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEleven" aria-expanded="false"
                                    aria-controls="flush-collapseEleven">
                                    Bagaimana jika kartu tanda pelajar hilang/tidak ada ?
                                </button>
                            </h2>
                            <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Kartu tanda pelajar yang hilang/tidak ada, dapat digantikan dengan surat keterangan aktif dari sekolah.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwelve" aria-expanded="false"
                                    aria-controls="flush-collapseTwelve">
                                    Apakah biaya pendaftaran peserta dapat digabung dengan siswa/peserta yang satu sekolah?
                                </button>
                            </h2>
                            <div id="flush-collapseTwelve" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Bisa, jika peserta berasal dari satu sekolah yang sama.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThirdTeen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThirdTeen" aria-expanded="false"
                                    aria-controls="flush-collapseThirdTeen">
                                    Apakah ada batasan pendaftar perwakilan sekolah?
                                </button>
                            </h2>
                            <div id="flush-collapseThirdTeen" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThirdTeen" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Tidak ada batasan peserta, meskipun dari satu sekolah yang sama.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 col-sm-12 wrapper-logo">
          <div class="footer-logo">
            <img src="{{asset('img/logoo.png')}}" alt="" />
            <p class="title-1">EXPO DAN PEKAN ILMIAH MAHASISWA 2021</p>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12 mx-auto order order-lg-3">
          <div class="sponsor-panel">
            <!-- <p>Didukung oleh: </p> -->
            <a href="https://www.polije.ac.id/" target="_blank"><img src="{{asset('img/img_poije.png')}}" alt="" height="30"></a>
            <a href="http://jti.polije.ac.id/" target="_blank"><img src="{{asset('img/img_jti.png')}}" alt="" height="30"></a>
            <a href="https://www.instagram.com/hmjti_polije/" target="_blank"><img src="{{asset('img/img_hmjti.png')}}" alt="" height="30"></a>
            <a href="https://www.instagram.com/birosi_hmjti/" target="_blank"><img src="{{asset('img/img_birosi.png')}}" alt="" height="30"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="dev-thanks">
      <p>&copy 2021 Expo dan Pekan Ilmiah Mahasiswa - All Rights Reserved. Developed by <b>Biro Sistem Informasi HMJ TI 2021</b>
      </p>
    </div>
  </footer>

  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <a href="#" class="back-to-top"></a>

<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.countdown.min.js')}}"></script>
<script>
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);
    $('#countdown').countdown({
        date: '6/28/2021 00:00:00',
        // Target date

        // time zone
        offset: null,

        // Countdown text
        day: 'Day',
        days: 'Days',
        hour: 'Hour',
        hours: 'Hours',
        minute: 'Minute',
        minutes: 'Minutes',
        second: 'Second',
        seconds: 'Seconds'
    }, function () {
        //  alert('');
        $('.overlay').removeClass('hidden');
    });

    window.addEventListener('load', () => {
        $("body").addClass("no-scroll");
    });


</script>
<script src="{{asset('dist/aos/aos.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
</body>
</html>
