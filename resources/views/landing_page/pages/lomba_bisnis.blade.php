@extends("landing_page.layouts.master")

@section("content")
<section id="detail-page-hero">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12 col-sm-12 text-center"  data-aos="zoom-in-up">
          <img src="{{asset('img/tcp.png')}}" alt="maskot-epim" class="img-detail-page-hero" />
        </div>
        <div class="detail-page-hero-section col-lg-12 col-sm-12" data-aos="zoom-in">
            <h1 class="detail-page-hero-title">
                LOMBA BISNIS TIK 2021
            </h1>
            <p class="detail-page-hero-desc">
              16 September 2021
            </p>
          <p class="detail-page-hero-info">"Optimizing the Creativity of Young Generation as Millenial Entrepreneurs"</p>
        </div>
        <div class="col-lg-4 col-sm-12 detail-page-hero-btn-wrapper"  data-aos="zoom-in-up">
          <a href="{{route('register')}}" class="detail-page-hero-btn invert" id="show-form">Pendaftaran</a>
        </div>
      </div>
  </section>

  <main>
    <section class="detail-page-section-1" id="more">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="detail-page-title-1">
              PELAKSANAAN
            </h1>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="box-round pelaksanaan" data-aos="fade-up">
              <div class="box-round-title">
                Zoom Teleconference
              </div>
              <div class="box-round-body">
                <i>Online</i>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="detail-page-section-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="detail-page-title-1 mt-">
              TIMELINE KEGIATAN
            </h1>
          </div>

        </div>
        <div class="row justify-content-center timeline-kegiatan">
          <div class="col-lg-12">
            <div class="wrapper">


              <div class="tiang">
                <div class="circle-wrapper">
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                </div>


                <div class="tiang-wrapper">
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                </div>
                <div class="box-wrapper box-wrapper-timeline-kegiatan">
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title ">
                        Pendaftaran dan Pengumpulan Proposal
                    </div>
                    <div class="box-round-desc">
                        28 Juni - 15 Agustus 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                        Pengumuman Finalis
                    </div>
                    <div class="box-round-desc">
                        1 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                        Technical Meeting
                    </div>
                    <div class="box-round-desc">
                        4 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                        Pembukaan EPIM 1
                    </div>
                    <div class="box-round-desc">
                        13 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                        Final Lomba Bisnis TIK
                    </div>
                    <div class="box-round-desc">
                        16 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                        Pengumuman Final dan Penutupan
                    </div>
                    <div class="box-round-desc">
                        17 September 2021
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="detail-page-section-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h1 class="detail-page-title-1">
              LEBIH LANJUT
            </h1>
          </div>
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="box-round more" data-aos="fade-up">
              <div class="box-round-title">
                <a href="#" class="btn-lebihlanjut">Buku Panduan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="box-round more" data-aos="fade-up">
              <div class="box-round-title">
                <a href="{{route('register')}}" class="btn-lebihlanjut">Daftar Sekarang!</a>
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
  @endsection
