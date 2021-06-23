@extends('user.layouts.master')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header justify-content-between">
            <h1>List Proposal</h1>
            <button class="btn btn-primary">Tambah Proposal</button>
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
                          @foreach ($proposal as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->judul_proposal }}</td>
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->perguruan_tinggi }}</td>
                            <td class="align-middle">
                                <div class="badge badge-danger">Belum Terverifikasi</div>
                            </td>
                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advanced Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                            <th class="text-center">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            </td>
                            <td>2018-01-20</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                <div class="progress-bar" data-width="0"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                              <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                              <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                            </td>
                            <td>2018-04-10</td>
                            <td><div class="badge badge-info">Todo</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                <div class="progress-bar bg-warning" data-width="70%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                            </td>
                            <td>2018-01-29</td>
                            <td><div class="badge badge-warning">In Progress</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                              <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                            </td>
                            <td>2018-01-16</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
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
