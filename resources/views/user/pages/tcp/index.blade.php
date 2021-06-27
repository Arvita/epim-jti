@extends('user.layouts.master')
@section('customcss')
<link rel="stylesheet" href="{{asset('dist/dropzone/dropzone.min.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<style>
    .empty-state-icon {
        background-color: transparent !important;
        width: 280px !important;
        /* height: 80px; */
        margin-bottom: 50px;
        line-height: 100px;
        border-radius: 5px;
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
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header justify-content-between">
            <h1>List Proposal</h1>
            <button class="btn btn-primary" id="modal-1">Tambah Proposal</button>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Judul</th>
                            <th>Nama TIM</th>
                            <th>Perguruan Tinggi</th>
                            <th>Proposal</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($proposal as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->judul_proposal }}</td>
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->perguruan_tinggi }}</td>
                            <td><a href="{{ asset('upload/'.$item->proposal) }}">Proposal</a></td>
                            <td class="align-middle">
                                @if ($item->status == 'verified')
                                    <div class="badge badge-success">{{ Str::title($item->status) }}</div>
                                @else
                                    <div class="badge badge-danger">{{  Str::title($item->status) }}</div>
                                @endif
                            </td>
                        </tr>
                          @empty
                          <tr>
                              <td colspan="5" class="text-center">Tidak Ada data proposal</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
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
                    <h5 class="modal-title"></h5> <button type="button" class="close" data-dismiss="modal"
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
                          <form action="{{route('user.proposal.tambah')}}" class="form-pendaftaran col-12"  method="POST" enctype="multipart/form-data">
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
                                      <label for="file_ktm" class="form-label">Upload KTM
                                          <small class="form-text text-muted">File harus bertipe: .jpg, .png| Ukuran file minimal: 5MB</small>
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
                                      <label for="file_ktm" class="form-label">Upload Bukti Pembayaran
                                          <small class="form-text text-muted">File harus bertipe: .pdf| Ukuran file minimal: 1MB</small>
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
                                      <label for="biodata" class="form-label">Upload Biodata
                                          <small class="form-text text-muted">File harus bertipe: .pdf| Ukuran file minimal: 1MB</small>
                                      </label>
                                      <input type="file"
                                      class="filepond file-biodata"
                                      name="biodata_t" required accept=".pdf"/>
                                      @error('biodata_t')
                                      <small class="form-text text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                                  </div>
                                  <div class="mb-3">
                                    <div class="form-group">
                                      <label for="file-proposal" class="form-label">Upload Proposal
                                          <small class="form-text text-muted">File harus bertipe: .pdf| Ukuran file minimal: 20MB</small>
                                      </label>
                                      <input type="file"
                                      class="filepond"
                                      name="proposal_t" required accept=".pdf"/>
                                      @error('proposal_t')
                                      <small id="proposal_t" class="form-text text-danger">{{ $message }}</small>
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
                                    Tambah Proposal
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
    <script src="{{asset('dist/dropzone/dropzone.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
        })

    </script> --}}
    @if (count($errors) > 0)
        <script>
        $('#fire-modal-1').modal('show');
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $("#modal-1").fireModal('');
        })

    </script>
@endsection
