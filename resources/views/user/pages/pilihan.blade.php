@extends('auth.master')
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
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4>Lomba 1</h4>
                            </div>
                            <div class="card-body">
                                <div class="empty-state" data-height="400">
                                    <div class="empty-state-icon">
                                        <img src="{{ asset('img/tcp.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <h2>Lomba Bisnis TIK</h2>
                                    <p class="lead">
                                        Sorry we can't find any data, to get rid of this message, make at least 1 entry.
                                    </p>
                                    <button id="modal-1" class="btn btn-primary btn-lg w-100 mt-4">Daftar</button>
                                    <a href="{{route('lomba_it')}}" class="mt-4 bb">Lihat Panduan</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <h4>Lomba 2</h4>
                            </div>
                            <div class="card-body">
                                <div class="empty-state" data-height="400">
                                    <div class="empty-state-icon">
                                        <img src="{{ asset('img/TN.png') }}" alt="lomba konfigurasi jaringan"
                                            class="img-fluid">
                                    </div>
                                    <h2>Lomba Konfigurasi Jaringan</h2>
                                    <p class="lead">
                                        We tried it, but failed when requesting data to the server, sorry. (Code: <a
                                            class="bb">14045</a>)
                                    </p>
                                    <button id="modal-2"
                                        class="btn btn-warning btn-lg w-100 mt-4">Daftar</button>
                                    <a href="{{route('tcp_it')}}" class="mt-4 bb">Lihat Panduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">#</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <div class="form-logo">
                          <a href="#"><img src="http://jti.polije.ac.id/epim/assets/logoo.png" alt="" width="50px"></a>
                          <p class="d-inline">LOMBA IT 2021</p>
                        </div>
                        <h1 class="form-title">
                          PENDAFTARAN LOMBA IT
                        </h1>
                      </div>
                      <form action="{{route('admin.registrasi.lomba')}}" name="submit" class="form-pendaftaran col-12"  method="POST">
                          @csrf
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
                  </div></div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">#</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <div class="form-logo">
                          <a href="#"><img src="http://jti.polije.ac.id/epim/assets/logoo.png" alt="" width="50px"></a>
                          <p class="d-inline">EPIM 2021</p>
                        </div>
                        <h1 class="form-title">
                          PENDAFTARAN LOMBA TCP IT
                        </h1>
                      </div>
                      <form action="{{route('admin.registrasi.bisnis')}}" class="form-pendaftaran col-12"  method="POST">
                        @csrf
                        <div class="col-lg-12">
                          <h2 class="form-sub-title">
                            Data TIM
                          </h2>
                          <div class="form-wrapper">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="nama_tim" class="form-label">Nama TIM</label>
                              <input type="text" class="form-control" id="nama_tim" name="nama_tim" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="perguruan_tinggi" class="form-label">Perguruan Tinggi</label>
                              <input type="text" class="form-control" id="perguruan_tinggi" name="perguruan_tinggi" aria-describedby="input-help">
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
                          </div>

                        </div>
                        <div class="col-lg-12">
                          <h2 class="form-sub-title">
                            Lampiran
                          </h2>
                          <div class="form-wrapper">
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="file_ktm" class="form-label">Upload KTM</label>
                                <input type="file"
                                class="filepond file-ktm"
                                name="file_ktm"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="file_biodata" class="form-label">Upload Bioadata</label>
                                <input type="file"
                                class="filepond file-biodata"
                                name="file_biodata"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="file-proposal" class="form-label">Upload Proposal</label>
                                <input type="file"
                                class="filepond file-proposal"
                                name="file-proposal"/>
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
                          <button class="btn-register-submit" name="submit" type="submit">
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
<script src="{{asset('dist/filepond/filepond-plugin-file-encode.min.js')}}"></script>
<script
  src="{{asset('dist/filepond/filepond-plugin-file-validate-size.min.js')}}"></script>
<script
  src="{{asset('dist/filepond/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{asset('dist/filepond/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('dist/filepond/filepond.min.js')}}"></script>
<script>
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
    document.querySelector('.file-bukti-pembayaran')
    , option);

    FilePond.create(
    document.querySelector('.file-proposal')
    , option);

</script>
@endsection
