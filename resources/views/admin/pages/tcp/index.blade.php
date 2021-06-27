{{-- {{ $data_lomba }}
{{ $data_admin }}
{{ $data_peserta }}
{{ count($data_peserta) }} --}}

@extends('admin.layouts.master')

@section('title', 'Dashboard Admin EPIM')
@section('content')
<!-- Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Lomba Konfigurasi Jaringan</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Peserta</h4>
                            </div>
                            <div class="card-body">
                                {{ count($data_peserta) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Lolos</h4>
                            </div>
                            <div class="card-body">
                                {{ count($data_verified) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Tidak Lolos</h4>
                            </div>
                            <div class="card-body">
                                {{ count($data_not_verified) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Belum Terseleksi</h4>
                            </div>
                            <div class="card-body">
                                {{count($data_pending)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <th>Email</th>
                            <th>Nama Tim</th>
                            <th>Perguruan Tinggi</th>
                            <th>Judul Proposal</th>
                            <th>Nama Ketua</th>
                            <th>KTM</th>
                            <th>Bukti Pembayaran</th>
                            <th>Proposal</th>
                            <th>Biodata</th>
                            <th>Twibbon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($data_lomba as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->perguruan_tinggi }}</td>
                            <td>{{ $item->judul_proposal }}</td>
                            <td>{{ $item->nama_ketua }}</td>                            
                            <td>
                                @foreach (json_decode($item->ktm) as $ktm)                                    
                                    <a  target="_blank" href="{{ asset('upload/'.$ktm) }}">KTM{{$loop->iteration}}</a>
                                @endforeach
                            </td>
                            <td><a  target="_blank" href="{{ asset('upload/'.$item->bukti_pembayaran) }}">Bukti Pembayaran</a></td>
                            <td><a  target="_blank" href="{{ asset('upload/'.$item->proposal) }}">Proposal</a></td>
                            <td><a  target="_blank" href="{{ asset('upload/'.$item->biodata) }}">Biodata</a></td>
                            <td><a  target="_blank" href="{{ asset('upload/'.$item->twibbon) }}">Twibbon</a></td>
                            <td class="align-middle">
                                @if ($item->status == 'verified')
                                    <div class="badge badge-success">Lolos</div>
                                @elseif ($item->status == 'not verified')
                                    <div class="badge badge-danger">Tidak Lolos</div>
                                @else
                                    <div class="badge badge-warning">Belum Diseleksi</div>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-warning" onclick="openModal('{{$item->status}}', {{$item->id}})"><i class="fa fa-edit"></i></button>
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
    </section>
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Status</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                  <div class="row">
                      <form action="{{route('admin.tcp_it.update')}}" method="POST">
                        @csrf
                      <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status" id="status">
                                </select>
                                <input type="hidden" id="id" name="id" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                  </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customjs')
    <script>
             function openModal(status, id){
                let html = ''
                if(status == 'verified'){
                    html = `
                    <option value="verified" selected>Lolos</option>
                    <option value="not verified">Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
                }else if(status == 'not verified'){
                    html = `
                    <option value="verified">Lolos</option>
                    <option value="not verified" selected>Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
                }else{
                    html = `
                    <option value="verified">Lolos</option>
                    <option value="not verified">Tidak Lolos</option>
                    <option value="pending" selected>Belum Diseleksi</option>
                `
                }
                $('#status').html(html);
                $('#id').val(id)
                $('#fire-modal-1').modal('show');
            }
    </script>
@endsection
