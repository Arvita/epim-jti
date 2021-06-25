@extends("landing_page.layouts.master")
@section("content")
<section id="hero">
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
                            <a href="#tentang" class="hero-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-12 order order-lg-2">
                            <div class="hero-img">
                                <img src="{{asset('img/expo-ti.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1">
                            <h1 class="hero-title">
                                EXPO PRODUK IT
                            </h1>
                            <p>Expo Produk IT adalah kegiatan pameran
                                produk Mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember. Kegiatan ini dilaksanakan dalam 2 konsep acara yaitu Online (daring) dan Offline (luring). Expo Produk IT memberikan kesempatan kepada Mahasiswa Jurusan teknologi Informasi untuk memamerkan hasil karya dan inovasi mereka dibidang teknologi kepada khalayak serta meningkatkan jiwa kompotitif dan kreatifitas mahasiswa.
                            <a href="{{ route('expo') }}" class="hero-btn">Selengkapnya</a>
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
                            <p>Lomba Konfigurasi Jaringan adalah ajang perlombaan konfigurasi jaringan yang menggambarkan berbagai kegiatan yang berhubungan dengan membangun dan mempertahankan jaringan data. Konfigurasi Jaringan mencakup isu-isu yang berkaitan dengan memungkinkan protokol dari perspektif perangkat lunak, dan isu-isu yang berkaitan dengan router, switch, dan firewall dari perspektif hardware, dan peserta diikuti oleh siswa/siswi SMK Tingkat Nasional</p>
                            <a href="{{ route('lomba_it') }}" class="hero-btn">Selengkapnya</a>
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
                            <p>Lomba Bisnis TIK merupakan perlombaan atau kompetisi pembuatan proposal business plan yang ditujukan kepada mahasiswa aktif yang terdaftar dalam program Diploma/S1 Se-Indonesia di perguruan tinggi negeri maupun swasta. Lomba ini memberikan kesempatan kepada peserta yang memiliki ide bisnis, start up, dan pengembangan usaha serta inovasi dan kreatifitas siswa, baik berupa jasa atau produk yang berorientasi pada bidang Teknologi Informasi.</p>
                            <a href="{{ route('tcp_it') }}" class="hero-btn">Selengkapnya</a>
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
<main>
    <section class="section-1" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 embed-video">
                    <div class="embed-responsive" data-aos="fade-right">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/kH11UX3BB7k"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
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
                            <p class="proker-title">ART OF MANUNGGALAN</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


