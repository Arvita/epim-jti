@extends('user.layouts.master')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{$title}}</h1>
          </div>

          <div class="section-body">
            <div class="row">
                <div class="col-12 mb-4">
                  <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                      <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
                      <p class="lead">Pada halaman ini, anda dapat memonitoring perlombaan yang anda pilih.</p>
                    </div>
                  </div>
                </div>
              </div
          </div>
        </section>
      </div>
@endsection()
