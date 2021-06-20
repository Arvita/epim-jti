@extends("user.layouts.master")

@section("content")

<section id="detail-page-hero">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12 col-sm-12 text-center"  data-aos="zoom-in-up">
          <img src="./img/EXPOed.png" alt="maskot-epim" class="img-detail-page-hero" />
        </div>
        <div class="detail-page-hero-section col-lg-12 col-sm-12"  data-aos="zoom-in">
          <p class="detail-page-hero-desc">
            13 - 17 September 2021
          </p>
          <h1 class="detail-page-hero-title">
            EXPO PRODUK IT 2021
          </h1>
          <p class="detail-page-hero-info"> Optimalisasi Peran Generasi Milenial untuk Menciptakan Inovasi Teknologi Kreatif, Kompetitif, dan Realistis Menuju Infonesia Emas 2045</p>
        </div>
        <div class="col-lg-4 col-sm-12 detail-page-hero-btn-wrapper"  data-aos="zoom-in-up">
          <a href="#more" class="detail-page-hero-btn">Pendaftaran</a>
        </div>
        <div class="col-lg-4 col-sm-12 detail-page-hero-btn-wrapper"  data-aos="zoom-in-up">
          <button class="detail-page-hero-btn invert" id="show-form">Pendaftaran</button>
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
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="box-round pelaksanaan" data-aos="fade-up">
              <div class="box-round-title">
                Lippo Plaza
              </div>
              <div class="box-round-body">
                <i>Offline</i>
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
              <div class="tiang" style="height: 750px">
                <div class="circle-wrapper">
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                  <div class="circle circle-left"></div>
                  <div class="circle circle-right"></div>
                </div>
                <div class="tiang-wrapper">
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                  <div class="tiang-rotate tiang-left"></div>
                  <div class="tiang-rotate tiang-right"></div>
                  <div class="tiang-rotate tiang-left"></div>
                </div>
                <div class="box-wrapper box-wrapper-timeline-kegiatan" >
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title ">
                      Pendafataran dan Pengumumpulan Berkas Peserta
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Seleksi Berkas Peserta
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                      Pengumuman Hasil Seleksi
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Technical Meeting
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                      Pengumpulan File Pendukung
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Acara
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                      Pengumuman Pemenang
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
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
                GOR PERJUANGAN 45
              </div>
              <div class="box-round-desc">
                Politeknik Negeri Jember
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="box-round more" data-aos="fade-up">
              <div class="box-round-title">
                GOR PERJUANGAN 45
              </div>
              <div class="box-round-desc">
                Politeknik Negeri Jember
              </div>
            </div>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <div class="box-round more" data-aos="fade-up">
              <div class="box-round-title">
                GOR PERJUANGAN 45
              </div>
              <div class="box-round-desc">
                Politeknik Negeri Jember
              </div>
            </div>
          </div>
        </div>
    </section>
</main>
<div class="overlay hidden">
    <div class="section-form-pendaftaran">
      <div class="fixed-btn-wrapper">
        <button class="close-form">
          <i class="fa fa-times"></i>
        </button>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="form-logo">
              <a href="#"><img src="http://jti.polije.ac.id/epim/assets/logoo.png" alt=""></a>
              <p class="d-inline">EPIM 2021</p>
            </div>
            <h1 class="form-title">
              PENDAFTARAN EXPO IT 2021
            </h1>
          </div>
          <form action="#" class="form-pendaftaran" method="POST">
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Data Diri
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <label for="nama_tim" class="form-label">Nama TIM</label>
                  <input type="text" class="form-control" id="nama_tim" name="nama_tim" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="perguruan_tinggi" class="form-label">Perguruan Tinggi</label>
                  <input type="text" class="form-control" id="judul_proposal" name="perguruan_tinggi" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="judul_proposal" class="form-label">Judul Propsosal Bisnis</label>
                  <input type="text" class="form-control" id="judul_proposal" name="judul_proposal" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="nama_ketua" class="form-label">Nama Lengkap Ketua TIM</label>
                  <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="nama_anggota1" class="form-label">Nama Lengkap Anggota 1</label>
                  <input type="text" class="form-control" id="nama_anggota1" name="nama_anggota1" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="nama_anggota2" class="form-label">Nama Lengkap Anggota 2</label>
                  <input type="text" class="form-control" id="nama_anggota2" name="nama_anggota2" aria-describedby="input-help">
                </div>
                <div class="mb-3">
                  <label for="no_wa_peserta" class="form-label">No WhatsApp</label>
                  <input type="text" class="form-control" id="no_wa_peserta" name="no_wa_peserta">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Upload File
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <div class="form-group">
                    <label for="file_ktm" class="form-label">Text</label>
                    <input type="file"
                    class="filepond file-ktm"
                    name="file_ktm"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="form-label" class="form-label">Upload Data Bioadata</label>
                    <input type="file"
                    class="filepond file-biodata"
                    name="file_biodata"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <ul class="list-term">
                <li>Silahkan cek kembali data anda sebelum klik tombol daftar</li>
                <li>Pastikan anda telah membaca buku panduan</li>
                <li>Setelah klik daftar, anda telah menyetujui syarat dan ketentuan yang berlaku</li>
              </ul>
            </div>
            <div class="col-lg-12 text-center">
              <button class="btn-register-submit" type="submit">
                Daftar
              </button>

        </div></form>
        </div>
      </div>
  </div>
</div>
@section("script")
<script src="./dist/filepond/filepond-plugin-file-encode.min.js"></script>
<script
  src="./dist/filepond/filepond-plugin-file-validate-size.min.js"></script>
<script
  src="./dist/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="./dist/filepond/filepond-plugin-image-preview.min.js"></script>
<script src="./dist/filepond/filepond.min.js"></script>
<script>
    const closeButton = document.querySelector(".close-form");
    const registerButton = document.querySelector("#show-form");
    const overlay = document.querySelector(".overlay");
    const body = document.querySelector("body");
    let isOpen = true;

    registerButton.addEventListener("click", () => {
      overlay.classList.remove("hidden")
      body.classList.add("no-scroll");
    });

    closeButton.addEventListener("click", () => {
      !overlay.classList.contains("hidden") ? overlay.classList.add("hidden") : overlay.classList.remove("hidden");
      body.classList.remove("no-scroll");
    });


    /*
  We want to preview images, so we need to register the Image Preview plugin
  */
  FilePond.registerPlugin(
          // FilePondPluginFileValidateType,
          // FilePondPluginFileValidateSize,
      // encodes the file as base64 data
      FilePondPluginFileEncode,

      // validates the size of the file
      FilePondPluginFileValidateSize,

      // corrects mobile image orientation
      FilePondPluginImageExifOrientation,

      // previews dropped images
      FilePondPluginImagePreview
    );

    var option = {
          maxFiles : 1,
          maxFileSize : '1MB',
          acceptedFileTypes : [],
          server: {
              url: '',
              process: {
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              },
              revert: null,
              restore: null,
              load: null,
              fetch: null
          }
      };

    // Select the file input and use create() to turn it into a pond
    FilePond.create(
      document.querySelector('.foto_peserta')
    , option);

    FilePond.create(
      document.querySelector(".ktp")
    , option);

    FilePond.create(
      document.querySelector(".surat_pernyataan")
    , option);

    FilePond.create(
      document.querySelector(".bukti_pembayaran")
    , option);

    FilePond.create(
      document.querySelector(".lampiran_guru")
    , option);

    FilePond.create(
      document.querySelector('.file-ktm')
    , option);

    FilePond.create(
      document.querySelector('.file-biodata')
    , option);

    FilePond.create(
      document.querySelector('.file-bmc')
    , option);

    FilePond.create(
      document.querySelector('.file-bukti-pembayaran')
    , option);

    FilePond.create(
      document.querySelector('.file-proposal')
    , option);
  </script>
@endsection
