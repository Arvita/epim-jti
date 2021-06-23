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
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis quod laborum
                                    quis dolores
                                    reprehenderit aliquid qui minima, voluptate delectus?</i></p>
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
                                <img src="{{asset('img/AOM.png')}}" alt="maskot-epim" class="img-hero">
                            </div>
                        </div>
                        <div class="hero-section col-lg-5 col-sm-12 order-lg-1">
                            <h1 class="hero-title">
                                EXPO PRODUK IT 2021
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis quod laborum
                                    quis dolores
                                    reprehenderit aliquid qui minima, voluptate delectus?</i></p>
                            <p class="hero-desc">
                                Organized by <b>Himpunan Mahasiswa Jurusan Teknologi Informasi.</b>
                            </p>
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
                                LOMBA IT JARINGAN 2021
                            </h1>
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis quod laborum
                                    quis dolores
                                    reprehenderit aliquid qui minima, voluptate delectus?</i></p>
                            <p class="hero-desc">

                                Organized by <b>Himpunan Mahasiswa Jurusan Teknologi Informasi.</b>

                            </p>
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
                            <h1 class="hero-title">POLITEKNIK NEGERI JEMBER</h1>
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint debitis quod laborum
                                    quis dolores
                                    reprehenderit aliquid qui minima, voluptate delectus?</i></p>
                            <p class="hero-desc">

                                Organized by <b>Himpunan Mahasiswa Jurusan Teknologi Informasi.</b>

                            </p>
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
                    <p class="desc-1">Lorem ipmsumLorem ipsum, or lipsum as it is sometimes known, is dummy text used in
                        laying
                        out print, graphic or web designs. The passage is attributed to an unknown typesetter in the
                        15th century
                        who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a
                        type
                        specimen book. It usually begins with:
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
                                produk mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <a href="/lomba_it.html">
                                <img class="proker-img" src="{{asset('img/TN.png')}}" alt="Gambar Lomba IT">
                            </a>
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">LOMBA IT</p>
                            <p class="desc-1">Expo Produk IT adalah kegiatan pameran
                                produk mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <a href="/tcp_it.html">
                                <img class="proker-img" src="{{asset('img/tcp.png')}}" alt="Gambar TCP IT">
                            </a>
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">LOMBA TCP IT</p>
                            <p class="desc-1">Expo Produk IT adalah kegiatan pameran
                                produk mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember</p>
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
                            <p class="desc-1">Expo Produk IT adalah kegiatan pameran
                                produk mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember</p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-4 text-center">
                        <div class="col-lg-12" data-aos="fade-up">
                            <img class="proker-img" src="{{asset('img/AOM.png')}}" alt="Gambar Expo">
                        </div>
                        <div class="col-lg-12 proker" data-aos="fade-up">
                            <p class="proker-title">ART OF MANUNGGALANG</p>
                            <p class="desc-1">Expo Produk IT adalah kegiatan pameran
                                produk mahasiswa Jurusan Teknologi Informasi
                                Politeknik Negeri Jember</p>
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
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up">
                    <div class="card card-timeline">
                        <div class="card-body">
                            <h5 class="card-title">LOMBA JARINGAN</h5>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in-up">
                    <div class="card card-timeline">
                        <div class="card-body">
                            <h5 class="card-title">LOMBA BISNIS TIK </h5>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>
                            <h6 class="card-subtitle mb-2">Timeline Acara</h6>
                            <p class="card-text">13 -17 September 2021</p>

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
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate
                                    the <code>.accordion-flush</code> class. This is the first item's accordion body.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate
                                    the <code>.accordion-flush</code> class. This is the second item's accordion body.
                                    Let's imagine
                                    this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate
                                    the <code>.accordion-flush</code> class. This is the third item's accordion body.
                                    Nothing more
                                    exciting happening here in terms of content, but just filling up the space to make
                                    it look, at least
                                    at first glance, a bit more representative of how this would look in a real-world
                                    application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


