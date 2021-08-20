@extends('admin.layouts.master')

@section('title', 'Dashboard Admin EPIM')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1>{{$title}}</h1>
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
                                <h4>Total Peserta</h4>
                            </div>
                            <div class="card-body">
                               {{$all_peserta}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-place-of-worship"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Expo IT</h4>
                            </div>
                            <div class="card-body">
                               {{$peserta_expo}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Bisnis TIK</h4>
                            </div>
                            <div class="card-body">
                               {{$peserta_tcp}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Lomba IT</h4>
                            </div>
                            <div class="card-body">
                               {{$peserta_lomba}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                      <h2>Selamat datang {{ Auth::user()->name }}, Semangat🔥🔥🔥</h2>
                      <p class="lead"></p>
                    </div>
                  </div>
            </div>
        </div>
        </div>
    </section>
</div>
@endsection
