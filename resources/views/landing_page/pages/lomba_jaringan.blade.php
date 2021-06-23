@extends("landing_page.layouts.master")

@section("content")
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
              <a href="#"><img src="{{asset('img/logoo.png')}}" alt=""></a>
              <p class="d-inline">LOMBA IT 2021</p>
            </div>
            <h1 class="form-title">
              PENDAFTARAN LOMBA IT
            </h1>
          </div>
          <form action="#" class="form-pendaftaran" method="POST">
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Data Diri
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <label for="email" class="form-label">Email Peserta</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                  <label for="nama_lengkap_peserta" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap_peserta" name="nama_lengkap_peserta">
                </div>
                <div class="mb-3">
                  <label for="nis" class="form-label">NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis">
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir" class="form-label">Jenis Kelamin</label>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <div class="mb-2 radio-button-wrapper">
                      <input type="radio" name="jenis_kelamin" id="jk_laki">
                      <label class="form-label radio-button" for="jk_laki">Laki-Laki</label>
                    </div>
                    <div class="mb-2 radio-button-wrapper">
                      <input type="radio" name="jenis_kelamin" id="jk_perempuan">
                      <label class="form-label radio-button" for="jk_perempuan">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="usia" class="form-label">Usia</label>
                  <input type="text" class="form-control" id="usia" name="usia">
                </div>
                <div class="mb-3">
                  <label for="no_wa_peserta" class="form-label">No WhatsApp</label>
                  <input type="text" class="form-control" id="no_wa_peserta" name="no_wa_peserta">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Data Pendamping
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <label for="nama_lengkap_pendamping" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap_pendamping" name="nama_lengkap_pendamping">
                </div>
                <div class="mb-3">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip">
                </div>
                <div class="mb-3">
                  <label for="no_wa_pendamping" class="form-label">No WhatsApp</label>
                  <input type="text" class="form-control" id="no_wa_pendamping" name="no_wa_pendamping">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Lampiran
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <div class="form-group">
                    <label for="foto_peserta" class="form-label">Upload Foto Peserta *3x4</label>
                    <input type="file"
                    class="filepond foto_peserta"
                    name="foto_peserta"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="KTP" class="form-label">Kartu Tanda Pelajar</label>
                    <input type="file"
                    class="filepond ktp"
                    name="KTP"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="surat_pernyataan" class="form-label">Scan Surat Pernyataan</label>
                    <input type="file"
                    class="filepond surat_pernyataan"
                    name="surat_pernyataan"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="bukti_pembayaran" class="form-label">Scan Bukti Pembayaran</label>
                    <input type="file"
                    class="filepond bukti_pembayaran"
                    name="bukti_pembayaran"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="lampiran_guru" class="form-label">File Lampiran Guru Pendamping</label>
                    <input type="file"
                    class="filepond lampiran_guru"
                    name="lampiran_guru"/>
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
        </div>
      </form>
        </div>
      </div>
  </div>

</div>
<section id="detail-page-hero">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12 col-sm-12 text-center" data-aos="zoom-in-up">
          <img src="{{asset('img/TN.png')}}" alt="maskot-epim" class="img-detail-page-hero" />
        </div>
        <div class="detail-page-hero-section col-lg-12 col-sm-12" data-aos="zoom-in">
          <p class="detail-page-hero-desc">
            ? - ? September 2021
          </p>
          <h1 class="detail-page-hero-title">
            LOMBA IT 2021
          </h1>
          <p class="detail-page-hero-info"> Optimalisasi Peran Generasi Milenial untuk Menciptakan Inovasi Teknologi Kreatif, Kompetitif, dan Realistis Menuju Infonesia Emas 2045</p>
        </div>
        <div class="col-lg-4 col-sm-12 detail-page-hero-btn-wrapper" data-aos="zoom-in-up">
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
                      Pendaftaran Gelombang 1
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Panduan Seleksi Online
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                      Seleksi Online Jaringan
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Pengumuman Finalis
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-left" data-aos="fade-left">
                    <div class="box-round-title">
                      Technical Meeting
                    </div>
                    <div class="box-round-desc">
                      13 -17 September 2021
                    </div>
                  </div>
                  <div class="box-round box-timeline-kegiatan box-right" data-aos="fade-right">
                    <div class="box-round-title">
                      Final Lomba
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
              <p class="d-inline">LOMBA IT 2021</p>
            </div>
            <h1 class="form-title">
              PENDAFTARAN LOMBA IT
            </h1>
          </div>
          <form action="#" class="form-pendaftaran" method="POST">
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Data Diri
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <label for="email" class="form-label">Email Peserta</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                  <label for="nama_lengkap_peserta" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap_peserta" name="nama_lengkap_peserta">
                </div>
                <div class="mb-3">
                  <label for="nis" class="form-label">NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis">
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="mb-3">
                  <label for="tempat_lahir" class="form-label">Jenis Kelamin</label>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <div class="mb-2 radio-button-wrapper">
                      <input type="radio" name="jenis_kelamin" id="jk_laki">
                      <label class="form-label radio-button" for="jk_laki">Laki-Laki</label>
                    </div>
                    <div class="mb-2 radio-button-wrapper">
                      <input type="radio" name="jenis_kelamin" id="jk_perempuan">
                      <label class="form-label radio-button" for="jk_perempuan">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="usia" class="form-label">Usia</label>
                  <input type="text" class="form-control" id="usia" name="usia">
                </div>
                <div class="mb-3">
                  <label for="no_wa_peserta" class="form-label">No WhatsApp</label>
                  <input type="text" class="form-control" id="no_wa_peserta" name="no_wa_peserta">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Data Pendamping
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <label for="nama_lengkap_pendamping" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap_pendamping" name="nama_lengkap_pendamping">
                </div>
                <div class="mb-3">
                  <label for="nip" class="form-label">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip">
                </div>
                <div class="mb-3">
                  <label for="no_wa_pendamping" class="form-label">No WhatsApp</label>
                  <input type="text" class="form-control" id="no_wa_pendamping" name="no_wa_pendamping">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h2 class="form-sub-title">
                Lampiran
              </h2>
              <div class="form-wrapper">
                <div class="mb-3">
                  <div class="form-group">
                    <label for="foto_peserta" class="form-label">Upload Foto Peserta *3x4</label>
                    <input type="file"
                    class="filepond foto_peserta"
                    name="foto_peserta"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="KTP" class="form-label">Kartu Tanda Pelajar</label>
                    <input type="file"
                    class="filepond ktp"
                    name="KTP"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="surat_pernyataan" class="form-label">Scan Surat Pernyataan</label>
                    <input type="file"
                    class="filepond surat_pernyataan"
                    name="surat_pernyataan"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="bukti_pembayaran" class="form-label">Scan Bukti Pembayaran</label>
                    <input type="file"
                    class="filepond bukti_pembayaran"
                    name="bukti_pembayaran"/>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-group">
                    <label for="lampiran_guru" class="form-label">File Lampiran Guru Pendamping</label>
                    <input type="file"
                    class="filepond lampiran_guru"
                    name="lampiran_guru"/>
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
            </div>
            </form>
        </div>
      </div>
  </div>

</div>
  @endsection
