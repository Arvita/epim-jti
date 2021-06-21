@extends('auth.master')
@section('title', 'Halaman tidak ditemukan')
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="page-error">
        <div class="page-inner">
          <h1>404</h1>
          <div class="page-description">
            Halaman yang anda cari tidak ditemukan.
          </div>
          <div class="page-search">
            <div class="mt-3">
                @guest
                    <a href="{{route('home')}}">Kembali ke beranda</a>
                @endguest
                @auth
                    <a href="{{redirect()->back()}}">Kembali ke halaman sebelumnya</a>
                @endauth
              </div>
          </div>
        </div>
      </div>
      <div class="simple-footer mt-5">
        Copyright &copy; Politeknik Negeri Jember
      </div>
    </div>
  </section>
@endsection
