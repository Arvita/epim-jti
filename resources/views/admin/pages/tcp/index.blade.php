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
                                <h4>Terverfikasi</h4>
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
                                <h4>Tidak Terverifikasi</h4>
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
                                <h4>Online Users</h4>
                            </div>
                            <div class="card-body">
                                47
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
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($data_lomba as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama_peserta }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->usia }}</td>
                            <td><a href="{{ asset('upload/'.$item->proposal) }}">Proposal</a></td>
                            <td class="align-middle">
                                @if ($item->status == 'verified')
                                    <div class="badge badge-success">{{ Str::title($item->status) }}</div>
                                @else
                                    <div class="badge badge-danger">{{  Str::title($item->status) }}</div>
                                @endif
                            </td>
                            <td>

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
@endsection
