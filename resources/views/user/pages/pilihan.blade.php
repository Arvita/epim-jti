@extends('auth.master')
@section('title', 'Pilih Lomba EPIM')
@section('customcss')
<link rel="stylesheet"
href="{{asset('dist/filepond/filepond-plugin-image-preview.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/filepond/filepond.min.css')}}">
<style>
    .empty-state-icon {
        background-color: transparent !important;
        width: 280px !important;
        /* height: 80px; */
        margin-bottom: 50px;
        line-height: 100px;
        border-radius: 5px;
    }

    body {
        /* background-color: #640700;; */
    }

    .form-title {
    font-size: 1.5rem;
    padding: 10px 0 30px;
}
.form-sub-title {
    font-size: 1.2rem;
}
.form-wrapper {
    padding: 10px 20px;
}
.filepond--root * {
    box-sizing: inherit;
    line-height: 1;
}

.btn-register-submit{
    background-color: #a30b00;
    margin: 30px 0;
    font-size: 12px;
    width: 100%;
    line-height: 24px;
    padding: .55rem 1.5rem;
    text-decoration: none;
    border-radius: .3rem;
    text-transform: uppercase;
    border: 2px solid #a30b00;
    color: #fff;
    cursor: pointer;
    font-weight: 700;
    -webkit-filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    transition: .3s opacity;
}

.btn-register-submit:hover{
    background-color: #a30b00ec
}
</style>
@endsection()
@section('content')
<div class="container full-height">
    <section class="section">
        <div class="section-header justify-content-center shadow-lg">
            <h1>Pilihan Lomba</h1>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="row justify-content-center">
                    @if (!preg_match('|@student.polije.ac.id$|', Auth::user()->email))
                    @if(Auth::user()->event != "tcp_it")
                    <div class="col-lg-6 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <img src="{{ asset('img/tcp.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <h2>Lomba Bisnis TIK</h2>
                                    <p class="lead">
                                        Lomba Bisnis TIK merupakan perlombaan atau kompetisi tingkat nasional pembuatan proposal business plan yang ditujukan kepada mahasiswa aktif yang terdaftar dalam program Diploma/S1.
                                    </p>
                                    <button id="modal-1" class="btn btn-primary btn-lg w-100 mt-4">Daftar</button>
                                    <a href="https://bit.ly/twibondanlampiran_BisnisTik2021" class="mt-4 bb" target="_blank">Download Lampiran Lomba Bisnis TIK</a>
                                    <a href="{{asset('buku_pedoman/BUKU PEDOMAN BISNIS TIK 2021.pdf')}}" class="mt-2 bb">Download Buku Panduan</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @if (!preg_match('|@student.polije.ac.id$|', Auth::user()->email))
                    @if(Auth::user()->event != "expo_it")
                    <div class="col-lg-6 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <img src="{{ asset('img/TN.png') }}" alt="lomba konfigurasi jaringan"
                                            class="img-fluid">
                                    </div>
                                    <h2>Lomba Konfigurasi Jaringan</h2>
                                    <p class="lead">
                                        Lomba Konfigurasi Jaringan adalah ajang perlombaan konfigurasi jaringan yang menggambarkan berbagai kegiatan yang berhubungan dengan membangun dan mempertahankan jaringan data.
                                    </p>
                                    <button id="modal-2"
                                        class="btn btn-primary btn-lg w-100 mt-4">Daftar</button>
                                        <a href="https://bit.ly/PedomanDanLampiranKonfigurasi2021" class="mt-4 bb">Download Lampiran Lomba Konfigurasi Jaringan</a>
                                    <a href="{{asset('buku_pedoman/PEDOMAN LOMBA KONFIGURASI JARINGAN EPIM 2021.pdf')}}" class="mt-2 bb">Download Buku Panduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @if (preg_match('|@student.polije.ac.id$|', Auth::user()->email))
                    @if(Auth::user()->event != "expo_it")
                    <div class="col-lg-6 col-sm-12">
                      <div class="card shadow-lg">
                          <div class="card-body">
                              <div class="empty-state">
                                  <div class="empty-state-icon">
                                      <img src="{{ asset('img/expo-ti.png') }}" alt="Expo Produk IT"
                                          class="img-fluid">
                                  </div>
                                  <h2>Expo Produk IT</h2>
                                  <p class="lead">
                                    Expo Produk IT adalah kegiatan pameran produk Mahasiswa Jurusan Teknologi Informasi Politeknik Negeri Jember. Kegiatan ini dilaksanakan dalam 2 konsep acara yaitu Online (daring) dan Offline (luring).
                                  </p>
                                  <button id="modal-3"
                                      class="btn btn-primary btn-lg w-100 mt-4">Daftar</button>
                                  <a href="{{asset('expo')}}" class="mt-4 bb">Lihat Panduan</a>
                              </div>
                          </div>
                      </div>
                  </div>
                    @endif
                    @endif

                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3" aria-modal="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"></h5> <button type="button" class="close" data-dismiss="modal"
                  aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
          <div class="modal-body">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <div class="form-logo mb-3">
                        <a href="#"><img src="{{asset('img/logoo.png')}}" alt="" height="70px"></a>
                        <a href="#"><img src="{{asset('img/logo_epim.png')}}" alt="" height="50px"></a>
                      </div>
                      <h1 class="form-title">
                        PENDAFTARAN EXPO PRODUK IT
                      </h1>
                    </div>
                    <form action="{{route('user.registrasi.lomba')}}" name="submit" class="form-pendaftaran col-12"  method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="col-lg-12">
                        <h2 class="form-sub-title">
                          Data TIM
                        </h2>
                        <hr>

                        <div class="form-wrapper">
                            <div class="mb-3">
                                <label for="nama_lengkap_peserta" class="form-label">Nama TIM
                                </label>
                                <input type="text" class="form-control @error('nama_tim_e') is-invalid @enderror" id="nama_lengkap_peserta" name="nama_tim_e" value="{{old('nama_tim_e')}}" placeholder="Contoh : Bro Dev." required>
                                @error('nama_tim_e')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Program Studi</label>
                                <select class="form-control" name="prodi_e" id="prodi_e">
                                    <option value="tif">Teknik Informatika</option>
                                    <option value="mif">Manajemen Informatika</option>
                                    <option value="tkk">Teknik Komputer</option>
                              </select>
                            </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Semester</label>
                                <select class="form-control" name="semester_e" id="semester_e">
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="8">8</option>
                              </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Ketua TIM
                                </label>
                                <input type="email" class="form-control @error('email_ketua_e') is-invalid @enderror" id="email" name="email_ketua_e" value="{{old('email_ketua_e')}}" placeholder="Contoh : e41234567@student.polije.ac.id" required>
                                  @error('email_ketua_e')
                                  <div class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_lengkap_peserta" class="form-label">Nama Ketua TIM
                                </label>
                                <input type="text" class="form-control @error('nama_ketua_e') is-invalid @enderror" id="nama_lengkap_peserta" name="nama_ketua_e" value="{{old('nama_ketua_e')}}" placeholder="Contoh : Gilang Pamungkas" required>
                                @error('nama_ketua_e')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_lengkap_peserta" class="form-label">Nomor WA Ketua TIM
                                </label>
                                <input type="number" class="form-control @error('nomor_ketua_e') is-invalid @enderror" id="nama_lengkap_peserta" name="nomor_ketua_e" value="{{old('nomor_ketua_e')}}" placeholder="Contoh : 082123456789"  required>
                                @error('nomor_ketua_e')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                              </div>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email Anggota TIM
                                  <small id="" class="form-text text-muted">Email anggota dipisahkan oleh koma (,)</small>
                            </label>
                                <input type="text" class="form-control @error('email_peserta_e') is-invalid @enderror" id="email" name="email_peserta_e" value="{{old('email_peserta_e')}}" placeholder="Contoh: e41299844@student.polije.ac.id, e41123434@student.polije.ac.id, e41233942@student.polije.ac.id" required>
                              @error('email_peserta_e')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label for="nama_lengkap_peserta" class="form-label">Nama Lengkap Anggota TIM
                                <small id="" class="form-text text-muted">Nama Lengkap Anggota TIM dipisahkan oleh koma (,)</small>
                            </label>
                            <input type="text" class="form-control @error('nama_peserta_e') is-invalid @enderror" id="nama_lengkap_peserta" name="nama_peserta_e" value="{{old('nama_peserta_e')}}" placeholder="Contoh: Muhammad Kevin, Ilham Saputra, Siti Aisyah" required>
                            @error('nama_peserta_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                          </div>

                          <div class="mb-3">
                              <label for="nis" class="form-label">Scan KTM / Surat Keterangan Aktif Kuliah (semua anggota TIM)
                                  <small id="" class="form-text text-muted">Scan di jadikan 1 file dengan format <b>.pdf</b></small>
                              </label>
                            <input type="file" multiple class="form-control @error('ktm_e') is-invalid @enderror" id="nis" name="ktm_e[]" value="{{old('ktm_e')}}" required>
                            <p>
                            </p>
                            @error('ktm_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="col-lg-12">
                        <h2 class="form-sub-title">
                          Data Produk
                        </h2>
                        <hr>
                        <div class="form-wrapper">
                          <div class="mb-3">
                            <label for="nama_lengkap_pendamping" class="form-label">Nama Produk / Judul Produk</label>
                            <input type="text" class="form-control @error('nama_produk_e') is-invalid @enderror" id="nama_lengkap_pendamping" name="nama_produk_e" value="{{old('nama_produk_e')}}" placeholder="Contoh : Sistem Informasi Tanam Padi" required>
                            @error('nama_produk_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Kategori Produk</label>
                            <select class="form-control" name="kategori_produk_e" id="kategori_produk_e">
                                <option value="dekstop">Desktop</option>
                                <option value="web">Website</option>
                                <option value="mobile">Mobile App</option>
                                <option value="iot">IOT & Jaringan</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_lengkap_pendamping" class="form-label">Deskripsi Produk</label>
                            <input type="text" class="form-control @error('deskripsi_produk_e') is-invalid @enderror" id="nama_lengkap_pendamping" name="deskripsi_produk_e" value="{{old('deskripsi_produk_e')}}" required>
                            @error('deskripsi_produk_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label for="nama_lengkap_pendamping" class="form-label">Manfaat atau Tujuan Produk
                                <small id="" class="form-text text-muted">Dipisahkan dengan koma ( , )</small>
                            </label>
                            <input type="text" class="form-control @error('manfaat_produk_e') is-invalid @enderror" id="nama_lengkap_pendamping" name="manfaat_produk_e" value="{{old('manfaat_produk_e')}}" placeholder="Contoh : Untuk memudahkan pekerjaan petani, Membantu perekonomian petani, Mensejahterakan petani padi" required>
                            @error('manfaat_produk_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                              <label for="poster_produk_e" class="form-label d-block">Poster / Pamflet Produk (Ukuran A4)
                                  <small id="poster_produk_e" class="form-text text-muted">File harus bertipe: .jpg .jpeg .png | Ukuran file maksimal: 2MB</small>
                              </label>
                              <input type="file"
                              class="filepond poster_produk_e"
                              name="poster_produk_e" required accept=".jpg,.jpeg,.png"/>
                              @error('poster_produk_e')
                              <small id="poster_produk_e" class="form-text text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                              <label for="foto_produk_e" class="form-label d-block">Screen Capture / Foto Produk *maksimal 5 foto
                                  <small id="foto_produk_e" class="form-text text-muted">File harus bertipe: .jpg, .png| Ukuran file maksimal: 300KB/foto</small>
                              </label>
                              <input type="file"
                              class="filepond foto_produk_e"
                              name="foto_produk_e[]" required accept=".jpg,.jpeg,.png" multiple/>
                              @error('foto_produk_e')
                              <small id="foto_produk_e" class="form-text text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">URL Video Demo Aplikasi (link embed youtube)</label>
                            <input type="text" class="form-control @error('url_video_e') is-invalid @enderror" id="" name="url_video_e" value="{{old('url_video_e')}}" required>
                            @error('url_video_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">URL Demo Aplikasi (*jika ada)</label>
                            <input type="text" class="form-control @error('url_aplikasi_e') is-invalid @enderror" id="" name="url_aplikasi_e" value="{{old('url_aplikasi_e')}}">
                            @error('url_aplikasi_e')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                          <div class="form-group">
                            <label for="twibbon_e" class="form-label d-block">Twibbon
                                <small id="twibbon_e" class="form-text text-muted">File harus bertipe: .jpg .jpeg .png| Ukuran file maksimal: 300KB</small>
                            </label>
                            <input type="file"
                            class="filepond twibbon_e"
                            name="twibbon_e[]"  multiple required accept=".jpg,.jpeg,.png"/>
                            @error('twibbon_e')
                            <small id="twibbon_e" class="form-text text-danger">{{ $message }}</small>
                            @enderror
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
                        <button class="btn-register-submit" type="submit" name="submit" value="expo_it">
                          Daftar
                        </button>
                      </div>
                     </form>
                  </div>
                </div></div>
      </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <div class="form-logo mb-3">
                          <a href="#"><img src="{{asset('img/logoo.png')}}" alt="" height="70px"></a>
                          <a href="#"><img src="{{asset('img/logo_epim.png')}}" alt="" height="50px"></a>
                        </div>
                        <h1 class="form-title">
                          PENDAFTARAN LOMBA KONFIGURASI JARINGAN
                        </h1>
                      </div>
                      <form action="{{route('user.registrasi.lomba')}}" name="submit" class="form-pendaftaran col-12"  method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="col-lg-12">
                          <h2 class="form-sub-title">
                            Data Diri
                          </h2>
                          <div class="form-wrapper">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email Peserta</label>
                              <input type="email" class="form-control @error('email_l') is-invalid @enderror" id="email" name="email_l" value="{{old('email_l')}}" required>
                                @error('email_l')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="nama_lengkap_peserta" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama_peserta_l') is-invalid @enderror" id="nama_lengkap_peserta" name="nama_peserta_l" value="{{old('nama_peserta_l')}}" required>
                              @error('nama_peserta_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                              <input type="text" class="form-control @error('asal_sekolah_l') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah_l" value="{{old('asal_sekolah_l')}}" required>
                              @error('asal_sekolah_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="nis" class="form-label">NIS</label>
                              <input type="text" class="form-control @error('nis_l') is-invalid @enderror" id="nis" name="nis_l" value="{{old('nis_l')}}" required>
                              @error('nis_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                              <input type="text" class="form-control @error('tempat_lahir_l') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir_l" value="{{old('tempat_lahir_l')}}" required>
                              @error('tempat_lahir_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                              <input type="date" class="form-control @error('tanggal_lahir_l') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir_l" value="{{old('tanggal_lahir_l')}}" required>
                              @error('tanggal_lahir_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="tempat_lahir" class="form-label">Jenis Kelamin</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin_l"  value="laki-laki" id="jk_laki" checked>
                                <label class="form-check-label" for="jk_laki">
                                  Laki-Laki
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin_l"  value="perempuan" id="jk_perempuan" >
                                <label class="form-check-label" for="jk_perempuan">
                                  Perempuan
                                </label>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label for="usia" class="form-label">Usia</label>
                              <input type="text" class="form-control @error('usia_l') is-invalid @enderror" id="usia" name="usia_l" value="{{old('usia_l')}}" required>
                                @error('usia_l')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="no_wa_peserta" class="form-label">No WhatsApp</label>
                              <input type="text" class="form-control @error('no_wa_peserta_l') is-invalid @enderror" id="no_wa_peserta" name="no_wa_peserta_l" value="{{old('no_wa_peserta_l')}}" required>
                              @error('no_wa_peserta_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
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
                              <input type="text" class="form-control @error('nama_pendamping_l') is-invalid @enderror" id="nama_lengkap_pendamping" name="nama_pendamping_l" value="{{old('nama_pendamping_l')}}" required>
                              @error('nama_pendamping_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="nip" class="form-label">NIP</label>
                              <input type="text" class="form-control @error('nip_l') is-invalid @enderror" id="nip" name="nip_l" value="{{old('nip_l')}}" required>
                              @error('nip_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <label for="no_wa_pendamping" class="form-label">No WhatsApp</label>
                              <input type="text" class="form-control @error('no_wa_pendamping_l') is-invalid @enderror" id="no_wa_pendamping" name="no_wa_pendamping_l" value="{{old('no_wa_pendamping_l')}}" required>
                              @error('no_wa_pendamping_l')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
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
                                <label for="foto_peserta" class="form-label d-block">Upload Foto Peserta *3x4
                                    <small id="foto_peserta" class="form-text text-muted">File harus bertipe: .jpg, .png| Ukuran file maksimal: 300KB</small>
                                </label>
                                <input type="file"
                                class="filepond foto_peserta"
                                name="foto_peserta_l" required accept=".jpg,.jpeg,.png"/>
                                @error('foto_peserta_l')
                                <small id="foto_peserta_l" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="ktp" class="form-label d-block">Kartu Tanda Pelajar
                                    <small id="ktp" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 300KB</small>
                                </label>
                                <input type="file"
                                class="filepond ktp"
                                name="kartu_pelajar_l" required accept=".pdf"/>
                                @error('kartu_pelajar_l')
                                <small id="kartu_pelajar_l" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="surat_pernyataan" class="form-label d-block">Scan Surat Pernyataan
                                    <small id="surat_pernyataan" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 1MB</small>
                                </label>
                                <input type="file"
                                class="filepond surat_pernyataan"
                                name="surat_pernyataan_l" required accept=".pdf"/>
                                @error('surat_pernyataan_l')
                                <small id="surat_pernyataan_l" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="bukti_pembayaran" class="form-label d-block">Scan Bukti Pembayaran
                                    <small id="bukti_pembayaran" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 1MB</small>
                                </label>
                                <input type="file"
                                class="filepond bukti_pembayaran"
                                name="bukti_pembayaran_l" required accept=".pdf"/>
                                @error('bukti_pembayaran_l')
                                <small id="bukti_pembayaran_l" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="lampiran_guru" class="form-label d-block">File Lampiran Guru Pendamping
                                    <small id="lampiran_guru" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 1MB</small>
                                </label>
                                <input type="file"
                                class="filepond lampiran_guru"
                                name="lampiran_guru_l" required accept=".pdf"/>
                                @error('lampiran_guru_l')
                                <small id="lampiran_guru_l" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="lampiran_guru" class="form-label d-block">Twibbon
                                    <small id="lampiran_guru" class="form-text text-muted">File harus bertipe: .png| Ukuran file maksimal: 1MB</small>
                                </label>
                                <input type="file"
                                class="filepond lampiran_guru"
                                name="twibbon_l" required accept=".jpg,.jpeg,.png"/>
                                @error('twibbon_l')
                                <small id="twibbon_l" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
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
                          <button class="btn-register-submit" type="submit" name="submit" value="lomba_it">
                            Daftar
                          </button>
                        </div>
                       </form>
                    </div>
                  </div></div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <div class="form-logo">
                          <a href="#"><img src="http://jti.polije.ac.id/epim/assets/logoo.png" alt="" width="50px"></a>
                          <a href="#"><img src="{{asset('img/logo_epim.png')}}" alt="" height="50px"></a>
                        </div>
                        <h1 class="form-title">
                          PENDAFTARAN LOMBA BISNIS TIK
                        </h1>
                      </div>
                      <form action="{{route('user.registrasi.lomba')}}" class="form-pendaftaran col-12"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <h2 class="form-sub-title">
                              Data TIM
                            </h2>
                            <div class="form-wrapper">
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email_t') is-invalid @enderror" id="email" value="{{old('email_t')}}" name="email_t" aria-describedby="input-help" required>
                                @error('email_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_tim" class="form-label">Nama TIM</label>
                                <input type="text" class="form-control @error('nama_tim_t') is-invalid @enderror" id="nama_tim" value="{{old('nama_tim_t')}}" name="nama_tim_t" aria-describedby="input-help" required>
                                @error('nama_tim_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="perguruan_tinggi" class="form-label">Perguruan Tinggi</label>
                                <input type="text" class="form-control @error('perguruan_tinggi_t') is-invalid @enderror" id="perguruan_tinggi" value="{{old('perguruan_tinggi_t')}}" name="perguruan_tinggi_t" aria-describedby="input-help" required>
                                @error('perguruan_tinggi_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="judul_proposal" class="form-label">Judul Propsosal Bisnis</label>
                                <input type="text" class="form-control @error('judul_proposal_t') is-invalid @enderror" id="judul_proposal" value="{{old('judul_proposal_t')}}" name="judul_proposal_t" aria-describedby="input-help" required>
                                @error('judul_proposal_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_ketua" class="form-label">Nama Lengkap Ketua TIM</label>
                                <input type="text" class="form-control @error('nama_ketua_t') is-invalid @enderror" id="nama_ketua" value="{{old('nama_ketua_t')}}" name="nama_ketua_t" aria-describedby="input-help" required>
                                @error('nama_ketua_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_anggota1" class="form-label">Nama Lengkap Anggota 1</label>
                                <input type="text" class="form-control @error('nama_anggota1_t') is-invalid @enderror" id="nama_anggota1" value="{{old('nama_anggota1_t')}}" name="nama_anggota1_t" aria-describedby="input-help" required>
                                @error('nama_anggota1_t')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <label for="nama_anggota2" class="form-label">Nama Lengkap Anggota 2</label>
                                <input type="text" class="form-control @error('nama_anggota2_t') is-invalid @enderror" id="nama_anggota2" value="{{old('nama_anggota2_t')}}" name="nama_anggota2_t" aria-describedby="input-help">
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
                                  <label for="file_ktm" class="form-label d-block">Upload KTM
                                      <small id="biodata_t" class="form-text text-muted">File harus bertipe: .jpg, .png| Ukuran file maksimal: 5MB</small>
                                  </label>

                                  <input type="file"
                                  class="filepond file-ktm"
                                  name="ktm_t[]" multiple required accept=".jpg,.jpeg,.png"/>
                                </div>
                                @error('ktm_t')
                                <small id="ktm_t" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="file_ktm" class="form-label d-block">Upload Bukti Pembayaran
                                      <small class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 1MB</small>
                                  </label>

                                  <input type="file"
                                  class="filepond bukti_pembayaran"
                                  name="bukti_pembayaran_t" required accept=".pdf"/>
                                </div>
                                @error('bukti_pembayaran_t')
                                <small id="bukti_pembayaran_t" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="biodata" class="form-label d-block">Upload Biodata
                                      <small id="biodata_t" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 1MB</small>
                                  </label>
                                  <input type="file"
                                  class="filepond file-biodata"
                                  name="biodata_t" required accept=".pdf"/>
                                  @error('biodata_t')
                                  <small id="biodata_t" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                              </div>
                              </div>
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="file-proposal" class="form-label d-block">Upload Proposal
                                      <small id="biodata_t" class="form-text text-muted">File harus bertipe: .pdf| Ukuran file maksimal: 10MB</small>
                                  </label>
                                  <input type="file"
                                  class="filepond"
                                  name="proposal_t" required accept=".pdf"/>
                                  @error('proposal_t')
                                  <small id="proposal_t" class="form-text text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="form-group">
                                  <label for="lampiran_guru" class="form-label d-block">Twibbon
                                      <small id="lampiran_guru" class="form-text text-muted">File harus bertipe: .png| Ukuran file maksimal: 1MB</small>
                                  </label>
                                  <input type="file"
                                  class="filepond lampiran_guru" multiple
                                  name="twibbon_t[]" required accept=".jpg,.jpeg,.png"/>
                                  @error('twibbon_t')
                                  <small id="twibbon_t" class="form-text text-danger">{{ $message }}</small>
                                    @enderror
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
                              <button class="btn-register-submit" name="submit" type="submit" value="tcp_it">
                                Daftar
                              </button>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection()
@section('customjs')
<script src="{{ asset('backend/modules/prism/prism.js') }}"></script>
<script src="{{ asset('backend/js/page/bootstrap-modal.js') }}"></script>

@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
        if('{{old('submit')}}' === 'lomba_it'){
            $('#fire-modal-2').modal('show');
        }

        if('{{old('submit')}}' === 'tcp_it'){
            $('#fire-modal-1').modal('show');
        }

        if('{{old('submit')}}' === 'expo_it'){
            $('#fire-modal-3').modal('show');
        }

    });
</script>
@endif
<script>
    $(document).ready(function () {

        $("#prodi_e").change(function (e) {
            if($("#prodi_e").val() != "tif"){
                $(".tif-option").remove();
            }else{
                $("#semester_e").append(`
                <option class="tif-option" value="7">7</option>
                <option class="tif-option" value="8">8</option>
                `);
            }
        });
    });
</script>
@endsection
