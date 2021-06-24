@extends('user.layouts.master')
@section('customcss')
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
    <script>
        $(document).ready(function() {
            $("#modal-1").fireModal('#fire-tambah');


        })

    </script>
@endsection
