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
