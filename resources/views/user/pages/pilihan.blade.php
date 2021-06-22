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
                                    <a href="{{route('lomba_it')}}" class="mt-4 bb">Lihat Panduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                          <p class="d-inline">LOMBA IT 2021</p>
                        </div>
                        <h1 class="form-title">
                          PENDAFTARAN LOMBA IT
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
                              <input type="email" class="form-control @error('email_l') is-invalid @enderror" id="email" name="email_l" value="{{old('email_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="nama_lengkap_peserta" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama_peserta_l') is-invalid @enderror" id="nama_lengkap_peserta" name="nama_peserta_l" value="{{old('nama_peserta_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="nis" class="form-label">NIS</label>
                              <input type="text" class="form-control @error('nis_l') is-invalid @enderror" id="nis" name="nis_l" value="{{old('nis_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                              <input type="text" class="form-control @error('tempat_lahir_l') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir_l" value="{{old('tempat_lahir_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                              <input type="date" class="form-control @error('tanggal_lahir_l') is-invalid @enderror" id="tempat_lahir" name="tanggal_lahir_l" value="{{old('tanggal_lahir_l')}}">
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
                              <input type="text" class="form-control @error('usia_l') is-invalid @enderror" id="usia" name="usia_l" value="{{old('usia_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="no_wa_peserta" class="form-label">No WhatsApp</label>
                              <input type="text" class="form-control @error('no_wa_peserta_l') is-invalid @enderror" id="no_wa_peserta" name="no_wa_peserta_l" value="{{old('no_wa_peserta_l')}}">
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
                              <input type="text" class="form-control @error('nama_pendamping_l') is-invalid @enderror" id="nama_lengkap_pendamping" name="nama_pendamping_l" value="{{old('nama_pendamping_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="nip" class="form-label">NIP</label>
                              <input type="text" class="form-control @error('nip_l') is-invalid @enderror" id="nip" name="nip_l" value="{{old('nip_l')}}">
                            </div>
                            <div class="mb-3">
                              <label for="no_wa_pendamping" class="form-label">No WhatsApp</label>
                              <input type="text" class="form-control @error('no_wa_pendamping_l') is-invalid @enderror" id="no_wa_pendamping" name="no_wa_pendamping_l" value="{{old('no_wa_pendamping_l')}}">
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
                                name="foto_peserta_l"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="ktp" class="form-label">Kartu Tanda Pelajar</label>
                                <input type="file"
                                class="filepond ktp"
                                name="kartu_pelajar_l"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="surat_pernyataan" class="form-label">Scan Surat Pernyataan</label>
                                <input type="file"
                                class="filepond surat_pernyataan"
                                name="surat_pernyataan_l"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="bukti_pembayaran" class="form-label">Scan Bukti Pembayaran</label>
                                <input type="file"
                                class="filepond bukti_pembayaran"
                                name="bukti_pembayaran_l"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="lampiran_guru" class="form-label">File Lampiran Guru Pendamping</label>
                                <input type="file"
                                class="filepond lampiran_guru"
                                name="lampiran_guru_l"/>
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
                              <input type="email" class="form-control @error('email_t') is-invalid @enderror" id="email" name="email_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="nama_tim" class="form-label">Nama TIM</label>
                              <input type="text" class="form-control @error('nama_tim_t') is-invalid @enderror" id="nama_tim" name="nama_tim_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="perguruan_tinggi" class="form-label">Perguruan Tinggi</label>
                              <input type="text" class="form-control @error('perguruan_tinggi_t') is-invalid @enderror" id="perguruan_tinggi" name="perguruan_tinggi_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="judul_proposal" class="form-label">Judul Propsosal Bisnis</label>
                              <input type="text" class="form-control @error('judul_proposal_t') is-invalid @enderror" id="judul_proposal" name="judul_proposal_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="nama_ketua" class="form-label">Nama Lengkap Ketua TIM</label>
                              <input type="text" class="form-control @error('nama_ketua_t') is-invalid @enderror" id="nama_ketua" name="nama_ketua_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="nama_anggota1" class="form-label">Nama Lengkap Anggota 1</label>
                              <input type="text" class="form-control @error('nama_anggota1_t') is-invalid @enderror" id="nama_anggota1" name="nama_anggota1_t" aria-describedby="input-help">
                            </div>
                            <div class="mb-3">
                              <label for="nama_anggota2" class="form-label">Nama Lengkap Anggota 2</label>
                              <input type="text" class="form-control @error('nama_anggota2_t') is-invalid @enderror" id="nama_anggota2" name="nama_anggota2_t" aria-describedby="input-help">
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
                                name="ktm_t"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="biodata" class="form-label">Upload Bioadata</label>
                                <input type="file"
                                class="filepond file-biodata"
                                name="biodata_t"/>
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="file-proposal" class="form-label">Upload Proposal</label>
                                <input type="file"
                                class="filepond"
                                name="proposal_t"/>
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
<script src="{{asset('dist/filepond/filepond-plugin-file-encode.min.js')}}"></script>
<script
  src="{{asset('dist/filepond/filepond-plugin-file-validate-size.min.js')}}"></script>
<script
  src="{{asset('dist/filepond/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{asset('dist/filepond/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('dist/filepond/filepond.min.js')}}"></script>
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
        if('{{old('submit')}}' === 'lomba_it'){
            $('#fire-modal-1').modal('show');
        }

        if('{{old('submit')}}' === 'tcp_it'){
            $('#fire-modal-2').modal('show');
        }
    });
</script>
@endif
<script>

    // FilePond.registerPlugin(
    //     // FilePondPluginFileValidateType,
    //     // FilePondPluginFileValidateSize,
    // // encodes the file as base64 data
    // FilePondPluginFileEncode,

    // // validates the size of the file
    // FilePondPluginFileValidateSize,

    // // corrects mobile image orientation
    // FilePondPluginImageExifOrientation,

    // // previews dropped images
    // FilePondPluginImagePreview
    // );

    // var option = {
    //     maxFiles : 1,
    //     // maxFileSize : '1MB',
    //     // acceptedFileTypes : [],
    //     // server: '{{route('user.registrasi.lomba')}}',
    //     method: 'POST',
    //     // headers: {
    //     //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     // },
    //     // revert: null,
    //     // restore: null,
    //     // load: null,
    //     // fetch: null
    //     server: {
    //         url: '{{route('user.registrasi.lomba')}}',
    //         process: {
    //             headers: {
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             }
    //         }
    //     }
    // };

    // FilePond.setOptions({
    //     server: {
    //         url: '{{route('user.registrasi.lomba')}}',
    //         process: {
    //             headers: {
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             }
    //         }
    //     }
    //       });

    //       const inputElement = document.querySelector('input[name="file_proposal_tcp"]');
    //       const pond = FilePond.create( inputElement);

    // Select the file input and use create() to turn it into a pond
    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);


    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

    // FilePond.create(
    // document.querySelector("input[type='file']")
    // , option);

</script>
@endsection
